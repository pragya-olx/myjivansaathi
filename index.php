<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>
<body style="background-color:cornsilk;">
    <?php include('menu.php');?>
        <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://myjivansaathilocal.com/assets/slider1.jpg');"></div>

            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://myjivansaathilocal.com/assets/slider2.jpg');"></div>

            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://myjivansaathilocal.com/assets/slider5.jpg');"></div>

            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://myjivansaathilocal.com/assets/slider4.jpg');"></div>

            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container" >

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to myjivansaathi!
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Search</h4>
                    </div>
                    <div class="panel-body">
                        <p>Now search from 10000 profiles. Search by id ,name, religion filters to find the best possible match for yourself.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Report</h4>
                    </div>
                    <div class="panel-body">
                        <p>Prepare a report status of all the profiles you like that help in shortlisting them and selecting the best out of them one with the maximum marks.</p>
                        <a href="#" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Event calender</h4>
                    </div>
                    <div class="panel-body">
                        <p>Prepare your own event calender to mark the important dates and time of meeting the people.</p>
                        <a href="http://myjivansaathilocal.com/calender.php" class="btn btn-default">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Features</h2>
            </div>
            <div class="col-md-4 col-sm-6" >
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://myjivansaathilocal.com/assets/lova-calculator.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://myjivansaathilocal.com/assets/kundli2.jpg" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6" >
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://myjivansaathilocal.com/assets/shortlist.png" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://myjivansaathilocal.com/assets/onoff.png" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Exciting Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Exciting Features includes:</p>
                <ul>
                    <li><strong>Kundli Matcher</strong>
                    </li>
                    <li>College based profile matching</li>
                    <li>Multi Language Support</li>
                    <li>Shortlisting Profiles</li>
                    <li>Love percentage calculator</li>
                    <li>Featured Profiles Listing</li>
                </ul>
                <p>Apart from these basic features we also have a complete reporting system of what activitites you do on myjivnsaathi so easily shortlist the profile with best features.We have event calender system as well where you can schedule your meetings.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://myjivansaathilocal.com/assets/kundli.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Now find your suitable match very easily using our multiple features. Let us know if you have face any issues.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call for any queries</a>
                </div>
            </div>
        </div>

        <hr>



    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })

        function openCalender()
        {
            window.location="http://myjivansaathilocal.com/calender.php";
        }
    </script>

</body>

</html>
