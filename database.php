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
//require 'resumeget.php';
error_reporting(0);
if(isset($_POST['username'])&&isset($_POST['name'])&& isset($_POST['birth_city']) )
//  &&
// isset($_POST['password'])  &&
// isset(isset($_POST['profession'])&&
//   isset($_POST['dob'])&&

//  isset($_POST['birth_country']) &&
//  isset( $_POST['profile_link'])  &&
//  isset($_POST['work_duration1']) &&

//  isset( $_POST['organisation1'] ) &&
//   isset($_POST['job_place1'] ) &&
//   isset($_POST['job_description1'])&&
//   isset($_POST['work_duration2'] ) &&
//   isset($_POST['organization2']) &&
//   isset($_POST['job_place2'])  &&
//   isset($_POST['job_place1'])  &&

//   isset($_POST['job_description2'])  &&
//   isset($_POST['your_post2'] ) &&
//     isset($_POST['edu_duration1'] )&&
//     isset($_POST['institute1'])  &&
//     isset($_POST['degree1'])  &&
//     isset($_POST['edu_place1'])  &&
//     isset($_POST['edu_description1']) &&
//     isset($_POST['institute2']) &&
//     isset($_POST['degree2'])  &&
//     isset($_POST['edu_description2']) &&
//     isset($_POST['edu_place2'] ) &&
//     isset($_POST['proskill1'])  &&
//     isset($_POST['psv1'])&&
//     isset($_POST['proskill2'])  &&
//     isset($_POST['psv2']) &&
//     isset($_POST['proskill3'])  &&
//     isset($_POST['psv3'])  &&
//     isset($_POST['pskill1']) &&
//    isset($_POST['persv1']) &&
//    isset($_POST['pskill2']) &&
//    isset($_POST['persv2']) &&
//    isset($_POST['pskill3'])  &&
//    isset($_POST['persv3'] ) &&
//    isset($_POST['int_name1']) &&
//    isset($_POST['int_description1']) &&
//    isset($_POST['int_name2'] )&&
//    isset($_POST['int_description2']) &&
//    isset($_POST['int_name3']) &&
//    isset($_POST['int_description3'] )&&
//    isset($_POST['address1'])  &&
//    isset($_POST['address2'])  &&
//    isset($_POST['mobile_no'] )&&
//    isset($_POST['phone_no'] )&&
//    isset($_POST['email_id']))
{  
  $username=$_POST['username'];
  //echo  $username;
  $name=$_POST['name'];
//$password=$_POST['password']  ;
$profession=$_POST['profession'];
$dob=  $_POST['dob'];
$birth_city=$_POST['birth_city'] ;
$birth_country= $_POST['birth_country'] ;
$profile_link=  $_POST['profile_link']  ;
$work_duration1= $_POST['work_duration1'] ;
$organization1=  $_POST['organization1']  ;
$job_place1=  $_POST['job_place1']  ;
$job_description1=  $_POST['job_description1'];
 $work_duration2= $_POST['work_duration2']  ;
$organization2=  $_POST['organization2'] ;
$job_place1=  $_POST['job_place1'];
$job_place2=  $_POST['job_place2']  ;
 $job_description2=$_POST['job_description2']  ;
 $your_post2= $_POST['your_post2']  ;
 $edu_duration1 =$_POST['edu_duration1'] ;
 $institute1= $_POST['institute1']  ;
 $degree1= $_POST['degree1']  ;
 $edu_place1= $_POST['edu_place1']  ;
$edu_description1=  $_POST['edu_description1'] ;
$institute2=  $_POST['institute2'] ;
 $degree2= $_POST['degree2']  ;
 $edu_description2= $_POST['edu_description2'] ;
 $edu_place2= $_POST['edu_place2']  ;
$proskill1=  $_POST['proskill1']  ;
$psv1=  $_POST['psv1'];
$proskill2=  $_POST['proskill2'];
 $psv2=$_POST['psv2'] ;
 $proskill3= $_POST['proskill3']  ;
 $psv3= $_POST['psv3']  ;
 $pskill1= $_POST['pskill1'] ;
 $persv1= $_POST['persv1'] ;
 $pskill2= $_POST['pskill2'] ;
 $persv2= $_POST['persv2'] ;
 $pskill3= $_POST['pskill3']  ;
 $persv3= $_POST['persv3']  ;
 $int_name1= $_POST['int_name1'] ;
 $int_description1= $_POST['int_description1'] ;
 $int_name2=$_POST['int_name2'] ;
 $int_description2=$_POST['int_description2'] ;
 $int_name3= $_POST['int_name3'] ;
 $int_description3= $_POST['int_description3'] ;
 $address1= $_POST['address1']  ;
 $address2= $_POST['address2']  ;
 $mobile_no= $_POST['mobile_no'] ;
 $phone_no= $_POST['phone_no'] ;
 $email_id= $_POST['email_id'] ;
  
}
//enetr the password
$queryy="INSERT INTO profile (username,name,profession,dob,birth_city,birth_country,profile_link,work_duration1,organization1,job_place1,job_description1,work_duration2,organization2,job_place2,job_description2,your_post2,edu_duration1,institute1,degree1,edu_place1,edu_description1,institute2,degree2,edu_description2,edu_place2,proskill1,psv1,proskill2,psv2,proskill3,psv3,pskill1,persv1,pskill2,persv2,pskill3,persv3,int_name1,int_description1,int_name2,int_description2,int_name3,int_description3,address1,address2,mobile_no,phone_no,email_id) 
                      VALUES('$username','$name','$profession','$dob','$birth_city''$birth_city','$birth_country','$profile_link','$work_duration1','$organization1','$job_place1','$job_description1','$work_duration2','$organization2','$job_place2','$job_description2','$your_post2','$edu_duration1','$institute1','$degree1','$edu_place1','$edu_description1','$institute2','$degree2','$edu_description2','$edu_place2','$proskill1','$psv1','$proskill2','$psv2','$proskill3','$psv3','$pskill1','$persv1','$pskill2','$persv2','$pskill3','$persv3','$int_name1','$int_description1','$int_name2','$int_description2','$int_name3','$int_description3','$address1','$address2','$mobile_no','$phone_no','$email_id')";
$queryy_run=mysql_query($queryy);

header("Location:resumeget.php");
?>