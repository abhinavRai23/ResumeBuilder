<!DOCTYPE html>
<html lang="en">
<head>

<meta charset=utf-8>

<title>Resume Timeline</title>
<script type='text/javascript' src='js/jquery-2.1.1.js'></script>
<script type='text/javascript' src='js/scroll.js'></script>


<!-- style sheets-->
<link rel="stylesheet" media="all" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" media="all" href="css/custom.css" type="text/css">
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">



<style>
 .item{color:#fff;}
  
  .icon-bar > * {
    text-align: center;
    font-size: 1rem;
    width: 10%;
	padding:10px 10px 10px 10px;
    margin: 0 auto;
    display: block;
    float: left; }
    .icon-bar > * i, .icon-bar > * img {
      display: block;
      margin: 0 auto; }
    .icon-bar > * i {
      font-size: 1.875rem;}
    .icon-bar > * img {
      width: 1.875rem;
      height: 1.875rem; }  

.title .glyphicon{
font-size:medium;}	  
#username{background-color:black;
		  color:white;
		  font-size:14px;
		  text-align:center;}
#profession{background-color:#F0F0F0;
            width:50%;
			position: absolute;
            right:26%;
			text-align:center;}			
</style>

</head>
<body>

<!--fetching data-->
<?php
if($con=mysql_connect('localhost','root','' ))
{
	//echo "done";
}
if(mysql_select_db('resume'))
{
  //echo '   database--done';
}
?>



<?php
//error_reporting(0);
$result=mysql_query("select id FROM profile");
while($row = mysql_fetch_array($result))
{
   $id=$row['id'];

   
   }
  //$id=17;
//echo $id;

$result = mysql_query("select * FROM profile where id='$id'");
$row = mysql_fetch_array($result);
  $username=$row['username'];
  //echo  $username;
  $name=$row['name'];
  //echo $name;
//$password=$row['password']  ;
$profession=$row['profession'];
$dob=  $row['dob'];
$birth_city=$row['birth_city'] ;
$birth_country= $row['birth_country'] ;
$profile_link=  $row['profile_link']  ;
$work_duration1= $row['work_duration1'] ;
$organization1=  $row['organization1']  ;
$job_place1=  $row['job_place1']  ;
$job_description1=  $row['job_description1'];
 $work_duration2= $row['work_duration2']  ;
$organization2=  $row['organization2'] ;
$job_place1=  $row['job_place1'];
$job_place2=  $row['job_place2']  ;
 $job_description2=$row['job_description2']  ;
 $your_post2= $row['your_post2']  ;
 $edu_duration1 =$row['edu_duration1'] ;
 $institute1= $row['institute1']  ;
 $degree1= $row['degree1']  ;
 $edu_place1= $row['edu_place1']  ;
$edu_description1=  $row['edu_description1'] ;
$institute2=  $row['institute2'] ;
 $degree2= $row['degree2']  ;
 $edu_description2= $row['edu_description2'] ;
 $edu_place2= $row['edu_place2']  ;
$proskill1=  $row['proskill1']  ;
$psv1=  $row['psv1'];
$proskill2=  $row['proskill2'];
 $psv2=$row['psv2'] ;
 $proskill3= $row['proskill3']  ;
 $psv3= $row['psv3']  ;
 $pskill1= $row['pskill1'] ;
 $persv1= $row['persv1'] ;
 $pskill2= $row['pskill2'] ;
 $persv2= $row['persv2'] ;
 $pskill3= $row['pskill3']  ;
 $persv3= $row['persv3']  ;
 $int_name1= $row['int_name1'] ;
 $int_description1= $row['int_description1'] ;
 $int_name2=$row['int_name2'] ;
 $int_description2=$row['int_description2'] ;
 $int_name3= $row['int_name3'] ;
 $int_description3= $row['int_description3'] ;
 $address1= $row['address1']  ;
 $address2= $row['address2']  ;
 $mobile_no= $row['mobile_no'] ;
 $phone_no= $row['phone_no'] ;
 $email_id= $row['email_id'] ;
  error_reporting(0);

?>
<?php
 //require 'database.php';
 ?>
