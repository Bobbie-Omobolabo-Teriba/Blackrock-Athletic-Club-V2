<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../img/blackrockac_logo.png" type="image/PNG">
        <link rel="stylesheet" type="text/css" href="../vendor2/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor2/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="../vendor2/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor2/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor2/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="../vendor2/daterangepicker/daterangepicker.css">
        <script src="../js/contact.js" type="text/javascript"></script>
        <link href="../css/util2.css" rel="stylesheet" type="text/css"/>
        <link href="../css/contactform.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>


        <div class="container-contact100">
            <div class="wrap-contact100">
                <form class="contact100-form validate-form" action="sendMail.php" method="POST">
                    <span class="contact100-form-title">
                        Send Us A Message
                    </span>

                    <label class="label-input100" for="first-name">Tell us your name *</label>
                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
                        <input id="first-name" class="input100" type="text" name="firstname" placeholder="First name">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
                        <input class="input100" type="text" name="lastname" placeholder="Last name">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="email">Enter your email *</label>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input id="email" class="input100" type="text" name="email" placeholder="Eg. example@email.com">
                        <span class="focus-input100"></span>
                    </div>

                    <label class="label-input100" for="phone">Enter phone number</label>
                    <div class="wrap-input100">
                        <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +343 81 234 5678">
                    </div>

                    <label class="label-input100" for="message">Message *</label>
                    <div class="wrap-input100 validate-input" data-validate = "Message is required">
                        <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn">
                            Send Message
                        </button>
                    </div>
                    <div class="text-center p-t-136" style="text-align: center;">
                        <a class="txt2" href="../index.html" style="text-align: center;">
                            Return to Home page
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>

                <div class="contact100-more flex-col-c-m" style="background-image: url('https://cdn-images-1.medium.com/max/1256/1*t8RDePDqaM81dGsHFpKNBw.jpeg');">
                    <div class="flex-w size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-map-marker"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Address
                            </span>

                            <span class="txt3">
                                Blackrock Athletics Club, Dundalk, Louth, Ireland
                            </span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                Call in
                            </span>

                            <span class="txt3">

                                087 9619649
                            </span>
                        </div>
                    </div>

                    <div class="dis-flex size1 p-b-47">
                        <div class="txt1 p-r-25">
                            <span class="lnr lnr-envelope"></span>
                        </div>

                        <div class="flex-col size2">
                            <span class="txt1 p-b-20">
                                General Support
                            </span>

                            <span class="txt3">
                                blackrockac@gmail.com
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="dropDownSelect1"></div>
        <script src="../js/contact_v2.js" type="text/javascript"></script>
        <script src="../vendor2/jquery/jquery-3.2.1.min.js"></script>
        <script src="../vendor2/animsition/js/animsition.min.js"></script>
        <script src="../vendor2/bootstrap/js/popper.js"></script>
        <script src="../vendor2/bootstrap/js/bootstrap.min.js"></script>
        <script src="../vendor2/select2/select2.min.js"></script>
        <script src="../vendor2/daterangepicker/moment.min.js"></script>
        <script src="../vendor2/daterangepicker/daterangepicker.js"></script>
        <script src="../vendor2/countdowntime/countdowntime.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    </body>
</html>
