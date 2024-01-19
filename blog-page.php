<?php include "include/header.php";?>
<!--==============================
   Breadcumb
   ============================== -->
<div class="breadcumb-wrapper " data-overlay="title" data-opacity="8">
   <div class="breadcumb-shape" data-bg-src="assets/img/bg/breadcumb_shape_1_1.png">
   </div>
   <div class="shape-mockup breadcumb-shape2 jump d-lg-block d-none" data-right="30px" data-bottom="30px">
      <img src="assets/img/bg/breadcumb_shape_1_2.png" alt="shape">
   </div>
   <div class="shape-mockup breadcumb-shape3 jump-reverse d-lg-block d-none" data-left="50px" data-bottom="80px">
      <img src="assets/img/bg/breadcumb_shape_1_3.png" alt="shape">
   </div>
   <div class="container">
      <div class="breadcumb-content text-center">
         <h1 class="breadcumb-title">Blog</h1>
         <ul class="breadcumb-menu">
            <li><a href="index.php">Home</a></li>
            <li>Blog</li>
         </ul>
      </div>
   </div>
</div>
<!--==============================
   Blog Area
   ==============================-->
<section class="th-blog-wrapper space-top space-extra2-bottom">
   <div class="container">
      <div class="row gx-40">
         <div class="col-xxl-8 col-lg-7">
            <div class="th-blog blog-single has-post-thumbnail">
               <div class="blog-img">
                  <a href="unlocking-educational-potential.php"><img src="assets/img/blog/blog-1-1.jpg" alt="Blog Image"></a>
               </div>
               <div class="blog-content">
                  <div class="blog-meta">
                     <a class="author" href="blog.php"><i class="fa-light fa-user"></i>by SchoolMatrix</a>
                     <a href="blog.php"><i class="fa-light fa-clock"></i>05 June, 2023</a>
                   
                  </div>
                  <h2 class="blog-title"><a href="unlocking-educational-potential.php">Unlocking Educational Potential: A Deep Dive into School CRM Systems</a>
                  </h2>
                  <p class="blog-text">Dive into the world of School CRM systems with us and discover how these tools are reshaping education. From administrative streamlining to personalized learning, explore the transformative impact that School CRM brings to educational institutions</p>
                  <a href="unlocking-educational-potential.php" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
               </div>
            </div>
            <div class="th-blog blog-single has-post-thumbnail">
               <div class="blog-img " >
                  <a href="data-driven-education.php"><img src="assets/img/blog/blog-1-2.jpg" alt="Blog Image"></a>
              
               </div>
               <div class="blog-content">
                  <div class="blog-meta">
                     <a class="author" href="blog.php"><i class="far fa-user"></i>by David Smith</a>
                     <a href="blog.php"><i class="fa-light fa-calendar-days"></i>22 June, 2023</a>
                   
                  </div>
                  <h2 class="blog-title"><a href="data-driven-education.php">Data-Driven Education: The Role of CRM in Shaping Student Success</a>
                  </h2>
                  <p class="blog-text">Explore the intersection of data and education as we examine how School CRM systems contribute to informed decision-making, foster personalized learning experiences, and ultimately enhance student success.</p>
                  <a href="data-driven-education.php" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
               </div>
            </div>
            <div class="th-blog blog-single">
               <div class="blog-content">
               <div class="blog-img">
                  <a href="empowering-education.php"><img src="assets/img/blog/blog-1-3.jpg" alt="Blog Image"></a>
               </div>
                  <div class="blog-meta">
                     <a class="author" href="blog.php"><i class="far fa-user"></i>by David Smith</a>
                     <a href="blog.php"><i class="fa-light fa-calendar-days"></i>24 June, 2023</a>
                   
                  </div>
                  <h2 class="blog-title"><a href="empowering-education.php">Empowering Education: Unleashing the Potential of School CRM</a>
                  </h2>
                  <p class="blog-text">Explore the revolutionary impact of School CRM systems on education, from streamlining operations to fostering personalized learning and data-driven decision-making.</p>
                  <a href="empowering-education.php" class="link-btn">Read More Details<i class="fas fa-arrow-right ms-2"></i></a>
               </div>
            </div>
            <!-- <div class="th-pagination ">
               <ul>
                  <li><a href="blog.php">01</a></li>
                  <li><a href="blog.php">02</a></li>
                  <li><a href="blog.php">03</a></li>
                  <li><a href="blog.php"><i class="far fa-arrow-right"></i></a></li>
               </ul>
            </div> -->
         </div>
         <div class="col-xxl-4 col-lg-5">
           <?php include "section/blog-sidebar.php"?>
         </div>
      </div>
   </div>
</section>
<?php include "popup.php";?>
<?php include "include/footer.php";?>