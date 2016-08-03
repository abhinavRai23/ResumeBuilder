 <?php

session_start();


$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = '';

$dbconnect = mysql_connect($dbhost, $dbuser, $dbpassword) or die("gg");
$dbselect = mysql_select_db('resume');

error_reporting(0);
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Image Path Into SQL Database</title>
</head>

<body>

<?php

//getting the filename of the image file.
$filename = $_FILES["image"]["name"];

//directory name to be stored.
$path = "C:/xampp/htdocs/portt/images";

//uploading the image file with the image file name into the directory.
    if(move_uploaded_file($_FILES["image"]["tmp_name"],$path."/".$filename)) {

//if the image is stored success into the directory then we are going to store into database.

//sql query to be executed.
        $sql = "INSERT INTO profile(filename) VALUES ('$filename')";

//executing the query.
        if(mysql_query($sql)) {

            echo 'file inserted';

        }

        else {

            echo 'Go to hell';

        }

    }

    else {

        echo 'file not uploaded';

    }

?>

<form method="POST" enctype="multipart/form-data">
      File:
      <input type="file" name="image"> <input type="submit" value="Upload" />
</form>
<form method="POST">
    <br>Enter id:<input type="text" name="id">
    <input type="submit" value="get">
</form>
<?php
if(isset($_POST['id'])){
    echo $x=$_POST['id'];
    if(!empty($x)){
$query = "SELECT filename FROM profile WHERE id='$x' ";
 $result = mysql_query($query);
 while($row = mysql_fetch_array($result)){
$show ='images/'.$row['filename'];  
  echo '<img src="'.$show.'" width="200px" >'; }}}?>
  </body>
</html>