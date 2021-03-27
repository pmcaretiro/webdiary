<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Account Settings</title>
  </head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

body {
    font-family: 'Poppins', sans-serif;

}

.wrapper {
    padding: 30px 50px;
    border: 1px solid #ddd;
    border-radius: 15px;
    margin: 10px auto;
    max-width: 600px
}

h4 {
    letter-spacing: -1px;
    font-weight: 400
}

.img {
    width: 70px;
    height: 70px;
    border-radius: 6px;
    object-fit: cover
}

#img-section p,
#deactivate p {
    font-size: 12px;
    color: #777;
    margin-bottom: 10px;
    text-align: justify
}

#img-section b,
#img-section button,
#deactivate b {
    font-size: 14px
}

label {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 500;
 	color: #ff9aa2;"    
 	padding-left: 3px
}

.form-control {
    border-radius: 10px
}

input[placeholder] {
    font-weight: 500
}

.form-control:focus {
    box-shadow: none;
    border: 1.5px solid #0779e4
}


.btn{
    background-color: #ff9aa2
}

.btn:hover {
    background-color: #343a40;
    color: #ff9aa2;
}
.danger {
    background-color: #fff;
    color: #e20404;
    border: 1px solid #ddd
}

.danger:hover {
    background-color: #e20404
    color: #fff
}

@media(max-width:576px) {
    .wrapper {
        padding: 25px 20px
    }

    #deactivate {
        line-height: 18px
    }
}


</style>
<body>

<?php require "header.php" ?>
<div class="wrapper bg-dark mt-sm-5" >
    <h4 class="pb-4 border-bottom"  style="color: #ff9aa2;">Account settings</h4>
    <div class="d-flex align-items-start py-3 border-bottom"> <img src="https://images.pexels.com/photos/1037995/pexels-photo-1037995.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img" alt="">
        <div class="pl-sm-4 pl-2" id="img-section"> <b  style="color: #ff9aa2;">Profile Photo</b>
            <p>Accepted file type .png. Less than 1MB</p> <button class="btn button border"><b>Upload</b></button>
        </div>
    </div>
    <div class="py-2">
        <div class="row py-2">
            <div class="col-md-6"> <label for="firstname">First Name</label> <input type="text" class="bg-light form-control" value="" > </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname">Last Name</label> <input type="text" class="bg-light form-control" value="" > </div>
        </div>
        <div class="row py-2">
            <div class="col-md-6"> <label for="uname">User Name</label> <input type="text" class="bg-light form-control" value=""> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="email">Email Address</label> <input type="email" class="bg-light form-control" value=""> </div>
        </div>
          <div class="row py-2">
            <div class="col-md-6"> <label for="number">Phone Number</label> <input type="tel" class="bg-light form-control" value=""> </div>
            <div class="col-md-6 pt-md-0 pt-3"> <label for="password">Password</label> <input type="password" class="bg-light form-control" value=""> </div>
        </div>
       

        <div class="py-3 pb-4 border-bottom"> <button class="btn mr-3">Save Changes</button> <button class="btn border button">Cancel</button> </div>
        <div class="d-sm-flex align-items-center pt-3" id="deactivate">
            <div> <b style="color: #ff9aa2;">Delete your account</b>
                <p>Details about account and password</p>
            </div>
            <div class="ml-auto"> <button class="btn danger">Delete</button> </div>
        </div>
    </div>
</div>
</body>
</html>