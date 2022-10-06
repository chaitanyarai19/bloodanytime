<style>
    .topnav {
  overflow: hidden;
  background-color: #fff;
}

.topnav a {
  float: left;
  display: block;
  color: #555555;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #ee3d32;
  color: white;
}

.topnav .icon {
  display: none;
}
.donate {
  animation: blinker 1.5s linear infinite;
}

@keyframes blinker {
    0%{
        color:red;
    }
    25%{
        color:green;
    }
  50% {
      color:blue;
    /*opacity: 0;*/
  }
  75%{
      color:orange;
  }
  100%{
      color:yellow;
      /*opacity:1.0;*/
  }
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

</style>
<div class="topnav" id="myTopnav">
       <?php 
        if(isset($_SESSION['hospital_id'])){
    ?>
    <a href="https://bloodanytime.com/api/logout.php">Logout</a>
    <?php 
    }else{
    ?>
    <a href="https://bloodanytime.com/appointment.php" class="donate <?php if ($GLOBALS['header'] == 'donor_registration') echo 'active'; ?>">Donate</a>
    <?php
        }
    ?>
  <a href="https://bloodanytime.com/index.php" class="<?php if ($GLOBALS['header'] == 'home') echo 'active'; ?>">Home</a>
  <a href="https://bloodanytime.com/blood_available_search.php" class="<?php if ($GLOBALS['header'] == 'search') echo 'active'; ?>">Search Blood</a>
  <a href="https://bloodanytime.com/hospital.php" class="<?php if ($GLOBALS['header'] == 'hospital') echo 'active'; ?>">Hospital registration</a>
  <a href="https://bloodanytime.com/support-us.php" class="<?php if ($GLOBALS['header'] == 'support_us') echo 'active'; ?>">Support us</a>
  <a href="https://bloodanytime.com/about-us.php" class="<?php if ($GLOBALS['header'] == 'about_us') echo 'active'; ?>">About us</a>
  <a href="https://bloodanytime.com/contacts.php" class="<?php if ($GLOBALS['header'] == 'contacts') echo 'active'; ?>">Contacts</a>
  

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>