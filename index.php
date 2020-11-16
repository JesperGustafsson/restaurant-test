
<!doctype html>
<html lang="en">
  <head>
    <title>Oskay är cool lol</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css" />  
</head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="container">
        <!-- Row 1 -->
            <nav class="navbar navbar-expand navbar-light bg-light justify-content-between">
                <a class="navbar-brand col-3">
                    <img src="pictures\logo.jpg" width="50" height="50" alt="logo">
                    Vegood
                </a> 

                <div class="col ">
                    <div class="row">Ginstvägen 10B, Falkenberg</div>
                    <div class="row">TEL: 6969969696969</div>
                </div>
                <div class="col">
                    <div class="row">M-T: 8-14, 16-22</div>
                    <div class="row">F-S: 10-23</div>
                </div>
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </nav>
        <div class="row d-flex justify-content-center">
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                    <li data-target="#carouselId" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="pictures\burgare.jpg" alt="First slide" width="1024" height="350">
                    </div>
                    <div class="carousel-item">
                        <img src="pictures\nudlar.jpg" alt="Second slide" width="1024" height="300">
                    </div>
                    <div class="carousel-item">
                        <img src="pictures\curry.jpg" alt="Third slide" width="514" height="300">
                        <img src="pictures\nudlar.jpg" alt="Second slide" width="514" height="300">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- Menu nav -->
        <div class="row">
            <div class="col-2">
                <a href="#burgare">Burgare</a>
             </div>
            <div class="col-2">
                <a href="#nudlar">Nudlar</a>
            </div>
            <div class="col-2">
                <a href="#risrätter">Risrätter</a>
            </div>
            <div class="col-2">
                <a href="#grytor">Burgare</a>
            </div>
            <div class="col-2">Annat</div>
            <div class="col-2">
                <a href="#dryck">Dryck</a>
            </div>
        </div>

        <div class="food-categories">

                <!-- nån hackig loop grej för alla kategorier-->
            <div class="food-category">
                <?php
                 echo "wow"; 
                ?>
                <?php for($i=1;$i<=5;$i++){ ?>

                    <li>Menu Item <?php echo $i; ?></li>
                    <?php } ?>
            </div>
            
        
        </div>

        <div> -- Burgare --
        <!-- food item #1 -->
        <div class="row bg-warning">
            <div class="col"> 
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med 
                </div>hasselbackspotatis
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>

        <!-- food item #2 -->
        <div class="row bg-danger">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>

        <!-- food item #3 -->
        <div class="row bg-warning">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>
        </div>
                <!-- food item #4 -->
                <div> -- Nudlar --
                <div class="row bg-danger" id="nudlar">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>

                <!-- food item #5 -->
        <div class="row bg-warning">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>

                <!-- food item #6 -->
        <div class="row bg-danger">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>
        </div>
                <!-- food item #7 -->
                <div> -- Risrätter --
                <div class="row bg-warning" id="risrätter">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>

                <!-- food item #8 -->
        <div class="row bg-danger">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>
        </div>

        <div> -- Grytor --
                <!-- food item #9 -->
        <div class="row bg-warning" id="grytor">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>
        </div>

        <div> -- Dryck --    
                <!-- food item #10 -->
        <div class="row bg-danger" id="dryck">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>

                <!-- food item #11 -->
        <div class="row bg-warning">
            <div class="col">
                <img src="pictures\köttbullar.jpg"  wdith="150" height="150" alt="köttbullar">
            </div>
            <div class="col">
                <div class="row">
                    Gräddstuvade kötbullar med hasselbackspotatis
                </div>
                <div class="row">
                    Sojaprotein, veteprotein, potatis, havregrädde
                </div>
            </div>
            <div class="col-1 purchase">
                <div class="row info">
                    i
                </div>
                <div class="row cost">
                    69:-
                </div>
                <div class="row stock">
                    - 0 +
                </div>
            </div>
        </div>
        </div>

    </div>    
</body>
    
</html>