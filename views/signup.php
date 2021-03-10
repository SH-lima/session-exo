<?php 
require "./config/verification.php" ;
 ?> 
 
<div class="login main-page center">
    <form class="login-form" method="POST" >
      
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username </label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="newUser" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your informations with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" name="Newpassword" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirmation Password</label>
            <input type="password" class="form-control" name="Confirmpassword"  id="exampleInputPassword2">
            <div class="form-text" style="color:red;"><?php
            if (isset($error )){
                echo $error;
            }
            ?></div>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary btn-login">Submit</button>
    </form>
</div>

 