<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- custom css -->
    <link rel="stylesheet" href="css/navbar.css">
 

    <title>Document</title>
</head>
<body>
 
  
<header class="header shadow-lg">
    <!-- start of upper header -->
    <div class="row g-0 upper-header">
      <div class="col-12 col-sm-6 d-flex flex-column align-items-center justify-content-center phone-div">
        <div class=""><a href="#" style="text-decoration: none;"><span class="fa fa-phone me-1"></span>1234567890</a></div>
        <div class=""><a href="#" style="text-decoration: none;"><span class="fa fa-envelope me-1"></span>info@college.com</a></div>
      </div>
      <div class="col-12 col-sm-6 d-flex align-items-center justify-content-center mt-4 mt-sm-0">
        <div class=" share-div">
          <div class="social-icon btn-outline-primary btn"><span class="fa fa-facebook"></span></div>
          <div class="social-icon btn-outline-danger btn"><span class="fa fa-youtube"></span></div>
          <div class="social-icon btn btn-outline-danger"><span class="fa fa-instagram"></span></div>
          <div class="social-icon btn-outline-success btn"><span class="fa fa-whatsapp"></span></div>
        </div>
      </div>
    </div>
    <!-- end of upper header -->

  <div class="dropdown-divider"></div>
 
    <!-- start of navigation menu -->
    <nav>
     
  <div id="logo">Here logo</div>
  <label for="drop" class="toggle menu-toggle"><span class="fa fa-bars"></span></label>
  <input type="checkbox" id="drop">

  <ul class="menu">
    <li><a href="http://localhost/djcollege/index.php">Home</a></li>

    <!-- about menu bar -->
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-1" class="toggle">About +</label>
      <a href="#">About</a>
      <input type="checkbox" id="drop-1"/>
      <ul class="drop-down">
        <li><a href="http://localhost/djcollege/main/about/mission.php">Mission</a></li>
        <li><a href="#">Vision</a></li>
        
      </ul>
    </li>

    <!-- course menu bar -->
    <li> 
      
      <!-- First Tier Drop Down -->
      <label for="drop-2" class="toggle">Course+</label>
      <a href="#">Course</a>
      <input type="checkbox" id="drop-2"/>
      <ul class="drop-down">
        
        <li> 
          
          <!-- Second Tier Drop Down -->
          <label for="drop-3" class="toggle">Intermediate +</label>
          <a href="#">Intermediate</a>
          <input type="checkbox" id="drop-3"/>
          <ul class="drop-submenu">
            <li><a href="http://localhost/djcollege/main/courses/inter-ia.php">I.A</a></li>
            <li><a href="#">I.sc</a></li>
            
          </ul>
        </li>
        <li> 
          
          <!-- Second Tier Drop Down -->
          <label for="drop-4" class="toggle">Works +</label>
          <a href="#">Works</a>
          <input type="checkbox" id="drop-4"/>
          <ul class="drop-submenu">
            <li><a href="#">I.A</a></li>
            <li><a href="#">I.sc</a></li>
           
          </ul>
        </li>
      </ul>
    </li>

<!-- department menu bar -->
<li>

   <!-- First Tier Drop Down -->
   <label for="drop-5" class="toggle">Department+</label>
   <a href="#">Department</a>
   <input type="checkbox" id="drop-5"/>
   <ul class="drop-down">
     
     <li> 
       
       <!-- Second Tier Drop Down -->
       <label for="drop-6" class="toggle">Facility of human +</label>
       <a href="#">Facility</a>
       <input type="checkbox" id="drop-6"/>
       <ul class="drop-submenu">
         <li><a href="http://localhost/djcollege/main/department/dept-of-hindi.php">Hindi</a></li>
         
         <li><a href="#">English</a></li>
         
       </ul>
     </li>
     <li> 
       
       <!-- Second Tier Drop Down -->
       <label for="drop-7" class="toggle">Works +</label>
       <a href="#">Works</a>
       <input type="checkbox" id="drop-7"/>
       <ul class="drop-submenu">
         <li><a href="#">I.A</a></li>
         <li><a href="#">I.sc</a></li>
        
       </ul>
     </li>
   </ul>
</li>

<!-- faculty menu bar -->
    <!-- <li><a href="http://localhost/djcollege/main/faculty.php">Faculty</a></li> -->

    <!-- Student zone menu bar -->
    <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-8" class="toggle">Student zone +</label>
      <a href="#">Student Zone</a>
      <input type="checkbox" id="drop-8"/>
      <ul class="drop-down">
        <li><a href="http://localhost/djcollege/main/login.php">Login</a></li>
        <li><a href="http://localhost/djcollege/main/registration.php">Registration</a></li>
        
      </ul>
    </li>


    <li><a href="http://localhost/djcollege/main/contactus.php">Contact us</a></li>
   
     <!-- Gallery  menu bar -->
     <li> 
      <!-- First Tier Drop Down -->
      <label for="drop-9" class="toggle">Gallery +</label>
      <a href="">Gallery</a>
      <input type="checkbox" id="drop-9"/>
      <ul class="drop-down">
        <li><a href="http://localhost/djcollege/main/gallery/gallery1.php">College event</a></li>
        <li><a href="#">Other</a></li>
        
      </ul>
    </li>
   

      <!-- Almuni  menu bar -->
      <li> 
        <!-- First Tier Drop Down -->
        <label for="drop-10" class="toggle">Almuni +</label>
        <a href="">Almuni</a>
        <input type="checkbox" id="drop-10"/>
        <ul class="drop-down">
          <li><a href="http://localhost/djcollege/main/alumani/register.php">Registration</a></li>
          <li><a href="#">Member</a></li>
          
        </ul>
      </li>


        <!-- IQAC +SSR  menu bar -->
        <li> 
        <!-- First Tier Drop Down -->
        <label for="drop-11" class="toggle">IQAC +</label>
        <a href="">IQAC</a>
        <input type="checkbox" id="drop-11"/>
        <ul class="drop-down">
          <li><a href="http://localhost/djcollege/main/iqac.php">IQAC</a></li>
          <li><a href="http://localhost/djcollege/main/ssr.php">SSR</a></li>
          
        </ul>
      </li>

<!-- Rti menu bar -->
    <li><a href="http://localhost/djcollege/main/rti.php">RTI</a></li>
  </ul>
  
</nav>
    <!-- end of navigation menu -->

    <!-- start of breadcrumb -->
    <!-- <div class="row g-0"></div> -->
    <!-- end of breadcrumb -->


    </header>


 
  

</body>
</html>