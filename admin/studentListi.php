<?php
require('includes/authentication.php');
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
include('includes/dbh.inc.php');

?>

<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"> Students List</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php
          if (isset($_SESSION['status'])) {
            echo "<h5 class='text-success'>" . $_SESSION['status'] . "</h5>";
            unset($_SESSION['status']);
          }
          ?>






          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-9">
                <!-- <input class=" form-control" id="myInput" type="text" placeholder="Search.."> -->
              </div>
              <div class="col-md-3">
                <input class=" form-control" id="myInput" type="text" placeholder="Search.." style="border:solid 1px blue;">
              </div>
            </div>
            <div>
              <table id="mytable" class="table table-bordered table-striped display nowrap">
                <thead>
                  <tr>
                    <th>S.L</th>
                    <th>ID</th>
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>DOB</th>
                    <th>Class</th>
                    <th>Parent Name</th>
                    <th>Parent Contact</th>
                    <th>Picture</th>




                    <!-- <th>Email</th>
                  <th>Gender</th>
                  <th>Class</th>
                  <th>Parent Name</th>
                  <th>Parent Mobile</th>
                  <th>Action</th> -->

                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql = "SELECT * FROM student JOIN parent JOIN class ON student.parentID=parent.pId AND student.ClassId=class.cId ";
                  $query = mysqli_query($conn, $sql);
                  $checkrows = mysqli_num_rows($query);
                  $i = 0;

                  while ($row = mysqli_fetch_assoc($query)) {
                    $sl = ++$i;
                    $stuid = $row['StuRegNo'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $dob = $row['DOB'];

                    $gender = $row['Gender'];
                    $class = $row['cName'];
                    $pname = $row['pName'];
                    $pcontact = $row['pContact'];
                    $email = $row['Email'];
                    $stuImage = $row['ProfileImage'];

                    echo "

				<tr>
				<td >$sl</td>
				<td >$stuid</td>
				<td >$fname</td>
				<td >$lname</td>
				<td > $dob</td>
		
        <td >$class</td>
				<td > $pname</td>
        	<td > $pcontact</td>
          		<td > 
               <img src='code/uploadsStudent/$stuImage'  style='width:50px; height:50px; border-radius:50%;' class='userPicture'; >
              </td>
			
    
           
           
    

        
			
				
			</tr>


        		";
                  }








                  ?>






                </tbody>

              </table>
            </div>

          </div>

        </div>
      </div>
    </div>
</div>
</section>
</div>









<?php

require('includes/script.php');
?>




<?php include('includes/footer.php'); ?>