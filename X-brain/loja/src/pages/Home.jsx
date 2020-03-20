import React, { Component } from "react";
import ImgMediaCard from "../components/productCard";

class Home extends Component {
  constructor(props) {
    super(props);

    this.state = {};
  }

  render() {
    return (
      <div>
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
        <ImgMediaCard imagem="/static/images/produto-01.jpeg" />
      </div>
    );
  }
}

export default Home;
