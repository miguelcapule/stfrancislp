<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Contact | Saint Francis of Assisi College LP</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!--Links-->
  <?php include 'includes/links.php'; ?>
</head>

<body class="starter-page-page">

  <!--Header-->
  <?php include 'includes/header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title text-white position-relative" style="background-image: url('assets/img/sfac-bg4.jpg'); background-size: cover; background-position: center; padding: 140px 0;">
    <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 1;"></div>
    
    <div class="container position-relative" style="z-index: 2;">
        <h1 class="text-white" style="font-size: 4rem; font-weight: bold;">Contact Us</h1>
    </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-5">
            <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.7075939361707!2d120.99793717591726!3d14.444007580889748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ce1d1441cbcd%3A0x7bc346a4a6255599!2sSaint%20Francis%20of%20Assisi%20College%20-%20Las%20Pi%C3%B1as%20Campus!5e0!3m2!1sen!2sph!4v1747620813040!5m2!1sen!2sph" frameborder="0" allowfullscreen=""></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

            <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                <i class="icon bi bi-geo-alt flex-shrink-0"></i>
                <div>
                <h3>Address</h3>
                <p>45 Admiral Village, Talon 3, Las Piñas City, Metro Manila 1740</p>
                </div>
            </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                <i class="icon bi bi-telephone flex-shrink-0"></i>
                <div>
                <h3>Call Us</h3>
                <p>8800 3131</p>
                </div>
            </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                <i class="icon bi bi-envelope flex-shrink-0"></i>
                <div>
                <h3>Email Us</h3>
                <p>info@sfac.edu.ph</p>
                </div>
            </div>
            </div><!-- End Info Item -->

            <div class="col-md-6">
            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                <i class="icon bi bi-clock flex-shrink-0"></i>
                <div>
                <h3>Opening Hours<br></h3>
                <p><strong>Mon-Sat:</strong> 8AM - 6PM; <strong>Sunday:</strong> Closed</p>
                </div>
            </div>
            </div><!-- End Info Item -->

        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="600">
            <div class="row gy-4">

            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
            </div>

            </div>
        </form><!-- End Contact Form -->

        </div>

    </section><!-- /Contact Section -->

  </main>

  <!--Footer-->
  <?php include 'includes/footer.php'; ?>

  <!--Scripts-->
  <?php include 'includes/scripts.php'; ?>

</body>

</html>