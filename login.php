<?php
if(isset($_SESSION['korisnik']))
header("location: 403.php");
?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Login</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">

	<div class="container">

	<div class="row">
								<div class="col-md-9">
									<p> </p>

          <form action="index.php?page=login" name="sentMessage" id="contactForm" method="post">
		 <div class="input-field">
			<input type="text" name="email" class="form-control"
			   	   id="username"
			         />
					   <label for="email" class=""> Username </label>
			  <p class="help-block"></p>

	         </div>


      <div class="input-field">
 			<input type="password" name="password" class="form-control"
 			   	   id="password"
 			            />
 					   <label for="password" class=""> Password </label>
 			  <p class="help-block"></p>

 	         </div>

	     <div id="success"> </div> <!-- For success/fail messages -->
	   <input type="submit" class="btn btn-primary waves-effect waves-dark" name="posalji" value="Login">

          </form>
					<p>Don't have an account?</p>
					<a href="index.php?page=register" class="btn btn-primary waves-effect waves-dark">Register</a>
        </div>
		</div>
	</div>
  <?php

  if(isset($_SESSION['korisnik'])){
    echo $_SESSION["korisnik"]->email;
  }else {
    if (isset($_SESSION["greske"])) {
      echo $_SESSION["greske"];
      unset($_SESSION["greske"]);
    }
  }
   ?>
    <?php
    if(isset($_POST['posalji'])){
      $email = $_POST['email'];
      $password = $_POST['password'];
      $stmt="SELECT username,name,lastname,email,phone,is_admin FROM korisnik WHERE email=:email AND password=:password";

    $priprema = $conn->prepare($stmt);
    // echo `$priprema`;

    try {

      $priprema->bindParam(":email",$email);
      $priprema->bindParam(":password",$password);

      $priprema->execute();
      if($priprema->rowCount() == 1){
       $korisnik = $priprema->fetch();
       $_SESSION['korisnik'] = $korisnik;

       // if($korisnik->nazivUloge == 'korisnik'){
       // $_SESSION['korisnik'] = $korisnik;
       // }
       // else if($korisnik->nazivUloge == 'admin'){
       // $_SESSION['admin'] = $korisnik;
       // }
       header("Location: index.php");
     }else{
       $_SESSION['greske'] = "Username or password is not correct.";
    header("Location: index.php?page=login");

     }
    } catch(PDOException $e) {
      echo $e;
    }

    }

     ?>
	</section>
