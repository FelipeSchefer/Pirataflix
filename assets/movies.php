<html lang="pt-BR">

    <head>
        <meta charset="utf-8" />
        <title>P - Cadastro de Filmes</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./fontawsome/css/all.css">
        <link type="text/css" rel="stylesheet" href="css/styleMovies.css" />

    </head>

    <body>
        <div class="header">
            <header>
                <div class="center">

                    <div class="header-left">
                        <a href=""><img src="img/pirataflixW.png"></a>
                        <div class="menu-header">
                            <ul>
                                <li><a href="pagHome.html">Home</a></li>
                            </ul>
                        </div>
                        <!--menu-header-->
                    </div>
                    <!--header-left-->
                    <div class="header-right">
                        <div class="menu-bar">
                            <ul>
                                <li><a><i class="fa fa-cogs"></i></a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="index.html">Logout</a></li>
                                        </ul>
                                    </div>
                                    <!--sub-menu-->
                                </li>
                            </ul>
                        </div>
                        <!--menu-bar-->
                    </div>
                    <div class="clear"></div>
                </div>
                <!--center-->
                <h2 class="titleC" >
                    Insert your movie you want</h2>
            </header>
        </div>
        <div>
            <section>
                <div class="interactionUser">
                    <br>
                    <hr align="left" width="1342"><br>
                    <form id="form1" name="formMovies" method="post" action="cadastroMovies.php">
                        <label class="title" style="margin-left: 94px;">Movie title:</label>
                        <input type="text" name="title" size="20" maxlength="40" id="campoPadrao" required>
                        <br><br>
                        <label class="linkMovie" style="margin-left: 106px;">Movie link:</label>
                        <input type="text" name="linkMovie" size="20" maxlength="40" id="campoPadrao" required>
                        <br><br>
                        <div id="buttons">
                            <input type="submit" value="Send" class="myButton" id="send" onclick="return validarMovie()">
                            <input type="reset" value="Reset" class="myButton" id="reset"><br><br>
                        </div>
                        <hr align="left" width="1342">
                        <h4><p id="msgErro" style="color: white;"></p></h4>
                    </form><br>
                </div>
                 
                <div class="clear"></div>
            </section>
            <div>
                <?php
                // Inclui arquivo de conexão com banco de dados
                include_once 'dataBase.php';
                $pg =1;
                if(isset($_GET['pg'])){
                    $pg = $pg;
                }
                $quantidade = 5;
                $inicio = ($pg*$quantidade) - $quantidade;

                $result = $mysqli->query("SELECT * FROM movies ORDER BY id ASC LIMIT $inicio, $quantidade");
                while ($linha = $result->fetch_array()){
                    $id = $linha['id'];
                    $title = $linha['title'];
                    $linkMovie = $linha['linkMovie'];

                    echo "<ul class='movies' style='list-style: none;'><li><center><h2 id='titleM'>$title</h2></center><br>
                            <iframe width='340' height='200' src='https://www.youtube.com/embed/$linkMovie' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe><br><button class='bDelete'><a href='deleteMovies.php?delete=" . $linha['id'] .
                        "name ='delete' id='delete' class='btn btn-danger'>Delete</a></button> </li></ul>";
                }

                $result = $mysqli->query("SELECT * FROM movies");
                $total_registros = $result->num_rows;
                $paginas = ceil($total_registros/$quantidade);
                $links = 1;

                $mysqli->close();
                ?>

            </div>
        </div>
        <script src="./js/validacao.js"></script>
    </body>

</html>