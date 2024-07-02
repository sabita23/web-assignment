<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Photography Exbhition | pixelphotography</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/gallery.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body id="page-top">
    

    <nav class="navbar navbar-expand-lg fixed-top p-md-3 p-sm-0" id="mainNav" style="background-color: white;">
        <div class="container">
          <a class="navbar-brand js-scroll-trigger fade-in-left d-inline" href="#"><img src="images/logo.jpg"
              alt="SB Logo" /> <h3 class="text-white d-inline text-capitalize">Photography Exhibition</h3></a>
                  
            <ul class="navbar-nav text-uppercase">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Home</a></li>
            </ul>
        
        </div>
      </nav>
    <main class="container-fluid mt-5 pt-5">
        <div class="gallery">
        <?php
include 'connection.php';
$query = "SELECT img_name FROM image";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-around;">'; // Container with flexbox
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div style="margin: 10px; text-align: center;">'; // Centered and with margin for spacing
        echo '<img src="images/' . $row['img_name'] . '" alt="Image">'; // No width or height, original size
        echo '</div>';
    }
    echo '</div>'; // End of container
} else {
    echo '<p>No images found in the database.</p>';
}
?>

            </div>
        <div class="text-center"><button type="button" class="btn btn-primary p-0 mb-4"><a class="nav-link js-scroll-trigger text-white" href="#">Go to top</a></button></div>
    </main>
    <footer class="text-center text-white" style="background-color: white">
        <!-- Grid container -->
        <div class="container pt-2">
          <!-- Section: Social media -->
          <section class="mb-2" style="padding: 0;">
            <!-- Instagram -->
            <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://instagram.com/sabitarana" role="button"
              data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>
    
             <!-- Telegram -->
             <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://t.me/joinchat/sabitarana" role="button"
             data-mdb-ripple-color="dark"><i class="fab fa-telegram-plane"></i></a>  
            
            <!-- YouTube -->
            <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://www.youtube.com/channel/sabitarana" role="button"
            data-mdb-ripple-color="dark"><i class="fab fa-youtube"></i></a>   
    
            <!-- Twitter -->
            <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://twitter.com/sabitarana" role="button"
              data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>
    
            <!-- Linkedin -->
            <a class="btn btn-link btn-floating btn-lg text-light m-1" href="https://www.linkedin.com/company/sabitarana" role="button"
              data-mdb-ripple-color="dark"><i class="fab fa-linkedin-in"></i></a>
           
          </section>
          <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
    
        <!-- Copyright -->
        <div class="text-center text-light p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2024 Copyright:
          <a class="text-light" href="https://sabitarana.github.io/">Pixel photography</a>
        </div>
        <!-- Copyright -->
      </footer>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

      <script>
        AOS.init({
            duration:800
        });
      </script>
    
</body>

</html>