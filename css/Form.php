<!DOCTYPE html>
<html lang="en">
<head>

<meta charset=utf-8>

<title>Resume Timeline</title>
<script type='text/javascript' src='js/jquery-2.1.1.js'></script>
<script type='text/javascript' src='js/scroll.js'></script>

<!-- style sheets-->
<link rel="stylesheet" media="all" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" media="all" href="css/formcss.css" type="text/css">
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
#col{color:#fff;}

h2{
margin-top:0px;}

#header-bar {height: 40px;
			 position:fixed;
			 width:100%;
			 top:0px;
             background-color: #000;
             border-bottom: 1px solid #191919;
             z-index: 100;
             line-height: 40px;
             margin-bottom: 1px;}

</style>

</head>
<body><a id="up"></a>
<div id="header-bar">
<center><h2 id="col">FILL THIS FORM FIRST</h2></center>
</div>
<!-- Navigation -->
<nav id="spy" class="spy hidden-sm hidden-xs">
    <ul id="d2">
        <li class=""><a href="#profile" class="smoothScroll">Profile</a></li>
        <li class=""><a href="#work-experience" class="smoothScroll">Work experience</a></li>
        <li class=""><a href="#education" class="smoothScroll">Education</a></li>
        <li class=""><a href="#professional-skills" class="smoothScroll">Skills</a></li>
        <li class=""><a href="#interests" class="smoothScroll">Interests</a></li>
        <li class=""><a href="#contact" class="smoothScroll">Contact</a></li>
    </ul>
</nav>
<!-- end Navigation -->

<form action="database.php" method="post"  enctype="multipart/form-data">    

<!-- Header -->
<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
            <h3>CHOOSE YOUR PICTURE</h3><br/> 		
	
          
            <center><input type="file" name="file" id="file"><center><br>		
                <hr class="empty">
                <p class="header-name"><input name="username" type="text" class="form-control" id="username" placeholder="Enter your name" required autofocus autocomplete="off"/></p>
                </br></br><p class="header-title"><input name="profession" type="text" class="form-control" id="profession" placeholder="Enter your profession" required/></p>
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
                    <li class="title ">
					<span class="glyphicon">
					   <span class="item" aria-label="torso"><i class="fi-torso"></i></span>
					</span>   
					<a id="Profile">Profile</a>
					</li>
                    <li>
                        <span class="note">Full name</span>
                        <p><strong><input type="text" name="name" class="form-control" id="name" placeholder="Enter your name" required/></strong></p>
						
                    </li>
                    <li>
                        <span class="note">Born</span>
                        <p><strong><input type="date" class="form-control" name="dob" id="dob" placeholder="Enter date of birth" required/></strong></p>
                        <p><strong><input type="text" class="form-control" name="birth_city" id="birth_city" placeholder="Enter city" required/></strong></p>
						 <p><strong><input type="text" name="birth_country" class="form-control" id="birth_country" placeholder="Enter country" required/></strong></p>
                    </li>
                    
                    <li>
                        <span class="note">Linked In Profile</span>
                        <input type="email" name="profile_link" class="form-control" id="profile_link" placeholder="Enter your profile link" required/>
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
					   <span class="item" aria-label="laptop">
					   <i class="fi-laptop"></i></span>
					</span> <a id="Work experience">Work experience</a></li>
						 <li>
						    <span class="note"><input type="text" name="work_duration1" class="form-control" id="work_duration1"  placeholder="Duration" required/></span> <strong><input type="text" name="organization1" class="form-control" id=  "organization1" placeholder="Organization" required/></strong>
                            <strong> <input type="text" name="your_post1" class="form-control" id="your_post1" placeholder="Post Name" required/></strong> 					
						    <input type="text" name="job_place1" class="form-control" id="job_place1" placeholder="Where you are working- City, Country" required/>
                            <textarea name="job_description1" class="form-control" id="job_description1" rows="3" placeholder="Job Description" required></textarea>
						</li>	
						<li>
						    <span class="note"><input type="text" name="work_duration2" class="form-control" id="work_duration2"  placeholder="Duration" required/></span> <strong><input type="text" name="organization2" class="form-control" id=  "organization2" placeholder="Organization" required/></strong>
                            <strong> <input type="text" name="your_post2" class="form-control" id="your_post2" placeholder="Post Name" required/></strong> 					
						    <input type="text" name="job_place2" class="form-control" id="job_place2" placeholder="Where you are working- City, Country" required/>
                            <textarea name="job_description2" class="form-control" id="job_description2" rows="3" placeholder="Job Description" required></textarea>
						</li>	
				     	</div>
				    	  </div>       
                </ul>
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
						    <span class="note"><input type="text" name="edu_duration1" class="form-control" id="edu_duration1"  placeholder="Duration" required/></span> 
						    <strong><input type="text" name="institute1" class="form-control" id=  "institute1" placeholder="institute" required/></strong>
                            <strong><input type="text" name="degree1" class="form-control" id="degree1" placeholder="Degree Name" required/></strong> 					
						    <input type="text" name="edu_place1" class="form-control" id="edu_place1" placeholder="Where you are Studing- City, Country" required/>
                            <textarea name="edu_description1" class="form-control" id="edu_description1" rows="3" placeholder="Description" required></textarea>
						</li>
						<li>
						    <span class="note"><input type="text" name="edu_duration2" class="form-control" id="edu_duration2"  placeholder="Duration" required/></span> 
						    <strong><input type="text" name="institute2" class="form-control" id=  "institute2" placeholder="institute" required/></strong>
                            <strong> <input type="text" name="degree2" class="form-control" id="degree2" placeholder="Degree Name" required/></strong> 					
						    <input type="text" name="edu_place2" class="form-control" id="edu_place2" placeholder="Where you are Studing- City, Country" required/>
                            <textarea name="edu_description2" class="form-control" id="edu_description2" rows="3" placeholder="Description" required></textarea>
						</li>	
				     	</div>
				    	  </div>       
                </ul>
            </div>
