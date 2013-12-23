<?php 

error_reporting (E_ALL ^ E_NOTICE); 

if (isset($_REQUEST['file']))
{
 echo $_REQUEST['file'];
 
}
 /////////////////////////////
 
$message ="";
$myext ="";
$maxsize = 2000000;

if(isset($_FILES["file"]["type"]))
{
		
	 $myfname =$_FILES["file"]["name"];
	 
	 
	 session_start();
$_SESSION['myfile'] = $myfname;
$_SESSION['myusername'] = $_REQUEST['username'];
$_SESSION['mypassword'] = $_REQUEST['password'];

	$username = $_SESSION['myusername'];
	$password = $_SESSION['mypassword'];

//echo "alue := ".$_SESSION['myfile'];
	 
	 
if($myfname!="")
{
if (file_exists("uploads/". $_FILES["file"]["name"]))
{
 unlink("uploads/".$_FILES["file"]["name"]); 
}
}

{
}
//$myext =substr($_FILES["file"]["type"],6,5);

//$_FILES["file"]["name"] = $_FILES["file"]["name"] .$myuserid .".".$myext;

if (($_FILES["file"]["type"] == "text/plain")&&($_FILES["file"]["size"] < $maxsize))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
		

    if (file_exists("uploads/" . $_FILES["file"]["name"]))
      {
		  
		   unlink("uploads/".$_FILES["file"]["name"]);
		   
     //  $message = $_FILES["file"]["name"] . " already exists. Please view your folder";
	  // echo  $message;
	   
	   
      }
    else
      {		  
		
move_uploaded_file($_FILES["file"]["tmp_name"],
 "uploads/" . $_FILES["file"]["name"]);
 // echo "Stored in: " . "uploads/" . $_FILES["file"]["name"];
$fname = $_FILES["file"]["name"];

	 //$message = "Image uploaded...";
	 	 
		 $myfname =$_FILES["file"]["name"];
//	 include ("create_thumbs.php");
      }
    }
  }
else
  {
	  if($_FILES["file"]["size"] > $maxsize)
	  {
		  $maxsize = $maxsize/1024;
		  $message = "Please select a file that is not greater than " . $maxsize . " kb in size";
	  }else{
	  
  $message = "Invalid file";
	  }
  }}




 /////////////////////////////
 

?>
<script type="text/javascript" src="script.js"></script>
<style>
.Btn  {
	display:block;
	/*position:relative;
	margin:5px auto;
	padding:3px;*/
	border:1px solid #000;
	width:360px;
	font:1.0em verdana,arial;
	/*text-transform:uppercase;
	text-align:center;*/
	color:#FFF;
	background-color:#A7C942;
	text-decoration:none;
	cursor:pointer;
	
}

.Btnlong  {
	display:block;
	/*position:relative;
	margin:5px auto;
	padding:3px;*/
	border:1px solid #000;
	width:400px;
	font:1.0em verdana,arial;
	/*text-transform:uppercase;
	text-align:center;*/
	color:#FFF;
	background-color:#A7C942;
	text-decoration:none;
	cursor:pointer;
	
}
*{margin:0;padding:0;}
input.upload {
background-image:url(images/form_bg.jpg);
	background-repeat:repeat-x;
	border:1px solid #d1c7ac;
	width: 230px;
	color:#333333;
	padding:3px;
	position:relative;
	margin-right:4px;
	margin-bottom:8px;
	font-family:tahoma, arial, sans-serif;}

.tb10 {
	background-image:url(images/form_bg.jpg);
	background-repeat:repeat-x;
	border:1px solid #d1c7ac;
	width: 230px;
	color:#333333;
	padding:3px;
	margin-right:4px;
	margin-bottom:8px;
	font-family:tahoma, arial, sans-serif;
}
/* Rounded Corner */
.tb5 {
	background: url(images/rounded.gif) no-repeat top left;
	height: 22px;
	width: 230px;
	border: 0;
}
.tb5a {
	border: 0;
	width:220px;
	margin-top:3px;
}

