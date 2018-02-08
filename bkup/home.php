<?php
$sql = "select * from personal where userid='$userid'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
$name= $row["name"];
$college= $row["college"];
$course= $row["course"];
$branch= $row["branch"];
$yop= $row["yop"];
}
$sql = "select * from jobdetail where userid='$userid' and currently=1";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
$cname= $row["cname"];
$desg= $row["desg"];
}
$profilephoto=getprofilephoto($userid);

 ?>

<section class="pg-form-con container" id="pg-inner">



  <div class="row">
    <div class="col-sm-10 mar-b-50">
      <div class="col-sm-12 prof-title-con mar-b-10">
        <div class="row">
          <div class="col-sm-4"><span class="pf-con"> <img src="alumniphoto/<?php echo $profilephoto; ?>" class="img-left pf-photo" style="height:80px;"><a href="javascript:void();" data-toggle="modal" data-target="#myModal1" class="btn btn-primary btn-edit btn-xs">Change Photo</a></span>
            <div class="prof-title">
              <h2><a href="#"><?php echo $name; ?></a></h2>
              <span><a href="#"><?php echo $cname; ?></a></span><span><a href="#"><?php echo $desg; ?></a></span> <span class="pt-update"><a href="alumnihome.php?page=2">Update Profile</a></span> <span>
              <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog">
                
             
                  
                  <!-- Modal content-->
                  <div class="modal-content">
                    <form role="form" method="post" class="form-horizontal" action="alumni/addphoto.php" enctype="multipart/form-data">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Upload Photo</h4>
                      </div>
                      <div class="modal-body"> 
                        <!--<input type="file" name="fileToUpload1" id="fileToUpload1"  size="30"  style="height:30px;" placeholder="Upload Image " />-->
                        
                        <label class="btn btn-primary btn-default btn-sm btn-file" > Browse
                          <input type="file" class="hidden fileToUpload1" name="fileToUpload1" id="fileToUpload1">
                        </label>
                        
                        <span class="inp-filenm"></span>
                        <p class="mar-10 text-right">
                          <button type="submit" class="btn btn-sm btn-primary">Upload</button>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              </span> </div>
          </div>
          <div class="col-sm-8">
            <ul id="tickr" class="tickr">
             <?php eventslist();  ?>
            </ul>
           <script src="js/jquery.ticker.js"></script> 
            
            <script>
			$(document).ready(function(){
				$("#tickr").ticker();
				$("#ticker2").ticker({ effect: "slideUp", interval: 4000});
				$("#ticker3").ticker({ effect: "slideDown", interval: 5000});

			});
</script> 
            
          </div>
          <!--<div class="col-sm-6 prof-content">
            <p class="content"><a href="#"><span class="number">4</span> people viewed your profile in the past 90 days</a></p>
            <p class="content"><a href="#"><span class="number">317</span>connections. <span class="gpe-action">Grow your network</span></a></p>
          </div>--> 
        </div>
      </div>
      <div class="col-sm-12 prof-title-con mar-b-10 three-btn-con">
        <div class="row">
          <ul class="lst-action">
            <li class="col-sm-4 share"><a href="#" data-toggle="modal" data-target="#myModaljob"><i class="fa fa-share-alt" aria-hidden="true"></i> Share an Job</a> </li>
            
            <!-- Modal -->
            
            <li class="col-sm-4 upload"> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-upload" aria-hidden="true"></i> Upload Post</a></li>
            <li class="col-sm-4 write"><a href="#" data-toggle="modal" data-target="#invfrnd"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Invite Friend</a></li>
          </ul>
        </div>
      </div>
      <?php include $redirect;  ?>
    </div>
    <div class="list-group rgt-frnd">
      <h2 href="#" class="list-group-item active"> Your Classmates </h2>
      <?php  getclassmatelist($college,$course,$branch,$yop);  ?>
    </div>
  </div>
