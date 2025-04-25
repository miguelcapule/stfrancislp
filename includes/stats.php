<!-- Stats Section -->
<section id="stats" class="stats section dark-background">

  <img src="assets/img/sfac-bg4.jpg" alt="SFAC Las Piñas Background" data-aos="fade-in">
  <!-- Dark overlay -->
  <div class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100 text-white">
          <span data-purecounter-start="0" data-purecounter-end="3000" data-purecounter-duration="1" class="purecounter"></span>
          <p>Active Students</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100 text-white">
          <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
          <p>Faculty Members</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100 text-white">
          <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
          <p>Academic Programs</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
      <div class="stats-item text-center w-100 h-100 text-white">
        <span id="yearsOfExcellence" class="purecounter"></span>
        <p>Years of Excellence</p>
        </div>

        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const startYear = 1981;
            const currentYear = new Date().getFullYear();
            const yearsOfExcellence = currentYear - startYear;

            const counterElement = document.getElementById("yearsOfExcellence");
            counterElement.setAttribute("data-purecounter-start", "0");
            counterElement.setAttribute("data-purecounter-end", yearsOfExcellence);
            counterElement.setAttribute("data-purecounter-duration", "1");

            // Initialize PureCounter
            if (typeof PureCounter !== 'undefined') {
            new PureCounter();
            }
        });
        </script>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->
