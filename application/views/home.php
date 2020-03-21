<?php echo base_url(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dental Medical Record ?></title>

        <link href="<?php echo base_url(); ?>assets/user/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css">
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/user/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/user/css/owl.carousel.theme.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/user/css/main.css" rel="stylesheet">


        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body data-spy="scroll" data-target="#main-navbar">

        <!-- NavigationBar Section -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                    <img class="img-responsive" src="<?php echo base_url(); ?>assets/user/images/gbr3.png" alt="logo" style="width: 180px; height: 60px">
                  </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navbar">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#header">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#slider-1">Login</a></li>
                    <li><a href="#register">Register</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
                </nav>

        <!-- Header Section -->
            <header id="header" class="header overlay-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="intro-box c-table">
                                <div class="intro ct-cell">
                                    <h1>We Care Your Smile</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>


<!-- login -->
   <script type="javascript" src="<?php echo base_url(); ?>assets/user/js/login.js"></script>

        <!-- Fun Facts -->
            <section id="fun" class="fun">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box">
                                <p class="section-subtitle">We are known by</p>
                                <h2 class="section-title">Who we are</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="fun-box">
                                <p class="fun-number">2000+</p>
                                <p class="fun-title">Records were documented </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fun-box">
                                <p class="fun-number">1000+</p>
                                <p class="fun-title">Dentists were used</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fun-box">
                                <p class="fun-number">2000+</p>
                                <p class="fun-title">Patients </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Slider 1 -->
            <section id="slider-1" class="slider-1 overlay-light">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 hidden-xs">
                        </div>
                        <div class="col-sm-6 col-sm-offset-1">
                            <div id="slider_1" class="owl-carousel">
                                <div class="item">
                                    <div class="slider-1-item-box">
                                        <span class="slider-icon ion-ios-people"></span>
                                        <h2>Login</h2>
                                        <link href="<?php echo base_url();?>assets/user/css/login.css" rel="stylesheet">
                                        <form action="<?php echo base_url('c_login/cek_login');?>" method="post">
                                            <div class="col-sm-12">
                                                <input class="form-control" name="username" type="text" placeholder="Username" required> 
                                            </div>
                                            <div class="col-sm-12">
                                                <input class="form-control" name="password" type="password" placeholder="Password" required> 
                                            </div>
                                            <button type="submit" class="btn btn-success" href="<?php echo base_url('c_login/cek_login');?>">LOGIN</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="slider-1-item-box">
                                        <span class="slider-icon ion-heart-broken"></span>
                                        <h2></h2>
                                        <p>
                                        </p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- CTA -->
           <!--  <section id="cta" class="cta">
                <div class="container">
                    <div class="cta-bg">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <p>
                                    Lorem Ipsum dolor sit amet, consectetur adipisicing elit. Alias provident libero tenetur asperiores perspiciatis eum, obcaecati ex animi, neque, autem possimus dolor veniam recusandae ipsum aspernatur perferendis aliquid culpa earum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi dolor aperiam, suscipit architecto.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h1>
                                    Get your free<br>
                                    <small>Consultation today</small>
                                </h1>
                            </div>
                            <div class="col-sm-6">
                        </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- Why choose us -->
           <!--  <section id="choose" class="choose overlay-light">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box">
                                <p class="section-subtitle">We are known by</p>
                                <h2 class="section-title">Why choose us</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="choose-box">
                                <span class="choose-icon ion-social-angular-outline"></span>
                                <h3 class="choose-title">Best Attorneys</h3>
                                <p class="choose-detail">
                                    Praesent dambus &amp; Send aug eget sollicitudin velit malesuada Aliquam blandit Mani leumat eget sollicauchnex
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="choose-box">
                                <span class="choose-icon ion-compose"></span>
                                <h3 class="choose-title">Highly Qualified</h3>
                                <p class="choose-detail">
                                    Praesent dambus &amp; Send aug eget sollicitudin velit malesuada Aliquam blandit Mani leumat eget sollicauchnex
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="choose-box">
                                <span class="choose-icon ion-android-bulb"></span>
                                <h3 class="choose-title">Completely trustable</h3>
                                <p class="choose-detail">
                                    Praesent dambus &amp; Send aug eget sollicitudin velit malesuada Aliquam blandit Mani leumat eget sollicauchnex
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- Practice areas -->
            <!-- <section id="practice" class="practice">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box">
                                <p class="section-subtitle">Check out our</p>
                                <h2 class="section-title">Practice Areas</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="practice-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/Prac-1.jpg">
                                <div class="overlay">
                                    <div class="c-table">
                                        <div class="ct-cell">
                                            <span class="paractice-icon ion-heart-broken"></span>
                                            <h3 class="practice-title">Medical malpractice</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="practice-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/Prac-2.jpg">
                                <div class="overlay">
                                    <div class="c-table">
                                        <div class="ct-cell">
                                            <span class="paractice-icon ion-ios-people"></span>
                                            <h3 class="practice-title">Medical malpractice</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="practice-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/Prac-3.jpg">
                                <div class="overlay">
                                    <div class="c-table">
                                        <div class="ct-cell">
                                            <span class="paractice-icon ion-android-car"></span>
                                            <h3 class="practice-title">Medical malpractice</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="practice-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/Prac-4.jpg">
                                <div class="overlay">
                                    <div class="c-table">
                                        <div class="ct-cell">
                                            <span class="paractice-icon ion-ios-home"></span>
                                            <h3 class="practice-title">Medical malpractice</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="practice-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/Prac-5.jpg">
                                <div class="overlay">
                                    <div class="c-table">
                                        <div class="ct-cell">
                                            <span class="paractice-icon ion-person"></span>
                                            <h3 class="practice-title">Medical malpractice</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="practice-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/Prac-6.jpg">
                                <div class="overlay">
                                    <div class="c-table">
                                        <div class="ct-cell">
                                            <span class="paractice-icon ion-social-usd"></span>
                                            <h3 class="practice-title">Medical malpractice</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- Team -->
            <!--<section id="team" class="team">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box">
                                <p class="section-subtitle">You may want to</p>
                                <h2 class="section-title">Know the attorneys</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="team-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/team-1.jpg" alt="team">
                                <div class="team-detail">
                                    <ul>
                                        <li><h3>Jewel Jahan</h3></li>
                                        <li><h4>Counsel</h4></li>
                                        <li>Family Law</li>
                                        <li>Commercial Lending,</li>
                                        <li>Real Estate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="team-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/team-2.jpg" alt="team">
                                <div class="team-detail">
                                    <ul>
                                        <li><h3>Rub Elvi</h3></li>
                                        <li><h4>Member</h4></li>
                                        <li>Personal Injury</li>
                                        <li>Medical Malpractice,</li>
                                        <li>Real Estate</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="team-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/team-3.jpg" alt="team">
                                <div class="team-detail">
                                    <ul>
                                        <li><h3>K. Survy</h3></li>
                                        <li><h4>Member</h4></li>
                                        <li>Vehicle accident</li>
                                        <li>Commercial Lending,</li>
                                        <li>Personal Injury</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- Clients -->
            <!-- <section id="clients" class="clients">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box">
                                <p class="section-subtitle">Some of our</p>
                                <h2 class="section-title">Satisfied clients</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-offset-1 col-sm-2">
                            <div class="client-box">
                                <a href="#">
                                    <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/com-1.png" alt="com">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="client-box">
                                <a href="#">
                                    <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/com-2.png" alt="com">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="client-box">
                                <a href="#">
                                    <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/com-3.png" alt="com">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="client-box">
                                <a href="#">
                                    <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/com-4.png" alt="com">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="client-box">
                                <a href="#">
                                    <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/com-5.png" alt="com">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

        <!-- Testimonial -->
            <!-- <section id="testimonial" class="testimonial">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-11 col-sm-offset-1">
                            <div id="test-slider" class="owl-carousel">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/testimonial-1.jpg" alt="testimonial">
                                        </div>
                                        <div class="col-sm-7">
                                            <p>
                                                Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, Aenean imperdiet. Etiam ultricies nisi vel tellus. PhaseIlus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Phasellus viverra nulls ut metus varius laoreet.
                                            </p>
                                            <span>K. Survy | CEO, Google</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/testimonial-2.jpg" alt="testimonial">
                                        </div>
                                        <div class="col-sm-7">
                                            <p>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of essentially unchanged. It was popularised in the 1960s with the Letraset sheets containing Lorem Ipsum passages.
                                            </p>
                                            <span>K. Survy | CEO, Google</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/testimonial-3.jpg" alt="testimonial">
                                        </div>
                                        <div class="col-sm-7">
                                            <p>
                                                This is Texas Lawyers, an awesome template for Lawyers. It provides everything and more for a lower. Search no more, Download this now.This is Texas Lawyers, an awesome template for Lawyers. It provides everything and more for a lower. Search no more,printer took a galley of essentially unchanged. It was popularised in the 1960s with the Letraset sheets containing Lorem Ipsum.
                                            </p>
                                            <span>K. Survy | CEO, Google</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </section> -->

        <!-- Contact -->
            <section id="register" class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box">
                                <p class="section-subtitle">Ingin Bergabung?</p>
                                <h2 class="section-title">Register Disini</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="team-box">
                                <img class="img-responsive img-full" src="<?php echo base_url(); ?>assets/user/images/header2.jpg" alt="team">
                            </div>
                     
                             
                        </div>
                        <div class="col-sm-6">
                            <form action="<?php echo base_url('c_register/do_insert');?>" method="post">
                                <div class="input-group" class="col-md-6">
                                    <input class="form-control" name="firstname" type="text" placeholder="Nama Depan" required>
                                    <input class="form-control" name="lastname" type="text" placeholder="Nama Belakang" required>
                                    <input class="form-control" name="username" type="text" placeholder="Username" required>
                                    <input class="form-control" name="password" type="password" placeholder="Password" required>
                                    <input class="form-control" name="email" type="text" placeholder="Email" required>
                                    <input class="form-control" name="no_hp" type="text" placeholder="Nomor Handphone" required>
                                    <input class="form-control" name="alamat" type="text" placeholder="Alamat" required> 
                                </div>
                                <div class="input-group">
                                    <div class="col-sm-12 col-sm-offset-1">
                                        <select name="gender" class="form-control">
                                            <option name="gender" value="Male">Laki-laki</option>
                                            <option name="gender" value="Female">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group">
                                    <div class="col-sm-12 col-sm-offset-1">
                                         <select name="job" class="form-control">
                                            <option name="job" value="Doctor">Dokter</option>
                                            <option name="job" value="Nurse">Perawat</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-default col-sm-12" href="<?php echo base_url('c_register/do_insert');?>">REGISTER</button>
                                </div>
                            </form>
                        </div>
                            
                            
                        </div>
                    </div>
               
            </section>

            

        <!-- Subscribe -->
<!--             <div id="subscribe"  class="subscribe">
                 <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Subscribe to our weekly newsletter</h2>
                            <p>*Dont worry, we dont spam</p>
                        </div>
                        <div class="col-sm-6">
                            <form class="subscribe-form" id="subscription-form">
                                <div class="form-group">
                                    <label class="sr-only" for="subscriber-email">Email address</label>
                                    <div class="form-group has-feedback">
                                        <div class="input-group">
                                            <span class="input-group-addon ion-email"></span>
                                            <input type="email" id="subscriber-email" class="form-control" placeholder="email" required>
                                        </div>
                                        <span class="ion-android-checkmark-circle form-control-feedback" aria-hidden="true"></span>
                                    </div>
                                </div><!--/input-grpup

                                <button type="submit" id="subscribe-button" type="submit" class="btn btn-default hide"><i class="ion-heart"></i> Get it</button>
                            </form>

                            <!-- SUCCESS OR ERROR MESSAGES -->
                            <!-- <div id="subscription-response"></div>
                        </div>
                    </div>
                </div>
            </div>  -->

        <!-- Footer -->
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                @ Dental Record
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-social">
                                <a href="#"><i class="ion-social-facebook"></i></a>
                                <a href="#"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#"><i class="ion-social-skype-outline"></i></a>
                                <a href="#"><i class="ion-social-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        
        <!-- Scripts -->
        
        <script src="<?php echo base_url(); ?>assets/user/js/jquery-1.12.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/user/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/user/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/user/js/script.js"></script>
    </body>
</html>
