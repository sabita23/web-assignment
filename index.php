<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" /-->
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Sabita Photography</title>

  <link rel="icon" type="image/x-icon" href="assets/img/logos/LOGO-SVGwhite.png" />
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Raleway::100,300,400,700,400italic,700italic" rel='stylesheet'>
  <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger fade-in-left" href="#page-top"><img src="images/logoo.png"
          alt="SR Logo" /></a>
      <button class="navbar-toggler navbar-toggler-right fade-in-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars ml-1"></i>
      </button>
      <div class="collapse navbar-collapse fade-in-right" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#features">Features</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#events">Experience</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="gallery.php">Gallery</a></li>
          <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Teams</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Masthead-->
  <header class="masthead">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000"
      data-pause="false">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> -->
      </ol>
      <div class="carousel-inner" role="listbox">
      Slide One - Set the background image for this s
      lide in the line below -->
      <div class="carousel-item active" style="background-image: url('images/logo.jpg');">
        <!-- Content for the carousel item goes here -->
    </div>
                    <a href=""><div class="carousel-caption ">
                      <h2 class="display-4"> </h2>
                      <p class="lead"></p>
                      <div class="carousel-button">
                    </div>
                      <p class="lead"></p>
                    </div></a>
                  </div> 
       
    </div>
  </header> -->
     <!DOCTYPE html>
<html>
<head>
 <title>timer</title>
</head>
<body>
  


	
  </section>
  <!-- About-->
  
  <section class="page-section fadein" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-7">

    <h1 class='text-success'>Welcome to PIXEL photography</h1>

<?php
include 'connection.php'; // Include your database connection file

$query = "SELECT Description FROM home";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $description = $row['Description'];
} else {
    $description = "Default description"; // Provide a default if no description is found
}

mysqli_close($conn); // Close the database connection
?>

<div class="col-12 col-lg-8 col-xl-6">
    <div class="welcome-text">
        <p data-animation="bounceInUp" data-delay="500ms"><?php echo $description; ?></p>
    </div>
</div>
          <p><h2>What we offer? </h2><br>
            Portrait Photography
