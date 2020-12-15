<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>P - Settings</title>

        <!-- FRAMEWORK bootstrap  -->
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" /> -->
        <link rel="stylesheet" href="./css/bootstrap.min.css" />
        <link rel="stylesheet" href="./fontawsome/css/all.css"> 
        <!-- CSS PAGINA -->
        <link rel="stylesheet" href="css/stylePagSettings.css">
        <script src="./js/script.js"></script>
        <script src="./js/validacao.js"></script>
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
                        </div><!--menu-header-->
                    </div><!--header-left-->
                    <div class="header-right">
                        <div class="menu-bar">
                            <ul>
                                <li><a><i class="fa fa-cogs"></i></a>
                                    <div class="sub-menu">
                                        <ul>
                                            <li><a href="index.html">Logout</a></li>
                                        </ul>
                                    </div><!--sub-menu-->
                                </li>
                            </ul>
                        </div><!--menu-bar-->
                    </div>
                    <div class="clear"></div>
                </div><!--center-->
            </header>
        </div>
        <?php require_once 'processSettings.php'; ?>

        <?php 
        if (isset($_SESSION['message'])):?>

        <div id="msg" class="alert alert-<?=$_SESSION['msg_type']?>">
            <?php
    echo $_SESSION['message'];
             unset($_SESSION['message']);
            ?><!--End php alert -->
        </div><!--alert-->
        <script>
            setTimeout(function(){
                msg.style.display = 'none';
            },2000);
        </script>
        <?php endif ?>
        <div class="container">
            <?php
    $mysqli = new mysqli('localhost', 'root', '', 'crud1') or die(mysqli_error($mysqli));  
        $result = $mysqli->query("Select * FROM data") or die ($mysqli->error);
            ?><!--End php db -->

            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>E-mail</th>
                            <th>Password</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
                    while($row = $result->fetch_assoc()): 
                    ?><!--end php while -->
                    <tr>
                        <td><?php echo $row['emailSent'];?></td>
                        <td>*******</td>
                        <td>
                            <a href="pagSettings.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
                            <a href="processSettings.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr> 
                    <?php endwhile; ?>
                </table>
            </div><!--row justify-content-center -->

            <?php

            function pre_r($array){
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
            ?><!--end php function -->
            <div class="row justify-content-center">
                <form name="formName" action="processSettings.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <div class="form-group">
                        <lable>E-mail:</lable>
                        <input type="text" name="emailSent" class="form-control" value="<?php echo $emailSent; ?>" placeholder="Enter your e-mail" required>
                        <div class="form-group">
                            <lable>Password</lable>
                            <input type="password" name="passwordSent" class="form-control" value="<?php echo $passwordSent; ?>" placeholder="Enter your password" required>
                        </div><!--form-group -->
                        <div class="form-group">
                            <?php 
                            if ($update == true):
                            ?>
                            <button type="submit" class="btn btn-info" name="update" onclick="return validar()">Update</button>
                            <?php else: ?>
                            <button type="submit" class="btn btn-primary" name="save" onclick="return validar()">Save</button>
                            <?php endif; ?>
                        </div><!--form-group -->
                         
                    </div><!--form-group -->
                </form>
            </div><!--row justify-content-center -->
        </div><!--alert-->
        <h4><p id="msgErro" align="center" style="color: white;"></p></h4>
        <footer>
            <div class="row-lightGray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 tex-center">
                            <img id="logoTipoFooter" src="img/pirataflixW.png" alt="LogoTipo">
                        </div>

                        <div class="col-md-10">
                            <div class="row rowCols">
                                <div class="col-md-4 colPopularPost">
                                    <h4>CONTACT</h4>
                                    <ul class="list-unstyled">
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            felipe_official@outlook.com
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            55 51 989573803
                                        </li><br>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            felipiths58@gmail.com
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i>
                                            55 51 992233599
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-4 colLinks">
                                    <h4>LINKS</h4>
                                    <ul class="list-unstyled">
                                        <li><a href="pagHome.html"><i class="fa fa-angle-right"></i>Home</a></li>
                                        <li><a href="movies.php"><i class="fa fa-angle-right"></i>Movies</a></li>
                                        <li><a href="series.php"><i class="fa fa-angle-right"></i>Series</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-4 colGetInTouch">
                                    <h4>GET IN TOUCH</h4>
                                    <address>
                                        <i class="fa fa-map-marker-alt"></i> <span> Cachoerinha<br>RS, Brasil</span>
                                    </address>

                                    <p>Do you have an idea? We developed it for you!</p>

                                    <ul class="list-unstyled listSocials">
                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>

                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                        </li>

                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>

                                        <li>
                                            <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-darkGray">
                <div class="container">
                    <p class="float-left">Copyright &copy; Pirataflix 2020. All rights reserved.</p>
                    <p class="float-right">Created by Felipe Teixeira Schefer & Felipi Thiesen Tidra.&reg;</p>
                </div>
            </div>
        </footer>
    </body>
</html>