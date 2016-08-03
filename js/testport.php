<html>
<head>
<script>
function toggleps()
						{
						
						var x = document.getElementById("no-of-pskill").value;
						var i,html;
							 html='';								
							
							     for(i=1;i<=x;i++){
									html +='<li><span class="note"><input type="text" name="proskill" class="form-control" id="proskill" placeholder="Skill name" required/></span><span class="annotation pull-right"><input type="number" name="psv'+i+'" id="psv'+i+'" class="form-control" value="50" min="1" max="100" onchange="val'+i+'(this.value);" required /></span></p><div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" id="pr'+i+'" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div></div></li>';}
								 document.getElementById("sk-multiply").innerHTML=html;
								 document.getElementById('numpsk').style.display='block';}
function toggleps()
						{
						
						var x = <?php echo $_POST["no-of-pskill"]; ?>;
						var i,html;
							 html='';								
							
							     for(i=1;i<=x;i++){
									html +='<li><span class="note"> <?php echo $_POST["proskill"]; ?></span><span class="annotation pull-right"> <?php echo $_POST["psv"]; ?></span></p><div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $_POST["psv"]; ?>%;"></div></div></li>';}
								 document.getElementById("sk-multiply").innerHTML=html;
								 document.getElementById('numpsk').style.display='block';
                           }  			


</script>
<style>
	<link rel="stylesheet" media="all" href="css/bootstrap.css" type="text/css">
<link rel="stylesheet" media="all" href="css/formcss.css" type="text/css">
<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">

</style>
</head>
<body>
<!-- Professional skills -->
<section id="professional-skills" class="professional-skills">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-sm-offset-5">
                <ul>
				
                       <li class="title"><span class="glyphicon">
					   <span class="item" aria-label="graph-trend"><i class="fi-graph-trend"></i></span>
					</span><a name="Professional skills">Professional skills</a></li>	
                        <p><span class="note"><input type="number" name="no-of-pskill" class="form-control" id="no-of-pskill" value="1" min="1" max="10" required onchange="toggleps()"/></span>Enter no of Profession Skills</br>
					<div id="numpsk">
                    <div id="sk-multiply">					
					<li>	
						<span class="note"><input type="text" name="proskill" class="form-control" id="proskill" placeholder="Skill name" required/></span>
						<span class="annotation pull-right"><input type="number" name="psv1" id="psv1" class="form-control" onchange="val1(this.value);" value="50" min="1" max="100" required></span></p>
                        <div class="progress">
                        <div class="progress-bar progress-bar-success" id="pr1" name="pr1" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
						<script>
						function val1(x1){
                    
						document.getElementById("pr1").style.width= x1+"%";
						}
						</script>
                            </div>	
                        </div>
					</li>
                   </div>
				   </div>	
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end Professional skills -->
</body>
</html>