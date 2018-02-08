<?php
/*
 * @author Puneet Mehta
 * @website: http://www.PHPHive.info
 * @facebook: https://www.facebook.com/pages/PHPHive/1548210492057258
 */
require_once './config.php';
echo ((isset($errorMsg)))?$errorMsg:'';
if (isset($_SESSION["userid"]) && $_SESSION["userid"] != "") {
  // user already logged in the site
  header("location:alumnihome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<meta name="description" content="BBD ALUMNI PORTAL">
<meta name="keywords" content="BBD University ALUMNI PORTAL">
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.validate.min.js" type="text/javascript"></script>
<!------------------CSS for Date Picker------------------>

<script src="js/moment.js"></script>
<script src="js/date-picker.js"></script>
<link href="css/date-picker.css" rel="stylesheet">
<style type="text/css">
    .error{
      color: red;
      font-size: 13px;
      font-weight: 200;
      padding-top: 5px;
    }
</style>
<!------------------CSS for Date Picker------------------>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>You will be glad to know that BBD Group, Lucknow has launched the BBD ALUMNI PORTAL exclusively for our distinguished Alumni so that they may connect with their college mates along with their Alma Mater.Pls. Register on the following link and share this information with your connected college mates</title>

<!--<script type="text/javascript">
$(document).ready(function(){
    setTimeout(function() {
        $('.imgs').fireworks();

    });


setTimeout(function() {
    $(".imgs").fadeOut()
}, 13000); // <-- time in milliseconds

	
});
</script>-->

</head>

<body class="band">
<?php include 'include/header.php';?>
<!--/ band-->
<section class="pg-form-con container" id="pg-inner">
  <div class="col-sm-12">
    <div class="page-header">
      <h1>Alumni Registration </h1>
    </div>
  </div>
  <form class="form-horizontal reg-form" method="POST" action="addreg.php" id="regform">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 frm-con"> 
        <!-- <h2>Request Info</h2>-->
        
        <div class="form-group">
          <label for="rn" class="col-sm-4 control-label">Name:</label>
          <div class="col-sm-8">
            <input class="form-control input-sm required"  id="name" name="name"  placeholder="Name">
          </div>
        </div>
        <div class="form-group">
          <label for="clg" class="col-sm-4 control-label">College:</label>
          <div class="col-sm-8">
            <select  name="college" id="college" class="form-control input-sm">
              <option selected="" value="">Select college</option>
              <option value="BBDNITM">BBDNITM</option>
              <option value="BBDNIIT">BBDNIIT (NIEC)</option>
              <option value="BBDEC">BBDEC (BBDESGI)</option>
              <option value="BBDEC">BBDU </option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="course" class="col-sm-4 control-label">Course:</label>
          <div class="col-sm-8">
            <select  name="course" id="course" class="form-control input-sm">
             <option selected="" value="">Select Course</option>
              <option value="B.TECH">B.TECH</option>
              <option value="B.ARCH">B.ARCH</option>
               <option value="B.PHARM">B.PHARM</option>
              <option value="BHMCT">BHMCT</option>
               <option value="BBA">BBA </option>
              <option value="BCA">BCA </option>
              <option value="B.ED">B.ED </option>
              <option value="B.PED">B.PED </option>
              <option value="BDS">BDS </option>
              <option value="B.COM">B.COM </option>
              <option value="BCOM.LLB">BCOM LLB </option>
              <option value="BA.LLB">BA.LLB </option>
              <option value="BBA.LLB">BBA.LLB </option>
              <option value="M.TECH">M.TECH </option>
              <option value="MCA">MCA </option>
              <option value="MBA">MBA </option>
              <option value="IMBA">IMBA </option>
              <option value="M.PHARM">M.PHARM </option>
              <option value="MPED">MPED </option>
              <option value="M.ARCH ">M.ARCH </option>
              <option value="MDS">MDS </option>
              <option value="LLM">LLM </option>
              <option value="PH.D">PH.D</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="brnch" class="col-sm-4 control-label">Branch <span style="font-size:10px;"></span></label>
          <div class="col-sm-8">
            <select name="branch" id="branch" class="form-control input-sm">
              <option selected="selected"></option>
              <option selected="" value="">---Select Branch----</option>
              <option value="AERO">AERO</option>
              <option value="CIVIL">CIVIL</option>
              <option value="CHEMICAL">CHEMICAL</option>
              <option value="EE">EE </option>
              <option value="EN">EN </option>
              <option value="ECE">ECE </option>
              <option value="EI">EI </option>
              <option value="ME">ME </option>
              <option value="BME">BME </option>
              <option value="CSE">CSE </option>
              <option value="IT">IT </option>
              <option value="Oral.Medicine">Oral Medicine </option>
              <option value="Oral.Surgery">Oral Surgery </option>
              <option  value="Prosthodontics">Prosthodontics </option>
              <option value="Puboptionc.Health">Puboptionc Health </option>
              <option value="Periodontology">Periodontology </option>
              <option value="Pedodontics">Pedodontics </option>
              <option value="Orthodontics">Orthodontics </option>
              <option value="Oral.Pathology">Oral Pathology</option>
              <option value="Conservative">Conservative </option>
              <option value="Anatomy">Anatomy </option>
              <option value="Biochemistry">Biochemistry </option>
              <option value="Physiology">Physiology</option>
              <option value="Pathology">Pathology</option>
              <option value="Microbiology">Microbiology</option>
              <option value="Pharmacology">Pharmacology</option>
              <option value="Medicine">Medicine</option>
              <option value="Surgery">Surgery</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="yrp" class="col-sm-4 control-label">Year of Passing:</label>
          <div class="col-sm-8">
            <select  name="yop" id="yop" class="form-control input-sm">
              <option value="">Year </option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label" for="mob">Mobile Number:</label>
          <div class="col-sm-8">
            <input pattern="[7-9]{1}[0-9]{9}" class="form-control input-sm number" placeholder="Mobile Number" type="text" id="mob" name="mobile">
            <!--<span class="input-group-addon" id="mobileno"> <a href="#">Get OTP</a></span>--> 
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="col-sm-4 control-label ">Email:</label>
          <div class="col-sm-8 frm-num">
            <input  placeholder="Email" name="email" id="email" class="form-control input-sm" type="text">
          </div>
        </div>
        <script type="text/javascript">
          $(function() {
              $('.wrkdiv').hide(); 
              $('#crnt-wrk').change(function(){
                if($('#crnt-wrk').val() == 'Yes') {
            			$('.wrkdiv').show();
        			    $($detachedItem).insertAfter(".crnt-wrking");
          				$('.wrkdiv').show();
          		}else if($('#crnt-wrk').val() == 'No') {
          			$detachedItem = $('.wrkdiv').detach();
              }
            });
          });
        </script>
        <div class="form-group crnt-wrking">
          <label for="crnt-wrk" class="col-sm-4 control-label">Currently Working:</label>
          <div class="col-sm-8">
            <select  name="crnt-wrk" id="crnt-wrk" class="form-control input-sm">
              <option selected="" value="">Currently Working</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
          </div>
        </div>
        <div class="wrkdiv">
          <div class="form-group">
            <label class="col-sm-4 control-label" for="jplc">Company Name:</label>
            <div class="col-sm-8">
              <input  placeholder="Company Name" name="comp-name" id="comp-name" class="form-control input-sm" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="jb-design" class="col-sm-4 control-label">Job Designation:</label>
            <div class="col-sm-8">
              <input  placeholder="Job Designation" name="jb-design" id="jb-design" class="form-control input-sm" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="jb-plc" class="col-sm-4 control-label">Job Location:</label>
            <div class="col-sm-8">
              <input  placeholder="Job Location" name="jb-plc" id="jb-plc" class="form-control input-sm" type="text">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-8 col-sm-offset-4 mar-t-20 mar-b-40">
            <button class="btn btn-primary" type="submit">Join Now</button>
            <!--<a href="fbconfig.php" class="btn  btn-social btn-facebook">
             Sign in <span class="fa fa-facebook"></span>
          </a>--> 
          </div>
        </div>
      </div>
    </div>
  </form>
</section>
<?php // include 'include/footer.php'; ?>
<!--js stuff down here after the rest of the page has loaded
<script type="text/javascript" src="js/skrollr.js"></script> 
<script type="text/javascript">
	skrollr.init({
		forceHeight: false
	});
	</script>--> 
<script type="text/javascript">
  $(document).ready(function(){
    jQuery.validator.addMethod("email",function(value,element){
    return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
    },"Please enter valid email address.");
    $('#regform').validate({
      rules:{
        "name":{
          required:true
        },
        "college":{
          required:true
        },
        "course":{
          required:true
        },
        "branch":{
          required:true
        },
        "yop":{
          required:true
        },
        "email":{
          required:true,
          email:true
        }
      },
      messages:{
        "name":{
          required:"Please enter your name."
        },
        "college":{
          required:"Please select your college."
        },
        "course":{
          required:"Please select your course."
        },
        "branch":{
          required:"Please select your branch."
        },
        "yop":{
          required:"Please select your Passing year."
        },
        "email":{
         required:"Please enter your email.",
        }
      }
    });
  });
</script>
</body>
</html>
