
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Register</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">

	<div class="container">

	<div class="row">
								<div class="col-md-9">
									<p> </p>

          <form action="index.php?page=register" name="sentMessage" id="contactForm" method="post">
		 <div class="input-field">
			<input type="text" name="username" class="form-control"
			   	   id="username"
			         />
					   <label for="name" class=""> Username </label>
			  <p class="help-block"></p>

	         </div>
           <div class="input-field">
      			<input type="text" name="name" class="form-control"
      			   	   id="name"
      			           />
      					   <label for="name" class="">   Name </label>
      			  <p class="help-block"></p>

      	         </div>
                 <div class="input-field">
            			<input type="text" name="lname" class="form-control"
            			   	   id="lname"
            			            />
            					   <label for="name" class="">   Last Name </label>
            			  <p class="help-block"></p>

            	         </div>
                <div class="input-field">
			<input type="text" name="email" class="form-control" id="email"
			   		   />
					   <label for="name" class="">   Email </label>
	    </div>
      <div class="input-field">
 			<input type="password" name="password" class="form-control"
 			   	   id="password"
 			            />
 					   <label for="name" class=""> Password </label>
 			  <p class="help-block"></p>

 	         </div>
           <div class="input-field">
      			<input type="text" name="phone" class="form-control"
      			   	   id="phone"
      			           />
      					   <label for="name" class=""> Phone </label>
      			  <p class="help-block"></p>

      	         </div>
	     <div id="success"> </div> <!-- For success/fail messages -->
	   <input class="btn btn-primary waves-effect waves-dark" type="submit" name="submit" value="register">
          </form>
					<p>Have an account?</p>
					<a href="index.php?page=login" class="btn btn-primary waves-effect waves-dark">Login</a>
        </div>
        <?php

if(isset($_POST['submit'])){
	$username = $_POST['username'];
  $name = $_POST['name'];
  $lname = $_POST['lname'];
  $password = $_POST['password'];
	$password=md5($password);
  $email = $_POST['email'];
	$phone = $_POST['phone'];


//$korisnik = $_SESSION['korisnik'];
//
// $template = $mysqli->prepare("INSERT INTO korisnik (`username`,`name`,`lastname`,`password`,`email`,`phone`) VALUES (?,?,?,?,?,?,?)");
// $template->bind_param("ss",$username, $name,$lname,$password,$email,$phone);
// echo $mysqli->error;
// $template->execute();
// $template->close();
// $mysqli->close();

// if ($mysqli->connect_error) {
//   die("Connection failed: " . $mysqli->connect_error);
// }
//
// $sql = "INSERT INTO korisnik (`username`, `name`, `lastname`,`password`,`email`,`phone`)
// VALUES ($username, $name, $lname,$password,$email,$phone)";
//
// if ($mysqli->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $mysqli->error;
// }
//
// $mysqli->close();
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
//
// $sql = "INSERT INTO korisnik (`username`, `name`, `lastname`,`password`,`email`,`phone`)
// VALUES ($username, $name, $lname,$password,$email,$phone)";
//
// if (mysqli_query($conn, $sql)) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
$insertUpit = "INSERT INTO korisnik(username,name,lastname,password,email,phone) VALUES(:username, :name, :lname, :password, :email, :phone)";
$priprema = $conn->prepare($insertUpit);
// echo `$priprema`;

try {
	$priprema->bindParam(":username",$username);
	$priprema->bindParam(":name",$name);
	$priprema->bindParam(":lname",$lname);
	$priprema->bindParam(":password",$password);
	$priprema->bindParam(":email",$email);
	$priprema->bindParam(":phone",$phone);

	$rezultat=$priprema->execute();
  // set the PDO error mode to exception
	// $priprema->query(array(
  // ':username'   => $username,
  // ':name' => $name,
  // ':lname'   => $lname,
  // ':password' => $password,
  // ':email'   => $email, // <-- Problem solved
  // ':phone' => $phone
		//
    // ));
} catch(PDOException $e) {
	echo $e;
	// echo $priprema;
}

}
?>

		</div>
	</div>

	</section>