From family portraits to professional headshots, we specialize in creating stunning and timeless images that reflect your personality and essence. Whether in the studio or on location, we ensure a comfortable and enjoyable experience for you.
<br> <br>
Event Photography
Be it weddings, corporate events, or intimate gatherings, our event photography services are designed to capture the essence and emotion of your special occasions. We blend into the background to document candid moments and intricate details, ensuring you have a comprehensive visual story to look back on.
<br>
<br>
Nature and Landscape Photography
Our love for nature and the great outdoors is evident in our landscape photography portfolio. We explore breathtaking locations to bring you awe-inspiring images that highlight the beauty of the natural world. Perfect for home décor or office spaces, these photos aim to evoke a sense of peace and wonder.
          </p> <br>
          <p>Pixel Photography offers professional excellence, personalized experiences, and a creative vision.
            We use state-of-the-art equipment and editing techniques to produce high-quality images. We understand each client's unique vision and requirements, tailoring services to meet their specific needs. 
           Our diverse portfolio showcases their dedication to capturing beauty and emotion in every subject, making them a great choice for inspiration or projects.</p>


        </div>
        <div class="col-md-5">
          <img class="camera-img" src="assets/img/about/people-and-camera.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <!--<section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2012</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2014</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>-->

  <!--Feature Row1-->
  <section class="page-section bg-light" id="features">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Our Features</h2>
        <h3 class="section-subheading text-muted"> PIXEL PHOTOGRAPHY has a unique hashtag i.e. #PIXELphotography which
          has about 1000+ post . The ones with unique and creative photographs get featured on the page with a special
          mention.</h3>
      </div>

      <div class="container">
        <div class="row">
          <!-- Feature 1 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="">
                <img src="images/sabita 2.jpg" class="card-feature-img-top" alt="1-1"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">love

                  </h5>
                  <div class="card-text text-black-50">_blissful_</div>
                </a>

              </div>
            </div>
          </div>
          <!-- Feature 2 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/p/CEnvjwDg8Yr/?utm_source=ig_web_copy_link">
                <img src="assets/img/features/1-2.jpg" class="card-feature-img-top" alt="1-2"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Krishh</h5>
                  <div class="card-text text-black-50">weshall_shoot</div>
                </a>
              </div>
            </div>
          </div>

          <!-- Feature 3 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/1-3.jpg" class="card-feature-img-top" alt="1-3"></a>
              <div class="card-body text-center">
                <h5 class="card-title mb-0">Life</h5>
                <div class="card-text text-black-50">What is life?</div>
              </div>
            </div>
          </div>
          <!-- Feature 4 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/1-4.jpg" class="card-feature-img-top" alt="1-4"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Rishikesh</h5>
                  <div class="card-text text-black-50">_the_moments</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Feature Row 2-->
      <div class="container">
        <div class="row">
          <!-- Feature 1 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/2-1.jpg" class="card-feature-img-top" alt="2-1"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">ios</h5>
                  <div id="card-txt">
                    <div class="card-text  text-black-50 ">mac=rich</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <!-- Feature 2 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/2-2.jpg" class="card-feature-img-top" alt="2-2">
              </a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">art</h5>
                  <div class="card-text text-black-50">the__shooter</div>
                </a>
              </div>
            </div>
          </div>
          <!-- Feature 3 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="images/sky.jpg" class="card-feature-img-top" alt="2-3">
              </a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Sky</h5>
                  <div class="card-text text-black-50">cloudy art</div>
                </a>
              </div>
            </div>
          </div>
          <!-- Feature 4 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <img src="assets/img/features/2-4.jpg" class="card-feature-img-top" alt="2-4">
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Urane</h5>
                  <div class="card-text text-black-50">game.of.frames_</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- /.row -->

      <!--Feature Row 3-->
      <div class="container">
        <div class="row">
          <!-- Feature 1 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/3-1.jpg" class="card-feature-img-top" alt="3-1"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Care_more</h5>
                  <div class="card-text text-black-50">--</div>
                </a>
              </div>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/3-2.jpg" class="card-feature-img-top" alt="3-2">
              </a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Koshti</h5>
                  <div class="card-text text-black-50">the_wrong_exposure</div>
                </a>
              </div>
            </div>
          </div>
          <!-- Feature 3 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/3-3.jpg" class="card-feature-img-top" alt="3-3"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">LIGHT </h5>
                  <div class="card-text text-black-50">rutwinkk</div>
                </a>
              </div>
            </div>
          </div>
          <!-- Feature 4 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/3-4.jpg" class="card-feature-img-top" alt="3-4"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Eyes</h5>
                  <div class="card-text text-black-50">freezethe_moment_</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--Feature Row 4-->
      <div class="container">
        <div class="row">
          <!-- Feature 1 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/4-1.jpg" class="card-feature-img-top" alt="4-1"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">cuteness </h5>
                  <div class="card-text text-black-50">sleepy head</div>
                </a>
              </div>
            </div>
          </div>

          <!-- Feature 2 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/4-2.jpg" class="card-feature-img-top" alt="4-2">
              </a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/sabta_hahaha/">
                  <h5 class="card-title mb-0">Brownish</h5>
                  <div class="card-text text-black-50"> _speakingframes</div>
                </a>
              </div>
            </div>
          </div>
          <!-- Feature 3 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/sabta_hahaha/">
                <img src="assets/img/features/4-3.jpg" class="card-feature-img-top" alt="4-3"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/prato.grapher/">
                  <h5 class="card-title mb-0">Loneliness</h5>
                  <div class="card-text text-black-50">pixel.grapher</div>
                </a>
              </div>
            </div>
          </div>
          <!-- Feature 4 -->
          <div class="col-lg-3 col-md-4 col-6">
            <div class="card-feature border-0 shadow">
              <a href="https://www.instagram.com/p/CDDZmOpA_qO/?utm_source=ig_web_copy_link">
                <img src="assets/img/features/4-4.jpg" class="card-feature-img-top" alt="4-4"></a>
              <div class="card-body text-center">
                <a href="https://www.instagram.com/_magic.lens/">
                  <h5 class="card-title mb-0">Lachake</h5>
                  <div class="card-text text-black-50">_lens</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>


  <!-- Events and Workshops-->
  <section class="page-section" id="events">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Experience</h2>
        <h3 class="section-subheading text-muted">Photography is all about practice and dedication. So, we arrange
          different events to help budding photographers to get more exposure into different jonars by participating in
          it . It not only helps in improving into photography but also building confidence into the participants.</h3>
      </div>

   <!-- Team-->
  <section class="page-section bg-light" id="team">
    <div class="container">
      <div class="text-center">
        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        <h3 class="section-subheading text-muted">Every Club needs someone at Lead to guide , support and show you the
          right path before making a mistake.</h3>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="team-member">
			<!-- sir-->
            <img class="mx-auto rounded-circle" src="images/sai.jpg" alt="" />
            <h4>Sabita rana</h4>
            <p class="text-muted">photographer</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/amol-kapse-b90835120"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/sabta.rana.5/"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/sabta_hahaha/"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team-member">
			<!-- president -->
            <img class="mx-auto rounded-circle" src="images/sabitey.jpg" alt="" />
            <h4>karina saru</h4>
            <p class="text-muted">manager</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/sabta.rana.5/"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/sabta_hahaha/"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="team-member">
			<!-- vice president -->
            <img class="mx-auto rounded-circle" src="images/roma.jpg" alt="" />
            <h4>roma bamrel</h4>
            <p class="text-muted">editor</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_speakingframes/"><i
                class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/FCharde?s=09"><i
                class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/falguni-charde-2749511b0"><i
                class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        </div>
        <div class="row">
        <div class="col-lg">
          <div class="team-member">
			<!-- activity head -->
            <img class="mx-auto rounded-circle" src="images/pratistha.jpg" alt="" />
            <h4>pratistha aryal</h4>
            <p class="text-muted">Activity Head</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/prato.grapher"><i
                class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://linkedin.com/in/pratik-kale135"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://pratikkale.biz"><i class="fas fa-globe"></i></a>
          </div>
        </div>
		<div class="col-lg">
          <div class="team-member">
			<!-- content writing nidhi & srishti-->
            <img class="mx-auto rounded-circle" src="images/nishma.jpg" alt="" />
            <h4>Nishma gurung</h4>
            <p class="text-muted">Content Writer</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/perspective.of.a.wallflower/"><i
                class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-lg">
          <div class="team-member">
      <!-- web + content  -->
            <img class="mx-auto rounded-circle" src="images/kusum.jpg" alt="" />
            <h4>kusum pradhan</h4>
            <p class="text-muted">Web Developer and Content Writer</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/timeless._.treasures._/"><i
                class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/srishti-acharya-90920a20a"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://srishtiacharya.github.io/Portfolio/"><i class="fas fa-globe"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
		<div class="col-lg">
          <div class="team-member">
			<!-- WEb developers nehaal, aditya-->
            <img class="mx-auto rounded-circle" src="images/mandir.jpg" alt="" />
            <h4>krish pradhan </h4>
            <p class="text-muted">Web Developer</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/a_rail_soul/"><i
                class="fab fa-instagram"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/a_jpeg_soul/"><i
                    class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/nehaal-pandey-849961226"><i
                class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
		<div class="col-lg">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="images/sohan.jpg" alt="" />
            <h4>sohan kc</h4>
            <p class="text-muted">Web Developer</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/ravishing_exposure/"><i
                class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/aditya-goutam-323a201ba/"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://github.com/adityagoutam23"><i class="fas fa-globe"></i></a>
          </div>
        </div>
      </div>
      <div class="row">
		<div class="col-lg">
          <div class="team-member">
			<!-- graphics : ruchish -->
            <img class="mx-auto rounded-circle" src="images/koi.jpg" alt="" />
            <h4>aayush shrestha</h4>
            <p class="text-muted">Graphics Designer</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/ruchishpakhare/"><i
                class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://in.linkedin.com/in/ruchish-pakhare-605374219"><i
                class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
		<div class="col-lg">
          <div class="team-member">
			<!-- social media : jenish -->
            <img class="mx-auto rounded-circle" src="images/arjun.jpg" alt="" />
            <h4>arjun rana</h4>
            <p class="text-muted">Social Media Manager</p>
            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/jenishh11/"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-lg">
                <div class="team-member">
                  <img class="mx-auto rounded-circle" src="images/sabita.jpg" alt="VedantLachake" />
                  <h4>Shreejana rana</h4>
                  <p class="text-muted">Mentor</p>
                  <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/lachake_vedant?s=09"><i
                      class="fab fa-twitter"></i></a>
                  <a class="btn btn-dark btn-social mx-2" href="https://www.behance.net/vedantlachake"><i
                      class="fab fa-behance"></i></a>
                  <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/_magic.lens/"><i
                      class="fab fa-instagram"></i></a>
                </div>
              </div>
        <div class="col-lg">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="images/junu.jpg" alt="" />
            <h4>Junu rana</h4>
            <p class="text-muted">Mentor</p>
            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/__rutwik?s=09"><i
                class="fab fa-twitter"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/rutwik.deshmukh.16"><i
                class="fab fa-facebook-f"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/rutwinkk/"><i
                class="fab fa-instagram"></i></a>
          </div>
      </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted"> we have got amazing team members with their hardworking we hope will get more success.
          </p>
        </div>
      </div>

