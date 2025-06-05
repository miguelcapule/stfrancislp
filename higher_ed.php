<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Higher Education | Saint Francis of Assisi College LP</title>
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
        <h1 class="text-white" style="font-size: 4rem; font-weight: bold;">Higher Education Department</h1>
    </div>
    </div>
    <!-- End Page Title -->

    <section class="container my-5">
      <h1 class="text-center mb-4"><b>College Departments</b></h1>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">

        <!-- Department Cards -->
        <!-- Computer Studies -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/computer_studies.png" class="img-fluid mb-3" alt="Computer Studies" style="max-height: 120px;">
              <h5 class="card-title"><b>School of Computer Studies</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalComputerStudies">More Info</button>
            </div>
          </div>
        </div>

        <!-- Liberal Arts -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/liberal_arts.png" class="img-fluid mb-3" alt="Liberal Arts" style="max-height: 120px;">
              <h5 class="card-title"><b>School of Liberal Arts</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalLiberalArts">More Info</button>
            </div>
          </div>
        </div>

        <!-- Nursing -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/nursing.png" class="img-fluid mb-3" alt="Nursing" style="max-height: 120px;">
              <h5 class="card-title"><b>School of Nursing</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalNursing">More Info</button>
            </div>
          </div>
        </div>

        <!-- Business Admin -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/ba.png" class="img-fluid mb-3" alt="Business Admin" style="max-height: 120px;">
              <h5 class="card-title"><b>School of Business Administration</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalBusiness">More Info</button>
            </div>
          </div>
        </div>

        <!-- Engineering -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/engineering.png" class="img-fluid mb-3" alt="Engineering" style="max-height: 120px;">
              <h5 class="card-title"><b>School of Engineering</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEngineering">More Info</button>
            </div>
          </div>
        </div>

        <!-- Education -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/education.png" class="img-fluid mb-3" alt="Education" style="max-height: 120px;">
              <h5 class="card-title"><b>School of Education</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalEducation">More Info</button>
            </div>
          </div>
        </div>

        <!-- Hospitality Management -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/hospitality.png" class="img-fluid mb-3" alt="Hospitality" style="max-height: 120px;">
              <h5 class="card-title"><b>School of Hospitality Management</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHospitality">More Info</button>
            </div>
          </div>
        </div>

        <!-- Graduate School -->
        <div class="col">
          <div class="card h-100 text-center shadow-sm border-0 hover-shadow">
            <div class="card-body">
              <img src="assets/img/programs/graduate_school.png" class="img-fluid mb-3" alt="Graduate School" style="max-height: 120px;">
              <h5 class="card-title"><b>Graduate School of Business and Education</b></h5>
            </div>
            <div class="card-footer bg-white border-0">
              <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalGraduate">More Info</button>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Computer Science Modal -->
    <div class="modal fade" id="modalComputerStudies" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>School of Computer Studies</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/computer_studies.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>The School of Computer Studies offers comprehensive programs in Information Technology, Computer Science, and related fields that empower students with advanced digital skills and real-world problem-solving capabilities.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Liberal Arts Modal -->
    <div class="modal fade" id="modalLiberalArts" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>School of Liberal Arts</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/liberal_arts.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>The School of Liberal Arts develops critical thinking, communication, and social awareness through programs in Psychology, Communication, and Political Science.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Nursing Modal -->
    <div class="modal fade" id="modalNursing" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>School of Nursing</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/nursing.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>Dedicated to excellence in healthcare education, the School of Nursing trains students in modern patient care and clinical practice, preparing them for global service.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Business Admin Modal -->
    <div class="modal fade" id="modalBusiness" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>School of Business Administration</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/ba.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>This school offers programs in management, finance, and entrepreneurship designed to equip future business leaders with skills for global competitiveness.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Engineering Modal -->
    <div class="modal fade" id="modalEngineering" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>School of Engineering</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/engineering.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>Focused on innovation and applied science, the School of Engineering provides programs in civil, mechanical, and computer engineering with industry-aligned curricula.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Education Modal -->
    <div class="modal fade" id="modalEducation" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>School of Education</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/education.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>Committed to shaping future educators, the School of Education provides training in pedagogy, curriculum development, and classroom leadership.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Hospitality Modal -->
    <div class="modal fade" id="modalHospitality" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>School of Hospitality Management</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/hospitality.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>This school nurtures future hoteliers and tourism professionals through hands-on training in hospitality, culinary arts, and travel management.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Graduate School Modal -->
    <div class="modal fade" id="modalGraduate" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title"><b>Graduate School of Business and Education</b></h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body text-center">
            <img src="assets/img/programs/graduate_school.png" class="img-fluid mb-3" style="max-height: 100px;">
            <p>Offers advanced academic programs in business and education that develop leadership, research, and strategic thinking among professionals.</p>
          </div>
        </div>
      </div>
    </div>

    <style>
      .hover-shadow {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.35);
        transition: box-shadow 0.5s cubic-bezier(0.4, 0, 0.2, 1), 
                    transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        will-change: transform, box-shadow;
      }

      .hover-shadow:hover {
        box-shadow: 
          0 3rem 6rem rgba(0, 0, 0, 0.75), 
          0 1.5rem 3rem rgba(0, 0, 0, 0.6),
          0 0.75rem 1.5rem rgba(0, 0, 0, 0.45);
        transform: translateY(-10px) scale(1.07);
      }
    </style>

    <section class="container my-5 text-center">
      <h2 class="mb-4"><b>Watch Our Introduction Video</b></h2>
      <div class="ratio ratio-16x9 mx-auto" style="max-width: 800px;">
        <iframe src="assets/videos/hed_vid.mp4" 
                title="Introduction Video" 
                allowfullscreen></iframe>
      </div>
    </section>

    <section class="container my-5">
      <h1 class="text-center"><b>OFFERED UNDERGRADUATE PROGRAMS</b></h1>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <ul class="list-group list-group-flush program-list">
            <li class="list-group-item">
              <a href="nursing.php" class="program-link"><strong>BACHELOR OF SCIENCE in NURSING</strong></a>
            </li>
            <li class="list-group-item">
              <a href="psychology.php" class="program-link"><strong>BACHELOR OF ARTS in PSYCHOLOGY</strong></a>
            </li>
            <li class="list-group-item">
              <a href="elementary_educ.php" class="program-link"><strong>BACHELOR OF SCIENCE in ELEMENTARY EDUCATION</strong></a>
            </li>
            <li class="list-group-item">
              <a href="secondary_educ.php" class="program-link"><strong>BACHELOR OF SCIENCE in SECONDARY EDUCATION</strong></a>
              <ul class="list-unstyled ps-3 mt-2 sub-majors">
                <li>Major in Mathematics</li>
                <li>Major in English</li>
                <li>Major in Filipino</li>
                <li>Major in Science</li>
                <li>Major in Social Studies</li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="computer_science.php" class="program-link"><strong>BACHELOR OF SCIENCE in COMPUTER SCIENCE</strong></a>
            </li>
            <li class="list-group-item">
              <a href="computer_engineering.php" class="program-link"><strong>BACHELOR OF SCIENCE in COMPUTER ENGINEERING</strong></a>
            </li>
            <li class="list-group-item">
              <a href="electrical.php" class="program-link"><strong>BACHELOR OF SCIENCE in ELECTRICAL ENGINEERING</strong></a>
            </li>
            <li class="list-group-item">
              <a href="electronics.php" class="program-link"><strong>BACHELOR OF SCIENCE in ELECTRONICS ENGINEERING</strong></a>
            </li>
            <li class="list-group-item">
              <a href="business_ad.php" class="program-link"><strong>BACHELOR OF SCIENCE in BUSINESS ADMINISTRATION</strong></a>
              <ul class="list-unstyled ps-3 mt-2 sub-majors">
                <li>Major in Operations Management</li>
                <li>Major in Financial Management</li>
                <li>Major in Marketing Management</li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="hospitality.php" class="program-link"><strong>BACHELOR OF SCIENCE in HOSPITALITY MANAGEMENT</strong></a>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="container my-5">
      <h1 class="text-center"><b>OFFERED GRADUATE PROGRAMS</b></h1>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <ul class="list-group list-group-flush program-list">
            <li class="list-group-item">
              <a href="mba.php" class="program-link"><strong>MASTER IN BUSINESS ADMINISTRATION (MBA)</strong></a>
            </li>
            <li class="list-group-item">
              <a href="maed.php" class="program-link"><strong>MASTER OF ARTS IN EDUCATION - Major in Education Management (MAEd)</strong></a>
            </li>
            <li class="list-group-item">
              <a href="#" class="program-link"><strong>TEACHER CERTIFICATE PROGRAM</strong></a>
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

      .program-link {
        display: block;
        color: #dc3545;
        text-decoration: none;
        transition: all 0.3s ease;
      }

      .program-list .list-group-item:hover {
        background-color: #dc3545;
        transform: translateX(8px);
        box-shadow: 0 8px 20px rgba(220, 53, 69, 0.3);
      }

      .program-list .list-group-item:hover .program-link {
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
      <h1 class="text-center"><b>ONLINE<br>HED INQUIRY</b></h1>
      
      <div class="row justify-content-center">
        <div class="col-md-8 text-center">
          <p class="mt-3 mb-4 fs-5">
            Need more information about our Higher Education Programs? Our team is ready to help you with your inquiries. Just click the button below and fill out the inquiry form.
          </p>

          <a href="https://stfrancislp.com/sfac-lp/pages/inquiry/online.inquiry.php" class="btn btn-danger btn-lg mb-4">
            Inquire Here!
          </a>

          <div>
            <img src="assets/img/hed_image.jpg" alt="Online HED Inquiry" class="img-fluid rounded shadow" style="max-width: 60%; height: auto;">
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
