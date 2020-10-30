<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

   <header>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><H5> Punto 1</H5></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="punto2.php"><H5> Punto 2</H5></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="punto3.php"><H5> Punto 3</H5></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="punto4.php"><H5> Punto 4</H5></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

                    

    </nav>
    
   </header>
   <main>

   <div class="container">
       <div class="row justify-content-center">
           <div class="col-2">
            
           <form action="index.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                        <input type="number" class="form-control" placeholder="num" name="numero1">
                    </div>
                    <div class="col">
                        <input type="number" class="form-control" placeholder="num" name="numero2">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-2" name="botonSumar">+</button>
                <button type="submit" class="btn btn-primary mt-2" name="botonRestar">-</button>
                <button type="submit" class="btn btn-primary mt-2" name="botonMultiplicar">x</button>
                <button type="submit" class="btn btn-primary mt-2" name="botonDividir">/</button>
            </form>

            

            <?php 

        
                if(isset($_POST["botonSumar"])){

                    $numero1=$_POST["numero1"];
                    $numero2=$_POST["numero2"];

                    $total=$numero1+$numero2;
                    echo("<br>");
                    echo($total);
                    

                }

                else if(isset($_POST["botonRestar"])){

                    $numero1=$_POST["numero1"];
                    $numero2=$_POST["numero2"];

                    $total=$numero1-$numero2;
                    echo("<br>");
                    echo($total);
                }

                else if(isset($_POST["botonMultiplicar"])){

                    $numero1=$_POST["numero1"];
                    $numero2=$_POST["numero2"];

                    $total=$numero1*$numero2;
                    echo("<br>");
                    echo($total);
                }

                else if(isset($_POST["botonDividir"])){

                    $numero1=$_POST["numero1"];
                    $numero2=$_POST["numero2"];

                    $total=$numero1/$numero2;
                    echo("<br>");
                    echo($total);
                }

               
            
            ?>


           </div>
       </div>
   </div>

  
   
   </main>
   <footer>
   
   </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>