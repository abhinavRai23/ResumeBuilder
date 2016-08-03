                         function toggleint()
						{
						
						var x = document.getElementById("no-of-int").value;
						var i,html;
							 html='';								
							
							     for(i=1;i<=x;i++){
									html +='<li><p><strong><span class="note"><input type="text" name="int-name" class="form-control" id="int-name"  placeholder="Interest-Area" required/></span></strong></p><p class="description"><textarea name="int-description" class="form-control" id="int-description" rows="3" placeholder="Description"></textarea></p></li>';}
								 document.getElementById("int-multiply").innerHTML=html;
								 document.getElementById('numint').style.display='block';
                           }
						   
							
						
						function togglewk()
						{
						
						var x = document.getElementById("no-of-jobs").value;
						var i,html;
							 html='';								
							
							  if(x>0)
								{
							     for(i=1;i<=x;i++){
									html +='<li><div id="numjob"> <span class="note"><input type="text" name="work-duration" class="form-control" id="work-duration"  placeholder="Duration" required/></span> <strong><input type="text" name="organization" class="form-control" id=  "organization" placeholder="Organization" required/></strong><strong> <input type="text" name="your-post" class="form-control" id="your-post" placeholder="Post Name" required/></strong><input type="text" name="job-place" class="form-control" id="job-place" placeholder="Where you are working- City, Country" required/><textarea name="job-description" class="form-control" id="job-description" rows="3" placeholder="Job Description"></textarea></div></li>';}
								 document.getElementById("job-multiply").innerHTML=html;
								 document.getElementById('numjob').style.display='block';
                                }
                              else
                                {
                                 document.getElementById('numjob').style.display='none';
                                }
                           }
						   

						function toggleedu()
						{
						
						var x = document.getElementById("no-of-education").value;
						var i,html;
							 html='';								
							
							     for(i=1;i<=x;i++){
									html +='<li><div id="numjob"><span class="note"><input type="text" name="edu-duration" class="form-control" id="edu-duration"  placeholder="Duration" required/></span> <strong><input type="text" name="institute" class="form-control" id=  "institute" placeholder="institute" required/></strong> <strong> <input type="text" name="degree" class="form-control" id="degree" placeholder="Degree Name" required/></strong><input type="text" name="edu-place" class="form-control" id="edu-place" placeholder="Where you are Studing- City, Country" required/><textarea name="edu-description" class="form-control" id="edu-description" rows="3" placeholder="Description"></textarea></div></li>';}
								 document.getElementById("edu-multiply").innerHTML=html;
								 document.getElementById('numedu').style.display='block';
                           }
					

						function toggleps()
						{
						
						var x = document.getElementById("no-of-pskill").value;
						var i,html;
							 html='';								
							
							     for(i=1;i<=x;i++){
									html +='<li><span class="note"><input type="text" name="proskill" class="form-control" id="proskill" placeholder="Skill name" required/></span><span class="annotation pull-right"><input type="number" name="psv'+i+'" id="psv'+i+'" class="form-control" value="50" min="1" max="100" onchange="val'+i+'(this.value);" required /></span></p><div class="progress"><div class="progress-bar progress-bar-success" role="progressbar" id="pr'+i+'" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div></div></li>';}
								 document.getElementById("sk-multiply").innerHTML=html;
								 document.getElementById('numpsk').style.display='block';

                           }  			
                           

                        
                         <script>    
                            