<?php
session_start();

include('../includes/dbconn.php');
// if (strlen($_SESSION['alogin']) == 0) {
//     header('location:index.php');
// } else {
if (isset($_POST['add'])) {
    $stdid = $_POST['stdcode'];
    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $house = $_POST['house'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $region = $_POST['region'];
    $mobileno = $_POST['mobileno'];
    $status = 1;

    $stuImage = $_FILES['stuImage'];
    $fileName = $_FILES['stuImage']['name'];
    $fileTmpName = $_FILES['stuImage']['tmp_name'];
    $fileSize = $_FILES['stuImage']['size'];
    $fileError = $_FILES['stuImage']['error'];
    $fileType = $_FILES['stuImage']['type'];


    // $target_dir = "uploads/";
    // $name = basename($_FILES["fileToUpload"]["name"]);
    // $size = $_FILES["fileToUpload"]["size"];
    // $type = $_FILES["fileToUpload"]["type"];
    // $tmpname = $_FILES["fileToUpload"]["tmp_name"];

    // $max = 31457280;
    // $extention = strtolower(substr($name, strpos($name, ".")+ 1));
    // $filename = date("Ymjhis");

    // $msg=0;//for alerts
    // $g_msg=0;//for alerts
    // $image_path =  $target_dir.$filename.".".$extention;
    // $g_image_path =  $target_dir.$filename1.".".$extention1;





    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg', 'jpeg', 'png');






    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {


            $stuImageNameNew = uniqid('', true) . "." . $fileActualExt;
            $fileDestination = 'uploadsStudent/' . $stuImageNameNew;
            $fileDestination = 'uploads/' . $stuImageNameNew;
            move_uploaded_file($fileTmpName, $fileDestination);
        } else {
            echo 'There was an error';
        }
    } else {
        echo 'You cannot upload file of this type';
    }






    /*
if(($extention == "jpg" || $extention == "jpeg" || $extention == "png") && $size < $max){//This line is not needed, bcz we checked it before.
            if(move_uploaded_file($tmpname, $image_path)){  }            
                //MSK-000143-5  


*/























    $sql = "INSERT INTO tblstudents(StdId,FirstName,LastName,EmailId,Password,Gender,Dob,House,Address,City,Region,Phonenumber,Status,StudentImage) VALUES(:stdid,:fname,:lname,:email,:password,:gender,:dob,:house,:address,:city,:region,:mobileno,:status,:studentImage)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':stdid', $stdid, PDO::PARAM_STR);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':lname', $lname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':gender', $gender, PDO::PARAM_STR);
    $query->bindParam(':dob', $dob, PDO::PARAM_STR);
    $query->bindParam(':house', $house, PDO::PARAM_STR);
    $query->bindParam(':address', $address, PDO::PARAM_STR);
    $query->bindParam(':city', $city, PDO::PARAM_STR);
    $query->bindParam(':region', $region, PDO::PARAM_STR);
    $query->bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
    $query->bindParam(':status', $status, PDO::PARAM_STR);
    $query->bindParam(':studentImage', $stuImageNameNew, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $msg = "Record has been added Successfully";
    } else {
        $error = "ERROR";
    }
}
