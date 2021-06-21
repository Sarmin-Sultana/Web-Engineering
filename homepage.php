<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


 <!-- Custom styles for this template -->
    	 <link href="newtheme.css" rel="stylesheet">
    <link href="starterr-template.css" rel="stylesheet">
	 <link href="mainn.css" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0px;
}
.img { 
    
    
  display: block;
     padding: left;
 margin-left: auto;
 margin-right: auto; 
}
/* Header/logo Title */
.header {
  padding: 10px;
  text-align: center;
  background: white;
  color: black;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}
    h2{ color: green; }     

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color:green;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 20px;
  text-decoration: none;
}
/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}
    /* Right-aligned link */
    .login-container button {
  float: right;
  padding: 12px 20px;
  margin-top: 8px;
  margin-right: 20px;
  background-color: green;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

 .login-container button:hover {
  background-color: green;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
  background-color: #f1f1f1;
  padding: 150px;
}
    .alignleft {
	float: left;
}
.alignright {
	float: right;
}
    .button {
  border: none;
 
  padding: 26px 38px;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  
  }
    .button:hover {background-color: #f1f1f1;
    }
    .apply1{
        color: white; background-color:green ;}
    
   .apply2{
        color: white;  background-color:green;}
    .apply3{
        color: white;  background-color:green;}
/* Main column */
.main {   
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
  background-color:#f1f1f1;
  padding: 150px;
}

    
    .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
         padding: 0px 0px;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 50px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
    
    #Teacher{background-color:#ddd;}
#Officer {background-color: #ddd;}
#Stuff {background-color: #ddd;}



/* Footer */
.footer {
  padding: 5px;
  text-align: center;
  background: #ddd;
}
    .endpage{
      padding:5px;
      text-align:left;
      background:white ;  
    }
    .alignleft {
	float: left;
}
.alignright {
	float: right;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
 <img src="img/bouHome.png" alt="Bangladesh Open University" style= "height: 100 ; width: 200" ;>
 
<h2>Job Recruitment Platform</h2>
</div>

<div class="navbar">
   
    <a href="#"><b>Home</b></a>
  
  <a href="#notice"><b> Notice</b></a>

  <a href="#forms"><b>Online Application Form</b></a>
  
  <a href="#contact"><b>Contact Us</b></a>
  
 <div class="login-container"  style="float: right" ;>
    <form action="">
      <input type="text" placeholder="Username" name="username" id="username" style="padding: 6px 3px;
  margin-top: 12px;margin-right: 15px;">
      <input type="password" placeholder="Password" name="psw" id="psw" style="padding: 6px 3px;
  margin-top: 12px;margin-right: 15px;">
      <button type="submit"  onclick="check(this.form)"> Admin </button>
    
     <script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checkes whether the entered userid and password are matching*/
                if(form.username.value == "admin" && form.psw.value == "admin") {
                    window.open('newadmin.php');/*opens the target page while Id & password matches*/
                }
                else {
                    alert("Error Password or Username");/*displays error message*/
                }
            }
        </script>
    
    </form>
   </div>
  </div>


    
    
   



<fieldset style=  "background :gray";> 
<h1 text align="center"  paddind:500px style=  "color :white"; ><strong><b> <legend> Search Your Opportunities Here!</legend></b></strong></h1>
<div class="row">
  <div class="side">
     <a name="forms"></a>
    <h2  >Apply For Job</h2><hr>
    
    <div id="textbox">
     <p class="alignleft">Teacher Application</p>
     <p class="alignright" ><button class="apply1"  ><strong><b> <a href="teachers.php" style="color:white; text-decoration:none" ;>Apply Now</a></strong></b></button></p><br><br><br><hr>
    </div>
    
    <div id="textbox">
     <p class="alignleft">Officers Application </p>
     <p class="alignright" ><button class="apply2"  ><strong><b><a href="officers.php" style="color:white; text-decoration:none";>Apply Now</a></strong></b></button></p><br><br><br><hr>
     </div>
     
     
    
    <div id="textbox">
    <p class="alignleft">Stuff Application </p>
    <p class="alignright" ><button class="apply3"  ><strong><b><a href="stuff.php" style="color:white; text-decoration:none";>Apply Now</a></strong></b></button></p><br><br><br><hr>
    </div>
</div>
 
 
  <div class="main">
  <a name="notice"></a>
  
            
        <span class="py-1 px-2 text-white font-weight-bold" style="font-size:18px; line-height:25px; height:35px;"><h2>Recruitment Notice</h2></span>
 
  <div class="tab">
  <button class="tablinks"   onclick="openNotice('Teacher',this,'#ddd')" id="defaultOpen" style="background-color:green"><h3>Teacher</h3></button>
  <button class="tablinks" onclick="openNotice('Officer',this,'#ddd')" style="background-color:green"><h3>Officer</h3></button>
  <button class="tablinks" onclick="openNotice('Stuff',this,'#ddd')" style="background-color:green"><h3>Stuff</h3></button>
</div>
 <div id="Teacher" class="tabcontent">
  <h3>Teacher's Job</h3>
<?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "jobportalnotice";
    $conn = new mysqli($host, $dbusername, $dbpassword,  $dbname);
     $sql= "SELECT * FROM `notice` ORDER BY teacher_notice DESC ";
     $result = $conn->query($sql);
        ?>
    <?php foreach($result AS $row ){ ?>
    <label for="ContentPlaceHolder1"><a style="text-decoration:none" href="circular/<?php echo $row['teacher_notice'] ?>" target="_blank"><?php echo $row['description2']; echo "<br>"; ?></a></label><br>
    <?php  } ?>
  
</div>
 
 <div id="Officer" class="tabcontent">
  <h3>Officer's Job</h3>
   <?php
    $host = "localhost";
    $dbusername = "root"; 
    $dbpassword = "";
    $dbname = "jobportalnotice";
    $conn = new mysqli($host, $dbusername, $dbpassword,  $dbname);
     $sql= "SELECT description1,officer_notice  FROM `notice` ORDER BY officer_notice DESC ";
     $result = $conn->query($sql);
        ?>
   <?php foreach($result AS $row ){?>                   
     
      <label for="ContentPlaceHolder1"><a style="text-decoration:none" href="circular/<?php echo $row['officer_notice'] ?>" target="_blank"><?php echo $row['description1']; echo "<br>";?></a></label><br>  
  <?php  } ?>   
   
    
</div>
 
  
  <div id="Stuff" class="tabcontent">
  <h3>Stuff's Job</h3>
  <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "jobportalnotice";
    $conn = new mysqli($host, $dbusername, $dbpassword,  $dbname);
     $sql= "SELECT description3,stuff_notice FROM `notice`  WHERE stuff_notice IS NOT NULL ORDER BY stuff_notice DESC";
     $result = $conn->query($sql);
        ?>
    <?php foreach($result AS $row ){ ?>
    <label for="ContentPlaceHolder1"><a style="text-decoration:none" href="circular/<?php echo $row['stuff_notice'] ?>" target="_blank"><?php echo $row['description3']; echo "<br>"; ?> </a></label><br>
    <?php  } ?>
     
</div>
  </div>
  
   </div>  
   
                  
 <script>
function openNotice(pageName, elmnt, color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
     tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
     evt.currentTarget.className += " active";
}
     
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>     
   
   
    
</fieldset>
         


<div class="footer">
  <a name="contact"></a>
  <h2>Contact Us</h2>
    <p>For any Enquery<a style="text-decoration:none"  href="https://www.bou.edu.bd/index.php/contact/main-campus"> <strong>Click here</strong></a></p>
    </div>
   
    
<div class="endpage">
  <div id="textbox">
       <P class="alignright"> <a style="text-decoration:none" href="#" >Back to Top</a></P>
         <p class ="alignleft">© 2020 Bangladesh Open University . All Rights Reserved.<br>
          Developed & Maintenance by <strong>Sarmin</strong></p>
    
</div>
</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>



 <script src="carousel.js"></script>
	

</body>
</html>