#customers
{
font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
width:900px;
border-collapse:collapse;
}
#customers td, #customers th 
{
font-size:1em;
border:1px solid #98bf21;
padding:3px 7px 2px 7px;
}
#customers th 
{
font-size:1.1em;
text-align:left;
padding-top:5px;
padding-bottom:4px;
background-color:#A7C942;
color:#ffffff;
}
#customers tr.alt td 
{
color:#000000;
background-color:#EAF2D3;
}
body {
	margin-left: 0px;
	margin-top: 0px;
}
</style>

<table width="100%" border="0">
  <tr align="center">
    <td align="center">&nbsp;

<table width="698" border="0">
  <tr>
    <td width="692">

<title>NMEA&nbsp;STRINGS PROCESSOR </title>
<form action="index.php?r=1" method="post" enctype="multipart/form-data" name="form1 id="form1">
  <p class="tb10" ><strong>GPS DATA PROCESSOR </strong></p>
  <p >1. Load a text file contating the the data to be interpreted. Data should be in the format : </p>
  <p >$GPGGA,hhmmss.ss,llll.ll,a,yyyyy.yy,a,x,xx,x.x,x.x,M,x.x,M,x.x,xxxx </p>
  <p >For Example: $GPGGA,170834,4124.8963, N,08151.6838, W,1,05,1.5,280.2,M,-34.0, M,,,*75</p>
  <p >&nbsp;</p>
  <p>
    <?php if(isset($_GET['r']))
  {   
  
  ?><?php
  }else{?>
  
</p>
  <table width="560" border="0" id="customers">
    <tr class="alt">
      <td width="114"><span class="alt">
        <label for="txtfile2">Load txt File</label>
      </span></td>
      <td width="436"><span class="alt">
        <input name="file" type="file" class="Btn" id="file"  value="<?php echo $fname; ?>" width="300px" >
      </span></td>
    </tr>
    <tr>
      <td>Process Data </td>
      <td><span class="alt">
     <!--   <input name="Button" type="button" value="Send SMS"
onclick="loadpage('index.php?'+
'username='+this.form.username.value+
'&passord='+this.form.password.value+
'&file='+this.form.file.value+
'&submit=1','admincontent')">  -->
      </span>
        <input name="submit" type="submit"  value="Process data" /></td>
    </tr>
  </table>
  <?php }?>
  <p>
  
  <?php  $myfname = $_REQUEST['file'];
 
$myfname = $_SESSION['myfile'];


if($myfname!="")
{
	
	
	
$fh = fopen( "uploads/".$myfname,'r') or die($php_errormsg);
$people = fread($fh,filesize("uploads/".$myfname));
} 
 
 
$handle = @fopen( "uploads/".$myfname,'r');

//$handle = explode("\n", file_get_contents("uploads/".$myfname));

if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
      // echo"bf=". $buffer;
	  
	//  $seven_bit_msg = substr($people,14,160);
	  
	 // $msisdn = substr($people,0,13);
	  

	  
	  ?>
  <?php
	  
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

 ?>
<label for="data"></label></p>
  <p>
    <?php  $myfname = $_REQUEST['file'];
 
$myfname = $_SESSION['myfile'];

if($myfname!="")
{	
$file = fopen( "uploads/".$myfname,'r') or die($php_errormsg);

while ($line = fgets($file)) {list($sentId, $time, $latitude,$latitudeUnit, $logitude,$logitudeUnit, $fixquality,$satelites, $hdop, $altitude, $altitudeUnit, $heightofgeo, $heightofgeoUnit, $timesincelastupdate, $dpgsrefstationid,$checksum) = explode(',', str_replace('"','',$line));

    // do stuff with variables 
	}} 
