
                         function toggleint()
						{
						
						var x = <?php echo $_POST["no-of-int"]; ?>;
						var i,html;
							 html='';								
							
							     for(i=1;i<=x;i++){
									html +='<li><p><strong><span class="note"><?php echo $_POST["int-name"]; ?></span></strong></p><p class="description"><?php echo $_POST["int-description"]; ?></p></li>';}
								 document.getElementById("int-multiply").innerHTML=html;
								 document.getElementById('numint').style.display='block';
                           }

						function togglewk()
						{
						var x = <?php echo $_POST["no-of-jobs"]; ?>;
						var i,html;
							 html='';								
							
							  if(x>0)
								{
							     for(i=1;i<=x;i++){
									html +='<li><div id="numjob"> <span class="note"><?php echo $_POST["work-duration"]; ?></span> <strong><?php echo $_POST["organization"]; ?></strong><strong><?php echo $_POST["your-post"]; ?></strong><?php echo $_POST["job-place"]; ?><?php echo $_POST["job-description"]; ?></div></li>';}
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
						
						var x = <?php echo $_POST["no-of-education"]; ?>;
						var i,html;
							 html='';								
							
							     for(i=1;i<=x;i++){
									html +='<li><div id="numjob"><span class="note"><?php echo $_POST["edu-duration"]; ?></span> <strong><?php echo $_POST["institute"]; ?></strong> <strong> <?php echo $_POST["degree"]; ?></strong><?php echo $_POST["edu-place"]; ?><?php echo $_POST["edu-description"]; ?></div></li>';}
								 document.getElementById("edu-multiply").innerHTML=html;
								 document.getElementById('numedu').style.display='block';
                           }
					

						
                        