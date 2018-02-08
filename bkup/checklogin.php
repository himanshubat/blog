<?php
@session_start(); 
include("db.php");
include("logrecord.php");
$cnt=0;
$bstatus=0;
$sql = "select count(*) as cnt,ltotal,bstatus from login,personal where login.userid=personal.userid and login.userid='".mysql_real_escape_string($_POST["tb1"]). "' and password= '" . mysql_real_escape_string($_POST["tb2"])."' and type='alumni'";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result))
{
	$cnt= $row["cnt"];
	$ltotal= $row["ltotal"];
	$bstatus= $row["bstatus"];
}
if (($cnt>0)&&($ltotal>0)&&($bstatus==0))
{
	$r1=$_POST["tb1"];
	ini_set('date.timezone', 'Asia/Kolkata');
	$ip=$_SERVER['REMOTE_ADDR'];
	$sql = "select DATE_FORMAT( ldatetime,  '%d/%m/%y, %h:%i %p' ) as ldatetime,lip,ltotal from login where userid='".$r1."'";
 	$result = mysql_query($sql);
	$num_results = mysql_num_rows($result); 
	if ($num_results>0){ 
		$result = mysql_query($sql);
		while ($row = mysql_fetch_array($result)){
			write_mysql_log($r1,"Loggin Successfull");
			$tlogin= $row["ltotal"];
			$lip= $row["lip"];
			$ldatetime= $row["ldatetime"];
			$llip= $lip;
			$lldatetime= $ldatetime;
 			$_SESSION["llip"] = $lip;
  			$_SESSION["lldatetime"] = $ldatetime;
			$tlogin=$tlogin+1;
 			$sql="update login set ldatetime=DATE_ADD(NOW(), INTERVAL 0 MINUTE),ltotal=$tlogin,lip='".$ip."' where userid='".$r1."'";
			mysql_query($sql);
 		}
 	}
		$_SESSION["userid"] = $r1;
		mysql_free_result($result);
		mysql_close($conn);
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=alumnihome.php">'; 
	}
	else if (($cnt>0)&&($ltotal>0)&&($bstatus==1))
	{
		print("<script>alert('Deleted From Portal. Please Contact.')</script>");
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
	}
	else
	{
		echo '<html lang="en">
			<head>
			  <title>home</title>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			</head>
			<body>
			<div class="container">
			  	<div class="modal fade" id="myModal" role="dialog">
				    <div class="modal-dialog">
				    <!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<center><p style="color:red;">Username and Password combination is Incorrect..!</p></center>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
				    </div>
				</div>
			</div>
			<script type="text/javascript">
			    $(window).on("load",function(){
			        $("#myModal").modal("show");
			    });
			</script>
			</body>
			</html>';
		// print("<script>alert('Username and Password combination is Incorrect..!')</script>");
		echo '<META HTTP-EQUIV="refresh" Content="1; URL=index.php">';
		//print("<script>alert('Wrong Username/Password')</script>");
		//echo '<META HTTP-EQUIV="Refresh" Content="0; URL=signup.php">';
    }

?>
