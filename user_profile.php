<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>User Profile</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="./css/demo.css" />
    
	    <link rel="stylesheet" href="./css/style2.css">
</head>
<body>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="./index.php" title="Back to tutorial page">Back to Home</a></li>
                <li><a href="./login.html" title="Back to tutorial page">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1>User Profile Page</h1>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Student Profile -->
<?php
    require 'upload/db_conn.php';
    $id = $_GET['id'];
    $query = "Select * from details where id='$id'";
    $query_run = mysqli_query($conn, $query);
    $check_image = mysqli_num_rows($query_run)>0;

    if($check_image)
    {
      while($row = mysqli_fetch_assoc($query_run))
      {
      ?>
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="./image/cat_1.jpg" alt="student dp">
            <h3><?php echo $row['name']?></h3>
          </div>
          <!-- <div class="card-body">
            <p class="mb-0"><strong class="pr-1">User ID:</strong>1</p>
            <p class="mb-0"><strong class="pr-1">Number:</strong>9876543210</p>
            <p class="mb-0"><strong class="pr-1">Mail Id:</strong>abc@example.com</p>
          </div> -->
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%">User ID</th>
                <td width="2%">:</td>
                <td><?php echo $row['id']?></td>
              </tr>
              <tr>
                <th width="30%">Number</th>
                <td width="2%">:</td>
                <td><?php echo $row['mobile']?></td>
              </tr>
              <tr>
                <th width="30%">Mail Id:</th>
                <td width="2%">:</td>
                <td><?php echo $row['mailid']?></td>
              </tr>
              <!-- <tr>
                <th width="30%">Religion</th>
                <td width="2%">:</td>
                <td>Group</td>
              </tr>
              <tr>
                <th width="30%">blood</th>
                <td width="2%">:</td>
                <td>B+</td>
              </tr> -->
            </table>
          </div>
        </div>
          <!-- <div style="height: 26px"></div>
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<?php
      }
    }
    ?>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>