</section>


  <!--Contact-->
    <section class="page-section" id="contact">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase">Contact Us</h2>
                  <h3 class="section-subheading text-muted">Pixel photography</h3>
              </div>
              <form id="contactForm" action="mailto:lachakevedant73@gmail.com" method="post" enctype="text/plain">
                  <div class="row align-items-stretch mb-5">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group">
                              <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group mb-md-0">
                              <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-group-textarea mb-md-0">
                              <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                  </div>
                  <div class="text-center">
                      <div id="success"></div>
                      <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                  </div>
              </form>
          </div>
      </section>
      <!-- Footer-->
   <footer class="footer py-3 badge-dark">
    <div class="container">
      <div class="footrow">
        <div class="align-items-center">
          <div class="col-lg my-3 my-lg-0">
            <a class="btn btn-light btn-social mx-2" href="https://twitter.com/shutterbugsclub"><i
                class="fab fa-twitter"></i></a>

            <a class="btn btn-light btn-social mx-2"
              href="https://instagram.com/shutterbugs.mitaoe?igshid=qz6qbqw9c4p3"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-light btn-social mx-2" href="https://www.youtube.com/channel/UC0QlgWQuo-bIJkvywyglZNw"><i
                class="fab fa-youtube"></i></a>
            <a class="btn btn-light btn-social mx-2" href="https://www.linkedin.com/company/shutterbugspc"><i
                class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-light btn-social mx-2" href="https://t.me/joinchat/PTpYkRxznyCTJ87eNN0e7g"><i
                class="fab fa-telegram-plane"></i></a>
          </div>
        </div>
        <div class="col-lg pb-1">Copyright © pixel photography 2024</div>
      </div>
    </div>
  </footer>

  <footer class="text-center text-white" style="background-color: #343a40">
    <!-- Grid container -->
    <div class="container pt-2">
      <!-- Section: Social media -->
      <section class="mb-2" style="padding: 0;">
        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://instagram.com/shutterbugs.mitaoe" role="button"
          data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

         <!-- Telegram -->
         <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://t.me/joinchat/PTpYkRxznyCTJ87eNN0e7g" role="button"
         data-mdb-ripple-color="dark"><i class="fab fa-telegram-plane"></i></a>  
        
        <!-- YouTube -->
        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://www.youtube.com/channel/UC0QlgWQuo-bIJkvywyglZNw" role="button"
        data-mdb-ripple-color="dark"><i class="fab fa-youtube"></i></a>   

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://twitter.com/shutterbugsclub" role="button"
          data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

        <!-- Linkedin -->
        <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://www.linkedin.com/company/shutterbugspc" role="button"
          data-mdb-ripple-color="dark"><i class="fab fa-linkedin-in"></i></a>
       
      </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-light" href="https://pixelphotography.github.io">pixel photography</a>
    </div>
    <!-- Copyright -->
  </footer>

  
  <!-- Bootstrap core JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
  <!-- Third party plugin JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <!-- Contact form JS-->
  <script src="assets/mail/jqBootstrapValidation.js"></script>
  <script src="assets/mail/contact_me.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>
</body>
</html>
