<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image in PHP MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">

                    <?php
                        if(isset($_SESSION['message']))
                        {
                            echo '<h4 class="alert alert-warning">'.$_SESSION['message'].'</h4>';
                            unset($_SESSION['message']);
                        }
                    ?>

                    <div class="card-header">
                        <h4>Upload Pet</h4>
                    </div>
                    <div class="card-body">

                        <form action="fetchimage.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                                <label>Pet Id:</label>
                                <input type="text" name="pet_id" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Pet Name:</label>
                                <input type="text" name="pet_name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Owner Name:</label>
                                <input type="text" name="owner_name" class="form-control">
                            </div> 
                            <div class="mb-3">
                                <label>Contact number:</label>
                                <input type="text" name="contact_no" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Upload Image Of Your Pet</label>
                                <input type="file" name="image_profile" required class="form-control">
                            </div>
                            <div class="mb-3">
                                <hr/>
                                <button type="submit" name="upload_save_btn" class="btn btn-primary">Upload</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
