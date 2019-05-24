<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>part 14 : membuat carousel menggunakan boostrap </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	  <script type="text/javascript" src="js/jquery.js"></script>
	  <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>

    <div class="container">
      <center><h1>membuat corousell menggunakan boostrap</h1></center>
        <br/>
      <div class="col-md-8 col-md-offset-2">
          <div id="mycarousell" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#mycarousell" data-slide-to="0" class="active"></li>
              <li data-target="#mycarousell" data-slide-to="1"></li>
              <li data-target="#mycarousell" data-slide-to="2"></li>
            </ol>

            <!-- deklarasi carousel -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="Rezi.png" alt="www.rezzyishtar.com">
                <div class="carousel-caption">
                  <h3>www.rezzyishtar.com</h3>
                  <p>tutorial menggunakan pistol air</p>
                </div>
              </div>
              <div class="item">
                <img src="Rezi.png" alt="www.llolloll.co.id">
                <div class="carousel-caption">
                  <h3>www.lolllolllol.co.id</h3>
                  <p>tutorial shitpost yang baik</p>
                </div>
              </div>
              <div class="item">
                <img src="Rezi.png" alt="www.apasihlo.co.id">
                <div class="carousel-caption">
                  <h3>www.apasihlo.co.id</h3>
                  <p>tutorial sngegasss</p>
                </div>
              </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#mycarousell" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">previous</span>
            </a>
            <a class="right carousel-control" href="#mycarousell" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
    </div>
  </body>
</html>
