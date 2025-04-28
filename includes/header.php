<!-- Red Top Bar -->
<div class="top-header bg-danger text-white py-0">
  <div class="container d-flex justify-content-between align-items-center" style="font-size: 13px; padding: 4px 0;">
    
    <!-- Contact Info (Left) -->
    <div>
        <i class="bi bi-envelope"></i> info@sfac.edu.ph
        &nbsp;&nbsp;
        <i class="bi bi-telephone"></i> (02) 123-4567
    </div>

    <!-- Social Icons (Right) -->
    <div>
        <a href="https://www.facebook.com/mysfaclp" class="text-white me-2" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com/school/mysfacs/" class="text-white me-2" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.youtube.com/@mysfacs" class="text-white me-2" target="_blank"><i class="bi bi-youtube"></i></a>
        <a href="https://www.instagram.com/mysfacs/" class="text-white me-2" target="_blank"><i class="bi bi-instagram"></i></a>
        <a href="https://x.com/mysfacs" class="text-white" target="_blank"><i class="bi bi-x"></i></a>
    </div>

  </div>
</div>

<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

        <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
            <img src="assets/img/sfac-main-logo.png" alt="" draggable="false">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php" class="<?= ($current_page == 'index.php') ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="<?= ($current_page == 'about.php') ? 'active' : '' ?>">About Us</a></li>
                <li><a href="contact.php" class="<?= ($current_page == 'contact.php') ? 'active' : '' ?>">Contact Us</a></li>

                <li class="dropdown">
                    <a href="#"><span>College Inquiries</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown-header">Collegiate Courses</li>
                        <li><a href="#">Bachelor of Science in Nursing</a></li>
                        <li><a href="#">Bachelor of Science in Electrical Engineering</a></li>
                        <li><a href="#">Bachelor of Science in Electronics Engineering</a></li>
                        <li><a href="#">Bachelor of Science in Computer Engineering</a></li>
                        <li><a href="#">Bachelor of Science in Computer Science</a></li>
                        <li><a href="#">Bachelor of Science in Business Administration</a></li>
                        <li><a href="#">Bachelor of Science in Hospitality Management</a></li>
                        <li><a href="#">Bachelor of Arts, Major in Psychology</a></li>
                        <li><a href="#">Bachelor of Elementary Education / Teacher Certification Program</a></li>
                        <li><a href="#">Bachelor of Secondary Education / Teacher Certification Program</a></li>
                        <li class="dropdown-header">Graduate Programs</li>
                        <li><a href="#">MBA – Master in Business Administration</a></li>
                        <li><a href="#">MAEd – Master of Arts in Education</a></li>
                        <li><a href="#">Major in Education Management</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#"><span>Department</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Basic Education Department</a></li>
                        <li><a href="#">Higher Education Department</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#"><span>Student Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li class="dropdown">
                            <a href="#"><span>Las Piñas Campus</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="https://stfrancislp.com/sfac-lp/pages/login/sign-in.php">HED Enrollment System</a></li>
                                <li><a href="https://stfrancislp.com/sfac-lp-ongrade/pages/login/login.php">HED Online Grading System</a></li>
                                <li><a href="https://stfrancisbacoor.com/library-bacoor/index/basco-html/index.html">HED Library System</a></li>
                                <li><a href="https://stfrancislp.com/bedlp-enrollment/pages/login/login.php">BED Enrollment System</a></li>
                                <li><a href="https://stfrancislp.com/gsbe/html/index.php">GSBE Library System</a></li>
                                <li><a href="https://stfrancisbacoor.com/alumni_tracer/pages/login/login.php">Alumni Tracing System</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Bacoor Campus</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="https://stfrancisbacoor.com/sfac-bac/pages/login/sign-in.php">HED Enrollment System</a></li>
                                <li><a href="https://stfrancisbacoor.com/sfac-bac-ongrade/pages/login/login.php">HED Online Grading System</a></li>
                                <li><a href="https://stfrancisbacoor.com/library-bacoor/index/basco-html/index.html">HED Library System</a></li>
                                <li><a href="https://stfrancisbacoor.com/basic-edu/">BED Enrollment System</a></li>
                                <li><a href="https://stfrancisbacoor.com/samplebasic/Tempo/index.php">BED Library System</a></li>
                                <li><a href="https://stfrancisbacoor.com/alumni_tracer/pages/login/login.php">Alumni Tracing System</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Los Baños Campus</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">BED Library System</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
