@include('layout/dashboard')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .fakeimg {
            height: 100px;
            background: #742525;
        }

        body {
            background-image: url("../assets/img/sport/4.jpg") no-repeat;
            background-color: #0c042c;
        }
    </style>

    <title>Players</title>
</head>

<body>

    <div class="jumbotron text-center" >
        <h2>Welcome to Sport Management System</h2>
    </div>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
        </ol>

                  <!-- Wrapper for slides -->
        <div class="carousel-inner" style="align-content: center">
            <div class="item active">
                <img style="margin: auto" src="http://www.mabelfullerinitiative.org/uploads/3/9/7/2/39721486/fifa-u-17-womens-world-cup-2012-7-998x663_orig.jpg" alt="Cricket">
            </div>

            <div class="item">
                <img style="margin: auto" src="http://ichef.bbci.co.uk/news/976/mcs/media/images/83510000/jpg/_83510812_g_bronze_x.jpg " alt="Rugby">
              </div>

              <div class="item">
                <img style="margin: auto" src="assets/img/sport/1.jpg" alt="Elle">
              </div>
        </div>

                  <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</body>
</html>