<!-- Navigation -->
<nav id="spy" class="spy hidden-sm hidden-xs">
    <ul id="d2">
        <li class=""><a href="#profile" class="smoothScroll">Profile</a></li>
        <li class=""><a href="#work-experience" class="smoothScroll">Work experience</a></li>
        <li class=""><a href="#education" class="smoothScroll">Education</a></li>
        <li class=""><a href="#professional-skills" class="smoothScroll">Skills</a></li>
        <li class=""><a href="#interests" class="smoothScroll">Interests</a></li>
        <li class=""><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
        <li class=""><a href="#contact" class="smoothScroll">Contact</a></li>
    </ul>
</nav>
<!-- end Navigation -->
    
<form action="resumeget.php" method="post">    
<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <?php
				$allowedExts = array("gif", "jpeg", "jpg", "png");
				$temp = explode(".", $_FILES["file"]["name"]);
				$extension = end($temp);

				if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))
				&& ($_FILES["file"]["size"] < 2000000)
				&& in_array($extension, $allowedExts)) {
				  if ($_FILES["file"]["error"] > 0) {
					die('File upload error');
				  } else {
				  if (file_exists("images/" . $_FILES["file"]["name"])) {
					  echo $_FILES["file"]["name"] . " already exists. ";
					} else {
					  move_uploaded_file($_FILES["file"]["tmp_name"],
					  "images/" . $_FILES["file"]["name"]);
					  echo "<img class=\"face\" src='images/" . $_FILES["file"]["name"]."' />";
					}
				  }
				} else {
				  echo "Invalid file";
				}
				?>
                <hr class="empty">
                <p class="header-name"><?php echo $username; ?></p>
                </br></br><p class="header-title"><?php echo $profession; ?></p>
            </div>
        </div>
    </div>
</header>
<!-- end Header -->
	
<!-- Profile -->
</br>
</br>
</br>
<section id="profile" class="profile activate">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
                    <li class="title ">	<span class="glyphicon">
					   <span class="item" aria-label="torso"><i class="fi-torso"></i></span>
					</span>   <a id="Profile">Profile</a></li>
                    <li>
                        <span class="note">Full name</span>
                        <p><strong><?php echo $name; ?></strong></p>
						
                    </li>
                    <li>
                        <span class="note">Born</span>
                        <p><strong><?php echo $dob; ?></strong></p>
                        <p><strong><?php echo $birth_city; ?></strong></p>
						 <p><strong><?php echo $birth_country; ?></strong></p>
                    </li>
                    
                    <li>
                        <span class="note">Linked In Profile</span>
                        <p><strong><?php echo $profile_link; ?></strong></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Profile -->

<!-- Work experience -->
<section id="work-experience" class="work-experience">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
                    <li class="title"><span class="glyphicon">
					   <span class="item" aria-label="laptop"><i class="fi-laptop"></i></span>
					</span><a id="Work experience">Work experience</a></li>
						
					 <li>
						    <p><span class="note"><?php echo $work_duration1; ?></span> <strong><?php echo $organization1; ?></strong></p>
                            <p><strong> <?php echo $your_post1; ?></strong></p>
							<p><strong><?php echo $job_place1; ?></strong></p>
						    <p><?php echo $job_description1; ?></p>
						</li>    
					 <li>
						    <p><span class="note"><?php echo $work_duration1; ?></span> <strong><?php echo $organization2; ?></strong></p>
                            <p><strong> <?php echo $your_post2; ?></strong></p>
							<p><strong><?php echo $job_place2; ?></strong></p>
						    <p><?php echo $job_description2; ?></p>
						</li>    
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Work experience -->
    
<!-- Education -->
<section id="education" class="education">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
                    <li class="title"><span class="glyphicon">
					   <span class="item" aria-label="book"><i class="fi-book"></i></span>
					</span><a name="Education">Education</a></li>
					   
						 <li>
						    <span class="note"><?php echo $edu_duration1; ?></span> 
							<strong><p><?php echo $institute1; ?></p></strong>
                            <strong> <p><?php echo $degree1; ?></p></strong> 
						    <strong> <p><?php echo $edu_place1; ?></p></strong>	
						    <p><?php echo $edu_description1; ?></p>
						</li>
						 <li>
						    <span class="note"><?php echo $edu_duration2; ?></span> 
							<strong><p><?php echo $institute2; ?></p></strong>
                            <strong> <p><?php echo $degree2; ?></p></strong> 
						    <strong> <p><?php echo $edu_place2; ?></p></strong>	
						    <p><?php echo $edu_description2; ?></p>
						</li>
					  
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Education -->
    