</section>
<!-- end Education -->
    
<!-- Professional skills -->
<section id="professional-skills" class="professional-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
				
                    <li class="title"><span class="glyphicon">
					   <span class="item" aria-label="graph-trend"><i class="fi-graph-trend"></i></span>
					</span><a name="Professional skills">Professional skills</a></li>					
					<li>	
						<span class="note"><input type="text" name="proskill1" class="form-control" id="proskill1" placeholder="Skill name" required/></span>
						<span class="annotation pull-right"><input type="number" name="psv1" id="psv1" class="form-control" onchange="val1(this.value)" value="90" min="1" max="100" required></span>
                        <div class="progress">
						<script>
						function val1(x1){
						document.getElementById("pr1").style.width= x1+"%";
						}
						</script>
                            <div class="progress-bar progress-bar-success" id="pr1" name="pr1" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>	
                        </div>
					</li>
					<li>	
						<span class="note"><input type="text" name="proskill2" class="form-control" id="proskill2" placeholder="Skill name" required/></span>
						<span class="annotation pull-right"><input type="number" name="psv2" id="psv2" class="form-control" onchange="val2(this.value);" value="85" min="1" max="100" required></span>
                        <div class="progress">
						<script>
						function val2(x2){
						document.getElementById("pr2").style.width= x2+"%";
						}
						</script>
                            <div class="progress-bar progress-bar-success" id="pr2" name="pr2" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>	
                        </div>
					</li>
					<li>	
						<span class="note"><input type="text" name="proskill3" class="form-control" id="proskill3" placeholder="Skill name" required/></span>
						<span class="annotation pull-right"><input type="number" name="psv3" id="psv3" class="form-control" onchange="val3(this.value);" value="70" min="1" max="100" required></span></p>
                        <div class="progress">
						<script>
						function val3(x3){
						document.getElementById("pr3").style.width= x3+"%";
						}
						</script>
                            <div class="progress-bar progress-bar-success" id="pr3" name="pr3" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>	
                        </div>
					</li>
                   </div>
				   </div>	
                </ul>
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
						<span class="note"><input type="text" name="pskill1" class="form-control" id="pskill1" placeholder="Personal-Skill name" required/></span>
						<span class="annotation pull-right"><input type="number" name="persv1" id="persv1" onchange="va1(this.value);" class="form-control" value="90" min="1" max="100" required></span>
						<script>
						function va1(y1){
						document.getElementById("prr1").style.width= y1+"%";
						}
						</script>
                        <div class="progress">
                            <div class="progress-bar progress-bar-personal-skill-success" id="prr1" name="prr1" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                    </li>
					<li>	
						<span class="note"><input type="text" name="pskill2" class="form-control" id="pskill2" placeholder="Personal-Skill name" required/></span>
						<span class="annotation pull-right"><input type="number" name="persv2" id="persv2" onchange="va2(this.value);" class="form-control" value="80" min="1" max="100" required></span>
						<script>
						function va2(y2){
						document.getElementById("prr2").style.width= y2+"%";
						}
						</script>
                        <div class="progress">
                            <div class="progress-bar progress-bar-personal-skill-success" id="prr2" name="prr2" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                    </li>
					<li>	
						<span class="note"><input type="text" name="pskill3" class="form-control" id="pskill3" placeholder="Personal-Skill name" required/></span>
						<span class="annotation pull-right"><input type="number" name="persv3" id="persv3" onchange="va3(this.value);" class="form-control" value="60" min="1" max="100" required></span>
						<script>
						function va3(y3){
						document.getElementById("prr3").style.width= y3+"%";
						}
						</script>
                        <div class="progress">
                            <div class="progress-bar progress-bar-personal-skill-success" id="prr3" name="prr3" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                        </div>
                    </li>
					</div>
					</div>
                </ul>
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
                        <p><strong><span class="note"><input type="text"  name="int_name1" class="form-control" id="int_name1"  placeholder="Interest-Area" required/></span></strong></p>
                        <p class="description"><textarea name="int_description1" class="form-control" id="int_description1" rows="3" placeholder="Description" required></textarea></p>
                    </li>
					<li>
                        <p><strong><span class="note"><input type="text"  name="int_name2" class="form-control" id="int_name2"  placeholder="Interest-Area" required/></span></strong></p>
                        <p class="description"><textarea name="int_description2" class="form-control" id="int_description2" rows="3" placeholder="Description" required></textarea></p>
                    </li>
					<li>
                        <p><strong><span class="note"><input type="text"  name="int_name3" class="form-control" id="int_name3"  placeholder="Interest-Area" required/></span></strong></p>
                        <p class="description"><textarea name="int_description3" class="form-control" id="int_description3" rows="3" placeholder="Description" required></textarea></p>
                    </li>
					</div>
					</div>
                </ul>
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
                        <p><strong><input type="text" name="address1" class="form-control" id="address1" placeholder="Address part 1" required/></strong></p>
                        <p><strong><input type="text" name="address2" class="form-control" id="address2" placeholder="Address part 2" required/></strong></p>
									
                        <span class="note">Mobile</span>
                        <p><strong><input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="Enter your mobile-no" required/></strong></p>
                 
						<span class="note">Phone</span>
                        <p><strong><input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter your phone-no" required/></strong></p>
                    	
					   <span class="note">Email</span>
                        <p><strong><input type="email" name="email_id" class="form-control" id="email_id" placeholder="Enter your email-id" required/></strong></p>
                        <hr class="empty">
					</li>	
					 </ul>
					 <ul>	 <span class="item" aria-label="check"><li><center>
                            <button type="submit" class="btn btn-success">
			         		 <i class="fi-check"> 
							  submit</i>
							</button>
							</center></li></span>
							</ul>
            </div>
        </div>
    </div>	
</section>
<!-- end Contact -->

			
					<br/><br/>
						
</form>
</body></html>