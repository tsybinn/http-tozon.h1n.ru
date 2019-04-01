



<?php

 if (isset ($_POST)){
     echo "yes";

 }



?>

<!doctype html>
<html lang="en">
<head>


    <style>
  *{
      margin:0;
      padding:0;
  }
   form{
       width:23%;
       margin:0 35%;
        border: 1px solid black;
       background: paleturquoise;


   }
 .form-group{

     width:90%;
     margin:0 5%;
     height: :200px;

 }

        .form-control{
            width:70px;

        }

        .btn {
            width:90%;
            margin: 0 5%;

        }
        .error{
            color:blue;


        }

  .border{

      color:blue;

  }

  .input-medium {
      border-color: #E56717;
  }

    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>


<form method="POST" action="">
    <div class="form-group">
        <label for="login"></label>
        <input type="email" class="form-control border border-danger " name="login" aria-describedby="emailHelp" placeholder="login">
        <small name="emailHelp" class="form-text text-muted "</small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1"></label>
        <input type="email" class="form-control" name="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small name="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" class="form-control  error" name="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1"></label>
        <input type="password" class="form-control error" name="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            to register</button>
    </div>





</form>














<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