</section>
<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="post" class="form-horizontal" action="alumni/addpost.php" enctype="multipart/form-data">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload Post</h4>
        </div>
        <div class="modal-body">
          <textarea placeholder="Something abour Post" name="tbpost" id="tbpost" class="form-control input-sm"></textarea>
          <!--          <input type="file" name="fileToUpload1" id="fileToUpload1"  size="30"  style="height:30px;" placeholder="Upload Image " />-->
          
          <label class="mar-t-10 btn btn-sm btn-default btn-primary btn-file"> Browse
            <input type="file" class="hidden fileToUpload1"  name="fileToUpload1" id="fileToUpload1" >
            
          </label>
          <span class="inp-filenm"></span>
          
          <p class="mar-t-10 text-right">
            <button type="submit" class="btn btn-sm btn-primary">Post</button>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="invfrnd" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Invitation to Your Friend</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="alumni/sendinvitation.php" method="post">
          <div class="form-group">
            <label for="inputEmail3"  class="col-sm-2  control-label">College</label>
            <div class="col-sm-10">
              <select class="form-control input-sm" name="college" required>
                <option selected="" value="">Select College</option>
                <option value="BBDNITM">BBDNITM</option>
                <option value="BBDNIIT">BBDNIIT (NIEC)</option>
                <option value="BBDEC">BBDEC (BBDESGI)</option>
                <option value="BBDEC">BBDU </option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">course</label>
            <div class="col-sm-10">
              <select required class="form-control input-sm" name="course">
                <option selected="" value="">Select Course</option>
                <option value="B.TECH.">B.TECH.</option>
                <option value="B.PHARM">B.ARCH</option>
                <option value="BHMCT">BHMCT</option>
                <option value="BBA">BCA </option>
                <option value="B.ED">B.PED </option>
                <option value="BDS">BDS </option>
                <option value="B COM">B COM </option>
                <option value="BCOM LLB">BCOM LLB </option>
                <option value="BA.LLB">BA.LLB </option>
                <option value="BBA LLB">BBA LLB </option>
                <option value="M.TECH">M.TECH </option>
                <option value="MCA">MCA </option>
                <option value="MBA">MBA </option>
                <option value="IMBA">IMBA </option>
                <option value="M.PHARM">M.PHARM </option>
                <option value="MPED">MPED </option>
                <option value="M.ARCH ">M.ARCH </option>
                <option value="MDS">MDS </option>
                <option value="LLM">LLM </option>
                <option value="PH.D ">PH.D </option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">branch</label>
            <div class="col-sm-10">
              <select required class="form-control input-sm" name="branch">
                <option selected="" value="">For B.Tech only</option>
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
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">YOP</label>
            <div class="col-sm-10">
              <select required="" name="yop" id="yop" class="form-control input-sm">
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
            <label for="name" class="col-sm-2 control-label">Name:</label>
            <div class="col-sm-10">
              <input required class="form-control input-sm" id="name" name="name" placeholder="Name" type="text">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input required class="form-control input-sm" id="email" name="email" placeholder="Email" type="email">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary btn-sm btn-default">Send Invitation</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="myModaljob" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Share Job</h4>
      </div>
      <div class="modal-body">
        <form role="form" method="post" class="form-horizontal" action="alumni/addjob.php" enctype="multipart/form-data">
          <div class="col-sm-12">
            <div class="form-group">
              <input required="" placeholder="Company Name" name="cname" id="cname" class="form-control input-sm" type="text">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <input required="" placeholder="Designation" name="cdesg" id="cdesg" class="form-control input-sm" type="text">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <textarea placeholder="Something abour Job" name="tbdetail" id="tbdetail" class="form-control input-sm"></textarea>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label class="mar-t-10 btn btn-sm btn-default btn-primary btn-file"> Browse
                <input class="hidden fileToUpload1" name="fileToUpload1" id="fileToUpload1" type="file">
              </label>
              <span class="inp-filenm"></span>
            </div>
          </div>
          <div class="modal-footer">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-sm btn-primary">Upload</button>
            </div>
          </div>
        </form>
        <div class="modal fade" id="invtfrnd" role="dialog" aria-hidden="false">
          <div class="modal-dialog"> 
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">Share Job</h4>
              </div>
              <div class="modal-body">
                <div class="col-sm-12">
                  <form name="invtfrnd"  method="post" action="#" class="form-horizontal invt-frnd-frm" id="invtfrnd">
                    <div class="form-group">
                      <label for="email" class="col-sm-3">Email:</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control input-sm" id="email" placeholder="Type your Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <ul class="list-inline pull-right mar-t-20">
                        <li>
                          <button  id="addshjb" type="submit" class="btn btn-primary">Add</button>
                        </li>
                      </ul>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
