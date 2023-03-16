<?php 
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
?>
    <!DOCTYPE html>
<html>
<head>
    <title>profile page</title>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet"
        href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="login-registration.js"></script>
  <style type="text/css">
    .error {
        color: red !important;
    }
</style>
</head>
<body>
<div class="container-fluid">
    <div>

        <a href="logout.php"><input type="button" class="btn-logout"
            value="Logout"></a>

    </div>
    <br>   
     
    <form id="login-form" action="" method="post" role="form">
        <div class="row">
            <div class="col-md-6">
                <label>DOB</label>
                <input type="date" name="dob" id = "dob" class="form-control input-field">
                <span id="dob-info"></span> 
            </div>
            <div class="col-md-6">
                <label>Address</label>
                <input type="text" name="address" id= "address" class="form-control input-field" placeholder="Address">
                <span id="address-info"></span> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
                <span id="gender-info"></span> 
               
            </div>
            <div class="col-md-6">
                <label>Instagram Account URl</label>
                <input type="text" name="instagram" id="instagram" class="form-control input-field" placeholder="Instagram Account Url">
                <span id="instagram-info"></span> 
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label>Bio</label>
               <textarea id="bio" name="bio" rows="4" class="form-control" > </textarea>
                 <span id="bio-info"></span> 
            </div>
        </div>
    </br>
        <input type="button" class="btn-submit" value="update profile"
            onclick="ajaxprofileupdate()">
    </form>
    <div class="success-message" id="profile-success-message"
        style="display: none">Profile saved successfully</div>
    <div class="error-message" id="profile-error-message"
        style="display: none"></div>
    </div>
    <div class="thank-you-profile">
    </div>

</body>
</html>
<?php
   
}else{
    header('location: index.php');
}
?>
