<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="../../css/bs-css/bootstrap.min.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    
    <link rel="stylesheet" href="../../css/department-tab.css">
    <link rel="stylesheet" href="../../css/navbar.css">
    
    
     <!-- footer css-->
     <link rel="stylesheet" href="../../css/Footer-Dark.css">

    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <script src="https://kit.fontawesome.com/8ea186a044.js" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/8ea186a044.js" crossorigin="anonymous"></script>

</head>

<body>
<?php include '../partial/navbar.php';?>

  <div class="p-md-5 bg-white rounded shadow mb-5 mt-5 main">
    <!-- Rounded tabs -->
    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav">
      <li class="nav-item flex-sm-fill">
        <a id="home-tab" onclick="openCity(event, 'home')"  data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" class="nav-link navlink mx-2 mx-sm-0 border-0 text-uppercase font-weight-bold active"><span onclick="this.parentElement.style.display='none'" class="topright"></span>About</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="profile-tab" onclick="openCity(event, 'profile')" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" class="nav-link mx-2 mx-sm-0 navlink  border-0 text-uppercase font-weight-bold">  <span onclick="this.parentElement.style.display='none'" class="topright"></span>Syllabus</a>
      </li>
      <li class="nav-item flex-sm-fill">
        <a id="contact-tab" onclick="openCity(event, 'contact')" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" class="nav-link mx-2 mx-sm-0 navlink  border-0 text-uppercase font-weight-bold"><span onclick="this.parentElement.style.display='none'" class="topright"></span>Other</a>
      </li>
    </ul>
    <div id="mytab-pane " class="tab-content">
      <div id="home" role="tabpanel" aria-labelledby="home-tab" class="tab-pane tabpane fade px-4 py-5 show active">
        <p class="text-muted">hiii ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="profile" role="tabpanel" aria-labelledby="profile-tab" class="tab-pane tabpane fade px-4 py-5 show">
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div id="contact" role="tabpanel" aria-labelledby="contact-tab" class="tab-pane tabpane fade px-4 py-5 show">
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </div>
    <!-- End rounded tabs -->
  </div>


 

</div>


<script>
function openCity(evt, cityName) {
  var i, tabpane, navlink;
  tabpane = document.getElementsByClassName("tabpane");
  for (i = 0; i < tabpane.length; i++) {
    tabpane[i].style.display = "none";
  }
  navlink = document.getElementsByClassName("navlink");
  for (i = 0; i < navlink.length; i++) {
    navlink[i].className = navlink[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

    <script src="../bs-js/bootstrap.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../bs-js/bootstrap.bundle.js"></script>
    <?php include '../partial/footer.php';?>
</body>

</html>