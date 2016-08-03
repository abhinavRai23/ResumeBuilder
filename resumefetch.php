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
   $id=17;
echo $id;

$result = mysql_query("select * FROM profile where id='$id'");
$row = mysql_fetch_array($result);
  $username=$row['username'];
  echo  $username;
  $name=$row['name'];
//$password=$row['password']  ;
//$profession=$row['profession'];
/*$dob=  $row['dob'];
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
  */

?>