<!-- Professional skills -->
<section id="professional-skills" class="professional-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
                    <li class="title"> <span class="glyphicon"><span class="item" aria-label="graph-trend"><i class="fi-graph-trend"></i></span></span><a name="Professional skills">Professional skills</a></li>
          
				<li>	
						<span class="note"><?php echo $proskill1; ?></span>
						<span class="annotation pull-right"><?php echo $psv1; ?></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: <?php echo $psv1; ?>%;"></div>	
                        </div>
					</li>
					
				<li>	
						<span class="note"><?php echo $proskill2; ?></span>
						<span class="annotation pull-right"><?php echo $psv2; ?></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width: <?php echo $psv2; ?>%;"></div>	
                        </div>
					</li>
					
				
				<li>	
						<span class="note"><?php echo $proskill3; ?></span>
						<span class="annotation pull-right"><?php echo $psv3; ?></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success"  role="progressbar"  style="width: <?php echo $psv3; ?>%;"></div>	
                        </div>
					</li>	
				   
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Professional skills -->
    
<!-- Personal skills -->
<section id="personal-skills" class="personal-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
                    <li class="title"><span class="glyphicon">
					   <span class="item" aria-label="graph-bar"><i class="fi-graph-bar"></i></span>
					</span><a>Personal skills</a></li>
                        
                    <li>	
						<span class="note"><?php echo $pskill1; ?></span>
						<span class="annotation pull-right"><?php echo $persv1; ?></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-personal-skill-success" role="progressbar" style="width: <?php echo $persv1; ?>%;"></div>
                        </div>
                    </li>
					 <li>	
						<span class="note"><?php echo $pskill2; ?></span>
						<span class="annotation pull-right"><?php echo $persv2; ?></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-personal-skill-success" role="progressbar" style="width: <?php echo $persv2; ?>%;"></div>
                        </div>
                    </li>
					 <li>	
						<span class="note"><?php echo $pskill3; ?></span>
						<span class="annotation pull-right"><?php echo $persv3; ?></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-personal-skill-success" role="progressbar" style="width: <?php echo $persv3; ?>%;"></div>
                        </div>
                    </li>
					
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Personal skills -->
    
<!-- Interests -->
<section id="interests" class="interests">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
                    <li class="title"><span class="glyphicon">
					   <span class="item" aria-label="heart"><i class="fi-heart"></i></span>
					</span><a name="Interests">Interests</a></li>
					
                    <li>
                        <p><strong><span class="note"><?php echo $int_name1; ?></span></strong></p>
                        <p class="description"><?php echo $int_description1; ?></p>
                    </li>
					<li>
                        <p><strong><span class="note"><?php echo $int_name2; ?></span></strong></p>
                        <p class="description"><?php echo $int_description2; ?></p>
                    </li>
					<li>

                        <p><strong><span class="note"><?php echo $int_name3; ?></span></strong></p>
                        <p class="description"><?php echo $int_description3; ?></p>
                    </li>
					
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Interests -->
  
<!-- Contact -->
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
                    <li class="title"><span class="glyphicon">
					   <span class="item" aria-label="mail"><i class="fi-mail"></i></span>
					</span><a name="Contacts">Contact</a></li>
					<li>
					    <span class="note">Enter your contact details</span></br></br>
                        <span class="note">Address</span>
                        
						<p><strong><?php echo $address1; ?></strong></p>
              
						<p><strong><?php echo $address2; ?></strong></p>			
									
                        <span class="note">Mobile</span>
                        
						<p><strong><?php echo $mobile_no; ?></strong></p>
                 
						<span class="note">Phone</span>
                       <p><strong><?php echo $phone_no; ?></strong></p>
                    	
					   <span class="note">Email</span>
                        <p><strong><?php echo $email_id; ?></strong></p>
                        <hr class="empty">
					</li>
					
					 </ul>
            </div>
        </div>
    </div>	
</section>
<!-- end Contact -->
<br/><br/><br/>						
						<br/><br/>
						
</form>
</body></html>