?>
  </p>
  <p>&nbsp;</p>
  
    <?php if(isset($_GET['r']))
  {   ?>
  <table width="100%" border="0" class="alt" id="customers">
  <tr>
    <td width="189"><strong>Name</strong></td>
    <td width="192"><strong>Example Data</strong></td>
    <td width="154"><strong>Description</strong></td>
  </tr>
  <tr>
  <td>Sentence Identifier</td>
    <td> <?php if($sentId){ echo $sentId; } else { echo 'Blank';}?></td>    
    <td><?php if($sentId=='$GPGGA') {echo 'Global Positioning System Fix Data'; }?></td>
  </tr>
  <tr>
    <td>Time</td>
  <td><?php if($time){ echo $time; } else { echo 'Blank';}?></td>
  <td><?php echo substr($time,0,2) . ":" . substr($time,2,2) .":". substr($time,4,2) . "Z"; ?></td>
  </tr>
    <tr>
	  <td>Latitude</td>
  <td><?php if($latitude){ echo $latitude .", ".$latitudeUnit; } else { echo 'Blank';}?></td>
  <td><?php echo substr($latitude,0,2) . "d " . substr($latitude,2)."'".$latitudeUnit;?> </td>
    </tr>  
      <tr>
	    <td>Longitude</td>
  <td><?php if($logitude){ echo $logitude.", ".$logitudeUnit;  } else { echo 'Blank';}?></td>
  <td><?php echo substr($logitude,0,2) . "d " . substr($logitude,2)."'".$logitudeUnit;?> </td>
      </tr>
   <tr>
     <td>Fix Quality:
- 0 = Invalid
- 1 = GPS fix
- 2 = DGPS fix</td>
  <td><?php if($fixquality){ echo $fixquality;} else { echo 'Blank';}?></td>
  <td><?php if($fixquality=='0'){echo 'Data is invalid';}
  if($fixquality=='1'){echo 'Data is from a GPS fix';}
   if($fixquality=='2'){echo 'Data is from a DGPS fix';}  
  ?></td>
   </tr>
   <tr>
     <td>Number of Satellites</td>
  <td><?php if($satelites){ echo $satelites; } else { echo 'Blank';}?></td>
  <td><?php echo $satelites ." Satellites are in view";?> </td>
   </tr>
     <tr>
	   <td>Horizontal Dilution of Precision (HDOP)</td>
  <td><?php if($hdop){ echo $hdop; } else { echo 'Blank';}?></td>
  <td>Relative accuracy of horizontal position</td>
     </tr>
  
   <tr>
     <td>Altitude</td>
  <td><?php if($altitude){ echo $altitude . ", ". $altitudeUnit; } else { echo 'Blank';}?></td>
  <td> <?php echo $altitude . " meters above mean sea level";?></td>
   </tr>
   
  
   <tr>
     <td>Height of geo id above WGS84 ellipso id</td>
  <td><?php if($heightofgeo){ echo $heightofgeo .", ". $heightofgeoUnit; } else { echo 'Blank';}?></td>
  <td><?php echo $heightofgeo ." meters";?></td>
   </tr>
  
   <tr>
     <td>Time since last DGPS update</td>
  <td><?php if($timesincelastupdate){ echo $timesincelastupdate;} else { echo 'Blank';} ?></td>
  <td>&nbsp;</td>
   </tr>
  
     <tr>
	   <td>DGPS reference station id</td>
  <td><?php if($dpgsrefstationid){ echo $dpgsrefstationid;} else { echo 'Blank';} ?></td>
  <td>&nbsp;</td>
     </tr>
  
   <tr>
     <td>Checksum</td>
  <td><?php if($checksum){ echo $checksum;} else { echo 'Blank';} ?></td>
  <td>Used by program to check for transmission errors</td>
   </tr>
</table>

  <p>&nbsp;</p>

  <p><a href="index.php">&lt;&lt; Back</a></p>
  <?php }?>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</td>
  </tr>
</table>
  </tr>
</table>

 
