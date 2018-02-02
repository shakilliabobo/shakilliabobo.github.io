<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Shakillia Bobo | Front-End Developer Portfolio</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><img src="./img/shakillia-bobo-developer-web-title-logo.png" /></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li class=""><a href="index.php">About</a></li>
                        <li class=""><a href="index.php">Portfolio</a></li>
                        <li class=""><a href="index.php">Contact</a></li>
                    </ul>
                </div>
            </div>
    </nav>
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="list">
            <div class="item active">
                <img src="./img/get-to-know-me-back-view-developer.png"  />
                <div class="carousel-caption behindKeyboard">
                    <h1>behind the keyboard</h1>
                    <br>
                    <button type="button" class="btn btn-default">Get to Know Me</button>
                </div>
            </div><!--End of Active-->
            <div class="item">
                <img src="./img/background-purple-my-projects.png"  />
                <div class="carousel-caption">
                    <h1>Want to see my Work?</h1>
                    <br>
                    <button type="button" class="btn btn-default">My Projects</button>
                </div>
            </div><!--End of Slide 2-->
            <div class="item">
                <img src="./img/resume-download-shakillia-bobo-developer.png"  />
                <div class="carousel-caption">
                    <h1>Work History and Qualifications</h1>
                    <br>
                    <button type="button" class="btn btn-default">My Resume</button>
                </div>
            </div><!--End of Slide 3-->
            <!--Start Slider Controls-->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div><!--End of Slider-->
    <div class="container text-center">
        <h2>Welcome to My Portfolio Site</h2><br>
        <div class="row">
            <div class="col-sm-4 icon-hover">
                <img src="./img/get-to-know-key.png" id="icon" onmouseover="this.src='./img/get-to-know-key-hover.png';" onmouseout="this.src='./img/get-to-know-key.png';"/>
                <h4></h4>
            </div>
            <div class="col-sm-4 icon-hover">
                <img src="./img/my-works-key.png" id="icon" onmouseover="this.src='./img/my-works-key-hover.png';" onmouseout="this.src='./img/my-works-key.png';"/>
                <h4></h4>
            </div>
            <div class="col-sm-4 icon-hover">
                <img src="./img/see-my-resume-key.png" id="icon" onmouseover="this.src='./img/see-my-resume-key-hover.png';" onmouseout="this.src='./img/see-my-resume-key.png';"/>
                <h4></h4>
            </div>
        </div>
    </div>
    
    <div class="container-fluid aboutMeSection">
        <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4>Shakillia Bobo</h4>
                <p>What a name, right? My mother was a huge Shaquille O' Neal fan back in the day. Contradicting to my name, you'll find that I am not a serial killer and that I absolutely suck at basketball! However, I am an experienced Web Developer born and raised in North Carolina. I specialize in CMS programs such as Wordpress and Joomla. I am knowledgable in HTML, CSS, and Javascript. I am also skilled in Search Engine Optimization and the Google Search Console. I have been working for a marketing design company, Freedom Creative Solutions for a little over two years now and am familiar with the kind of environment that comes with this field. </p>
                   <button class="aboutMeButton">Learn More About Me</button>
            </div>
            <div class="col-md-3">
                <img src="./img/me.jpg" class="img-responsive">
            </div>
        </div>
        </div>
        
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 purpleBorder" id="projectsBox">
                <h4 class="text-center">Team Websites</h4>
                <p>Morbi leo ipsum, accumsan non tellus ac, maximus accumsan ante. Vivamus sagittis ante ut pharetra fringilla. Vestibulum cursus, diam eget imperdiet fringilla, odio est facilisis augue, id varius nunc massa nec ligula. Phasellus commodo elit vel velit accumsan, at egestas dolor bibendum. Mauris porta sapien vel porta faucibus. </p>
            </div>
            <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="./img/websites-portfolio-gallery.png" class="img-responsive">
            </div>-->
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 purpleBorder" id="projectsBox">
                <h4 class="text-center">Personal Projects</h4>
                <p>Morbi leo ipsum, accumsan non tellus ac, maximus accumsan ante. Vivamus sagittis ante ut pharetra fringilla. Vestibulum cursus, diam eget imperdiet fringilla, odio est facilisis augue, id varius nunc massa nec ligula. Phasellus commodo elit vel velit accumsan, at egestas dolor bibendum. Mauris porta sapien vel porta faucibus. </p>
            </div>
           <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <img src="./img/me.jpg" class="img-responsive">
            </div>-->
        </div>
        
            <div class="container-fluid ">
        <div class="container">
        <div class="row">
                <h4><a href="#hidden" data-toggle="collapse">Care to learn more about me?</a></h4>
                <div id="hidden" class="collapse">
                <h4>About Me</h4>
                <p>Morbi leo ipsum, accumsan non tellus ac, maximus accumsan ante. Vivamus sagittis ante ut pharetra fringilla. Vestibulum cursus, diam eget imperdiet fringilla, odio est facilisis augue, id varius nunc massa nec ligula. Phasellus commodo elit vel velit accumsan, at egestas dolor bibendum. Mauris porta sapien vel porta faucibus. Cras commodo, quam ut eleifend bibendum, magna elit dictum orci, ac ultrices neque elit ut arcu. Nullam maximus ante vel libero semper bibendum. Morbi vitae ornare dui. Sed et enim eu purus fringilla euismod ac et tortor. Nullam sed tincidunt nisi. Fusce quis dui at ex tincidunt pharetra. Proin velit ante, congue a quam nec, commodo rhoncus nisi. Sed sagittis nibh sed nulla volutpat lobortis.</p>
                </div>
            
            
        </div>
        </div>
        
    </div>
    </div>
    
    
    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4">
                <h3>Contact Us</h3>
                <br>
                <h4>Our address and contact info here.</h4>
            </div>
            <div class="col-sm-4">
                <h3>Connect</h3>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-google"></a>
                <a href="#" class="fa fa-linkedin"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
            <div class="col-sm-4">
                <img src="./img/shakillia-bobo-developer-web-title-logo.png" class="icon" />
            </div>
        </div>
    </footer>
    
    
</body>
</html>
