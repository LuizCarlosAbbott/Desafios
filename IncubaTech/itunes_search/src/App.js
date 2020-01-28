import React, { Component, Fragment } from "react";
import { Row, Col, Card, CardBody, Input, Form } from "reactstrap";
import "./App.css";

class App extends Component {
	state = {
		musicas: [],
		albuns: [],
		artist: [],
		lista: false,
		value: ""
	};

	constructor(props) {
		super(props);

		this.handleChange = this.handleChange.bind(this);
		this.handleSubmit = this.handleSubmit.bind(this);
		this.handleSubmit = this.handleSubmit.bind(this);
	}

	search() {
		fetch(
			"https://itunes.apple.com/search?term=" +
				this.state.value +
				"&limit=25"
		)
			.then((res) => res.json())
			.then((data) => {
				let musicas = data.results
					.map(
						(data) =>
							data.trackCensoredName + " #" + data.artistName
					)
					.filter((value, index, self) => {
						return self.indexOf(value) === index;
					});

				let albuns = data.results
					.map((data) => data.collectionName + " #" + data.artistName)
					.filter((value, index, self) => {
						return self.indexOf(value) === index;
					});

				let artist = data.results
					.map((data) => data.artistName)
					.filter((value, index, self) => {
						return self.indexOf(value) === index;
					});

				this.setState({ musicas, albuns, artist });
			})
			.catch();
	}

	handleChange(event) {
		this.setState({ value: event.target.value });
	}

	handleSubmit(event) {
		this.search();
		event.preventDefault();
	}

	render() {
		return (
			<Card>
				<CardBody>
					<Form onSubmit={this.handleSubmit}>
						<label>
							Nome:
							<Input
								type="text"
								value={this.state.value}
								onChange={this.handleChange}
							/>
						</label>
						<Input type="submit" value="Enviar" />
					</Form>
					<Row>
						<Col>
							{this.state.lista
								? this.state.artist.map((artista) => {
										let musicas = [];
										this.state.musicas.map((musica) => {
											let musicaSplit = musica.split("#");
											if (artista === musicaSplit.pop())
												musicas.push(musicaSplit[0]);
										});
										return (
											<Fragment>
												<h3>{artista}</h3>
												{musicas.map((musica) => {
													return (
														<div>
															{musica}
															<br />
														</div>
													);
												})}
											</Fragment>
										);
								  })
								: this.state.artist.map((artista) => {
										let albuns = [];
										this.state.albuns.map((album) => {
											let albumSplit = album.split("#");
											if (artista === albumSplit.pop())
												albuns.push(albumSplit[0]);
										});
										return (
											<Fragment>
												<h3>{artista}</h3>
												{albuns.map((album) => {
													return (
														<div>
															{album}
															<br />
														</div>
													);
												})}
											</Fragment>
										);
								  })}
						</Col>
					</Row>
				</CardBody>
			</Card>
		);
	}
}

export default App;
