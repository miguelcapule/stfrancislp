<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Basic Education | Saint Francis of Assisi College LP</title>
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
        <h1 class="text-white" style="font-size: 4rem; font-weight: bold;">Basic Education Department</h1>
    </div>
    </div>
    <!-- End Page Title -->

    <!-- Video Section -->
    <section class="video-section text-center" style="padding: 60px 0; background-color: #f8f9fa;">
      <div class="container">
        <h2 style="margin-bottom: 30px; font-weight: 600;">Introduction Video</h2>
        <div style="max-width: 800px; margin: 0 auto;">
          <video controls style="width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1);">
            <source src="assets/videos/bed_vid.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </section>

    <section class="container my-5">
      <h1 class="text-center"><b>OFFERED LEVELS</b></h1>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <ul class="list-group list-group-flush program-list">

            <li class="list-group-item">
              <strong>PRE-SCHOOL</strong>
              <ul class="list-unstyled ps-3 mt-2 sub-majors">
                <li>Nursery</li>
                <li>Pre-Kinder</li>
                <li>Kindergarten</li>
              </ul>
            </li>

            <li class="list-group-item">
              <strong>GRADE SCHOOL</strong>
              <ul class="list-unstyled ps-3 mt-2 sub-majors">
                <li>Grade 1 to 6</li>
              </ul>
            </li>

            <li class="list-group-item">
              <strong>JUNIOR HIGH SCHOOL</strong>
              <ul class="list-unstyled ps-3 mt-2 sub-majors">
                <li>Grade 7 to 10</li>
              </ul>
            </li>

            <li class="list-group-item">
              <strong>SENIOR HIGH SCHOOL</strong>
              <ul class="list-unstyled ps-3 mt-2 sub-majors">
                <li><em>Academic Track</em></li>
                <ul class="list-unstyled ps-4 mt-1 sub-majors">
                  <li>STEM (Science, Technology, Engineering and Mathematics)</li>
                  <li>ABM (Accountancy, Business and Management)</li>
                  <li>HUMSS (Humanities and Social Sciences)</li>
                  <li>GA (General Academics)</li>
                </ul>
                <li class="mt-3"><em>Technical - Vocational - Livelihood Track</em></li>
                <ul class="list-unstyled ps-4 mt-1 sub-majors">
                  <li>HE (Home Economics)</li>
                </ul>
              </ul>
            </li>

          </ul>
        </div>
      </div>
    </section>

    <style>
      .section-title {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: #2c3e50;
        letter-spacing: 2px;
      }

      .program-list {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 15px rgb(0 0 0 / 0.1);
      }

      .program-list .list-group-item {
        background: #fff;
        border: none;
        padding: 1.2rem 1.5rem;
        font-size: 1.05rem;
        border-bottom: 1px solid #eee;
        transition: all 0.3s ease;
      }

      .program-list .list-group-item:last-child {
        border-bottom: none;
      }

      .program-list .list-group-item:hover {
        background-color: #dc3545;
        color: #fff;
        transform: translateX(8px);
        box-shadow: 0 8px 20px rgba(220, 53, 69, 0.3);
      }

      .program-list .list-group-item:hover strong {
        color: #fff;
      }

      .sub-majors li {
        padding: 0.3rem 0;
        font-weight: 500;
        color: #dc3545;
        background-color: #fff;
        transition: all 0.3s ease;
      }

      .sub-majors li:hover {
        color: #fff;
        background-color: #dc3545;
        padding-left: 8px;
        border-radius: 0.25rem;
      }
    </style>

    <section class="container my-5">
      <h1 class="text-center"><b>ONLINE<br>BED INQUIRY</b></h1>
      
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="mt-3 mb-4 fs-5">
            Need more information about our Basic Education Programs? Our team is ready to help you with your inquiries. Just click the button below and fill out the inquiry form.
          </p>

          <a href="https://stfrancislp.com/bedlp-enrollment/pages/online_enrollment/add.online.inquiry.php" class="btn btn-danger btn-lg mb-4">
            Inquire Here!
          </a>

          <div>
            <img src="assets/img/bed_pic.jpg" alt="Online BED Inquiry" class="img-fluid rounded shadow" style="max-width: 60%; height: auto;">
          </div>
        </div>
      </div>
    </section>

  </main>

  <!--Footer-->
  <?php include 'includes/footer.php'; ?>

  <!--Scripts-->
  <?php include 'includes/scripts.php'; ?>

</body>
