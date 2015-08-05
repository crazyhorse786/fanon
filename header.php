<?php
//session_start();
if(!isset($_GET['page'])){
$_GET['page']= "home";
}

$page = "";
$title = "";

switch($_GET['page']){
        case "home":
                    $page = "mainpage.php";
                    $title = "Home";
                    break;
        case "contact":
                    $page = "contact.php";
                    $title = "Contact";
                    break;
        case "about":
                    $page =  "about.php";
                    $title = "About Us";
                    break;
        case "location":
                    $page = "location.php";
                    $title = "Location";
                    break;
        case "alevels":
                    $page = "alevels.php";
                    $title = "A-Levels";
                    break;
        case "vacancies":
                    $page = "vacancies.php";
                    $title = "Vacancies";
                    break;
        case "governors":
                    $page = "governors.php";
                    $title = "Governors";
                    break;
        case "life":
                    $page = "life.php";
                    $title = "Life at Fanon Academy";
                    break;
        case "services":
                    $page = "services.php";
                    $title = "Student Services";
                    break;
        case "events":
                    $page = "events.php";
                    $title = "News & Events";
                    break;
        case "evening":
                    $page = "evening.php";
                    $title = "Evening Courses";
                    break;

      }



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Fanon Academy | <?php echo($title); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Fanon Academy" />
<meta name="keywords" content="Fanon, Academy, College, Education, South London, A-Levels" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="dvmaincontainer">
  <!--main div container starts here-->
  <div id="dvtopcontainer">
    <!-- top container starts here-->



    <div id="dvnavicontainer">
      <!-- navogation div starts here-->
      <img src="images/navi_left.png" alt="" />
<div id="tabs1" >
         <ul>
          <!-- CSS Tabs -->
          <li <?php if($_GET['page'] == "home"){echo("id=\"current\"");}?> ><a href="index.php?page=home"><span>Home</span></a></li>
          <li <?php if($_GET['page'] == "about"){echo("id=\"current\"");}?>><a href="index.php?page=about"><span>About Us</span></a></li>
          <li <?php if($_GET['page'] == "location"){echo("id=\"current\"");}?>><a href="index.php?page=location"><span>Location</span></a></li>
          <li <?php if($_GET['page'] == "contact"){echo("id=\"current\"");}?> ><a href="index.php?page=contact"><span>Contact</span></a></li>
        </ul>



      </div>
      <img src="images/navi_right.png" alt="" />
      <!-- navogation div ends here-->
    </div>
    <!-- top container ends here-->
  </div>





  <div id="dvbodycontainer">
    <!-- body div starts here-->



    <div id="dvbannerbgcontainer">
      <!-- banner bg div starts here-->
      <div class="lftcontainer">
       <br/>
             <img src="images/fanon.gif"  alt="" title=""/>
      </div>


      <div id="dvbanner">
        <!-- banner div starts here-->
        <img src="images/banner.jpg"  alt="" title=""/>
        <!-- banner div ends here-->
      </div>
      <!-- banner bg div ends here-->





    </div>

<div style="clear:left; padding: 10px 0px 0px 0px;">
<ul id="minitabs">
    <li ><a <?php if($_GET['page'] == "alevels"){echo("id=\"current\"");}?>  href="index.php?page=alevels">A-Levels</a></li>
    <li ><a <?php if($_GET['page'] == "evening"){echo("id=\"current\"");}?>  href="index.php?page=evening">Evening Courses</a></li>
    <li ><a <?php if($_GET['page'] == "events"){echo("id=\"current\"");}?>  href="index.php?page=events">News and Events</a></li>
    <li ><a <?php if($_GET['page'] == "life"){echo("id=\"current\"");}?>  href="index.php?page=life">Life at Fanon Academy</a></li>
    <li ><a <?php if($_GET['page'] == "services"){echo("id=\"current\"");}?>  href="index.php?page=services">Student Services</a></li>
    <li ><a <?php if($_GET['page'] == "governors"){echo("id=\"current\"");}?>  href="index.php?page=governors">Governors</a></li>
    <li ><a <?php if($_GET['page'] == "vacancies"){echo("id=\"current\"");}?>  href="index.php?page=vacancies">Vacancies</a></li>
</ul>
</div>










     