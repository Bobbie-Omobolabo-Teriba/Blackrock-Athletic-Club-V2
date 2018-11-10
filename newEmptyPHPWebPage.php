<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Blackrock Athletic Club</title>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/blackrockac_logo.png" type="image/PNG">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="js/mainScript.js" type="text/javascript"></script>
        <script src="js/social.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Menu</button>
                    <div id="myDropdown" class="dropdown-content">
                        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        <a href="news.html">News</a>
                        <a href="news.html#upcomingevents">Upcoming Events</a>
                        <a href="about.html">About us</a>
                        <a href="http://blackrockac.ie/training/" target="_blank">Training Schedule</a>
                        <a href="crossCountry.html">Cross Country</a>
                        <a href="photoGallery/2006.html">Photo Gallery</a>
                        <a href="archives.html">Archives</a>
                        <a href="fit4life.html">Fit 4 Life</a>
                    </div>
                </div>
                <div id="socialmenu">
                    <a class="menulink" href="register/login.php">
                    <img src="register/login.png" alt="" style="width:50px;height:20px;margin-left:20px;text-decoration: none;"/>
                    </a>
                    <a class="menulink" href="register/contact.php">
                    <img src="register/contact.png" alt="" style="width:50px;height:50px;margin-left:5px;text-decoration: none;"/>
                    </a>
                </div>
                <h1 class="headh1"><a href="index.html">Blackrock Athletic Club <img class="logo" src="img/blackrockac_logo.png" alt=""/></a></h1>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <h3>Photo Gallery</h3>
                    <hr>
                    <img class="sidegallery" src="img/11109213_806642992783995_642411090606783785_n_20150708_1328109862.jpg" alt=""/>
                    <hr>
                    <img class="sidegallery" src="img/underthepergolabush2012_20120516_1589152704.jpg" alt=""/>
                    <hr>
                    <img class="sidegallery2" src="img/padraigcush_20120508_1738956434.jpg" alt=""/>
                    <img class="sidegallery2" src="img/16slongjump_20120508_1332497321 .jpg" alt=""/>
                    <br>
                    <a href="photoGallery/2006.html">View More..</a>
                </div>
                <div class="col-sm-7">
                    <br>
                    <h3>Sporting Body, Sporting Mind</h3>
                    <p>Welcome to the official website for Blackrock Athletic Club</p>
                    <img id="homeimg" src="img/Blackrock-AC.png" alt=""/>
                    <img id="homeimg" src="img/blackrockac_logo.png" alt=""/>
                    <br>
                    <br>
                    <p>Like us on Facebook</p>
                    <div id="fb-root"></div>
                    <div class="fb-like" 
                         data-href="https://www.facebook.com/BlackrockAC/" 
                         data-layout="standard" 
                         data-action="like" 
                         data-size="large" 
                         data-show-faces="false" 
                         data-share="true"></div>
                    <br>
                    <br>
                    <p>Follow us on Twitter</p>
                    <a href="https://twitter.com/Blackrock_AC?ref_src=twsrc%5Etfw" 
                       class="twitter-follow-button" data-show-count="false">Follow @Blackrock_AC</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                  
                </div>
                
                <div class="col-sm-2">
                    <h3>Useful Links</h3>   
                    <hr>
                    <a href="http://blackrockac.ie/" target="_blank">Blackrockac.ie</a>
                    <br>
                    <a href="https://www.athleticslouth.com/" target="_blank">Athletic Louth</a>
                </div>
            </div>
        </div>
        <br>
    </body>
</html>
