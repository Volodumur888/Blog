<?php
session_start();
require_once "./views/header.php";
require_once "./views/footer.php";
/*
if(isset($_POST["submitForm2"])){
	$pass = $_POST["password"];
	$pass2 = $_POST["password2"];
	if($pass === $pass2){
		echo "Corect password!    ";
    }
    else{
	    echo "Please, enter corect pasword!    ";
    }
*/
?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Admin panel</h1>
            <form method="POST" action="admin.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control"  name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password2</label>
                    <input type="password" class="form-control"  name="password2" placeholder="Password2">
                </div>
                <button type="submit" class="btn btn-primary" name="submitForm2">Craete</button>
            </form>
        </div>
    </div>
</div>