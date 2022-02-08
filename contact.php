
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">

	<div class="container">
		<div class="row">
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Get<span class="color"> in Touch</span></h3>
									<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                                    	<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
								</div>
							</div>
						</div>
	<div class="row">
								<div class="col-md-6">
									<p> </p>

          <form name="sentMessage" id="contactForm"  method="post">
		 <div class="input-field">
			<input type="text" name="name" class="form-control"
			   	   id="name" required
			           data-validation-required-message="Please enter your name" />
					   <label for="name" class="">   Name </label>
			  <p class="help-block"></p>

	         </div>
                <div class="input-field">
			<input type="email" name="email" class="form-control" id="email" required
			   		   data-validation-required-message="Please enter your email" />
					   <label for="name" class="">   Email </label>
	    </div>

		</div>


               <div class="input-field">
				 <textarea rows="10" cols="100" required class="form-control materialize-textarea"
                       idation-required-message="Please enter your message" minlength="5"
                       data-validation-minlength-message="Min 5 characters" name="message"
                        maxlength="999" style="resize:none"></textarea>
						 <label for="name" class="">   Message </label>
		  </div>
	     <div id="success"> </div> <!-- For success/fail messages -->
	    <button name="posalji" type="submit" class="btn btn-primary waves-effect waves-dark pull-right">Send</button><br />
          </form>

					<?php
					if(isset($_POST['posalji'])){
					  $name = $_POST['name'];
					  $email = $_POST['email'];
						$message = $_POST['message'];
					$insertUpit = "INSERT INTO message(name,email,message) VALUES(:name,:email, :message)";
					$priprema = $conn->prepare($insertUpit);
					// echo `$priprema`;

					try {

						$priprema->bindParam(":name",$name);


						$priprema->bindParam(":email",$email);
						$priprema->bindParam(":message",$message);

						$rezultat=$priprema->execute();

					} catch(PDOException $e) {
						echo $e;
					}

					}
					?>


								</div>
								<div class="col-md-6">
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
								</div>
							</div>
	</div>

	</section>