<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tour Name Entered Dynamically</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/tour.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/explore.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="../css/navbar.css" media="screen" title="no title" charset="utf-8">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function (){
            $("#choose").click(function (){
                $('html, body').animate({
                    scrollTop: $("#categories").offset().top
                }, 500);
            });
        });
    </script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="hero-banner">
        <img src="../../cover.jpg" alt="cover" />
        <div class="hero-overlay">
          <h1>&nbsp;  Explore</h1>
          <span id="choose">Choose from Available Categories</span>
        </div>

      </div>
      <div class="categorisation" id="categories">

        <div class="details">
          <div class="container">
            <h1>Categories:</h1>

            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/0f7624039e10663f4443af44246e11ee6928b328.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Marine Life Study


                </div>
              </div>

            </div>

            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/joeGiantAmmonite2.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Fossil Hunting Trek

                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/Jungle-Safari-in-India-Explore-Wilds-in-the-Untamed-Jungles.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Jungle Safari

                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/download.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Tribal Stay

                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/goru.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Village Safari

                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/music.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Musical Trek

                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/env.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Art Village

                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/bird.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Bird Watching

                </div>
              </div>

            </div>
            <div class="col-md-4">
              <div class="categories">
                  <img src="../../images/nature.jpg" alt="dino" />


                <div class="tour-icon">

                </div>
                <div class="tour-type">Environmental Study

                </div>
              </div>

            </div>

          </div>
        </div>

      </div>

    </div>


  </body>
</html>
