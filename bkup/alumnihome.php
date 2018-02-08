<?php
@session_start();
set_time_limit(0);
ini_set('mysql.connect_timeout', 600);//for long queries
ini_set('default_socket_timeout', 600);//for long queries
@ini_set( 'max_input_vars', 10000 );
include "allfunction.php";
ini_set('date.timezone', 'Asia/Kolkata');
include("db.php");
$checkv1=0;
$title="";
 $redirect="alumni/posts.php";
 if(isset($_SESSION["userid"]))
 {
	$userid=$_SESSION["userid"];
 }
else if (!isset($_SESSION["userid"]))
{
  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=signup.php">'; 
}

 
 
 
 
 if(isset($_GET["page"]))
 { $s=$_GET["page"];
switch($s)
	 { 
	 case 1:
			 $redirect="alumni/joblist.php";
			 $title="List of Jobs";
			 break;
	case 2:
			 $redirect="alumni/profile.php";
			 $title="List of Jobs";
			 break;
	case 3:
			 $redirect="upcoming-events.php";
			 $title="List of Events";
			 break;
			 
			 
	case 4:
			 $redirect="logout.php";
			 $title="logout";
			 break;
			 
case 5:
			 $redirect="photogallery.php";
			 $title="logout";
			 break;
	 case 99:
			 $redirect="alumni/studentlist1.php";
			 $title="List of Your Students Reuired updation";
			 break;
default:
			 $redirect="alumni/posts.php";
			  $title="test";
			 break;

	 }
 
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="You will be glad to know that BBD Group, Lucknow has launched the BBD ALUMNI PORTAL exclusively for our distinguished Alumni so that they may connect with their college mates along with their Alma Mater.Pls. Register on the following link and share this information with your connected college mates">
<meta name="keywords" content="BBD University ALUMNI PORTAL">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<link href="css/datepicker.css" rel="stylesheet">
<style type="text/css">
/* Paste this css to your style sheet file or under head tag */
/* This only works with JavaScript, 
if it's not present, don't show loader */
.loading{position:fixed; left:50%; top:50%; z-index:10000; 
 width:100%; height:100%; top:0; left:0; background:rgba(255,255,255,0.6); text-align:center;}
.loading >img{margin-top:20%;}
</style>

<script type="text/javascript">
$(document).ready(function(){
// show loading image
$('.loading').show();

// main image loaded ?
$(window).on('load', function(){
  // hide/remove the loading image
  $('.loading').fadeOut(100); // Time in milliseconds.
});
});
</script>

<!------------------CSS for Date Picker------------------>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Babu Banarasi Das University.</title>

<script> 
$(document).ready(function(){
    $(".rgt-frnd > li  .btn-invt").click(function(){
		   var $this = $(this).closest('li').find('.pan');
   $('.invtfrnd  .pan').not($this).slideUp(150);
   $this.slideToggle(150);
		
    });
});


      </script>

<script>
document.getElementById('fileToUpload1').onchange = function(evt) {
    ImageTools.resize(this.files[0], {
        width: 100, // maximum width
        height: 100 // maximum height
    }, function(blob, didItResize) {
        // didItResize will be true if it managed to resize it, otherwise false (and will return the original file as 'blob')
        document.getElementById('preview').src = window.URL.createObjectURL(blob);
        // you can also now upload this blob using an XHR.
    });
};
</script>

<script>
function myFunction() {
    window.open("http://www.facebook.com/share.php?u=http://alumni.bbdlkotnp.in/&title=BBD ALUMNI PORTAL", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}



    </script>


<script src="js/custom.js"></script>
</head>

<body class="bd-dash">
<div class="loading"><img src="images/Preloader_61.gif" id="loader_img">
</div>

<?php include 'header.php';?>

<?php include 'alumni/home.php';?>

<?php include 'footer.php';?>
<p style="position:fixed; bottom:0; left:0;"><?php
$alreadyshared=0;
if($alreadyshared==0)
{
	?>
	<button onclick="myFunction()" class="btn btn-xs btn-primary" id="myButton">Share On Facebook</button>
	<?php
}
?></p>
</body>
</html>
