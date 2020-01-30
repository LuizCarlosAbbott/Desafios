<?php
//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("127.0.0.1", "root", "");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "gerenciamento_de_chamados");
 
//criando a query de consulta à tabela criada 
// $sql = mysqli_query($cx, "SELECT * FROM chamados") or die( 
//   mysqli_error($cx)
// );
 
//criando arrays vazios
// $ndo = [];
// $do = [];

//alocando dados nos respectivos arrays
// while($aux = mysqli_fetch_assoc($sql)) {
//   if($aux["feito"] == 0) 
//     $ndo = array_merge($ndo, ["#".$aux["id"]." ".$aux["titulo"]]);
//   else 
//     $do = array_merge($do, ["#".$aux["id"]." ".$aux["titulo"]]);
// }

// print_r($ndo);
// print_r(count($ndo));
// print_r("-----------\n\n");
// print_r($do);
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="alleartikelen.css">
    <style>
            .table td {
               font-family: Merriweather, serif;
               font-size: 18px;
               padding: 10px 5px;
               overflow: hidden;
               word-break: normal;
            }
            .column_left {
                float: left;
                display: block;
               height: 10%;
               text-align: left;
            }
            .column_right {
                float: right;
                display: block;
               height: 10%;
               text-align: left;
            }


            td,th {
               font-family: "Calibri ";
               width: 32vw;
            }
            

            tr:nth-child(even){
               background-color: #ddd;
            }

            tr:hover {
                background-color: #F6F6F6;
            }

            th {
                color:white;
             }

             h3 {
                margin: 0;
             }

            .aa {
                text-decoration: none;
                color: inherit;
            }
            
     </style>
</head>
<body>
    <?php 
        $sql1 = "SELECT * FROM chamados where feito != 0 order by id ";
        $sql2 = "SELECT * FROM chamados where feito = 0 order by id ";
        $result1 = $cx->query($sql1);
        $result2 = $cx->query($sql2);
     ?>
     <section>   
        <div class="container">  
            <table class="table">   
    <?php 
    echo "<tbody class=\"column_right\">";
    echo "<tr><td><h3>Feitos</h3></td></tr>";
    while($rows = $result1->fetch_assoc()) {
        echo "<tr >";
            echo "<td>". $rows['id'] . "<a href='test-mysql.php?id=" 
            . $rows['id'] . "' class ='aa'> " . $rows['titulo'] . "</a>";
            echo "</td>";
        echo "</tr>";
     }

     echo "<tbody class=\"column_left\">";
     echo "<tr><td><h3>A Fazer</h3></td></tr>";
     while($rows = $result2->fetch_assoc()) {
        echo "<tr >";
        echo "<td>". $rows['id'] . "<a href='test-mysql.php?id=" 
        . $rows['id'] . "' class ='aa'> " . $rows['titulo'] . "</a>";
            echo "</td>";
        echo "</tr>";
     }
    

    ?>
    </section>  
        </body>
    </html>