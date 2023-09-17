
<?php include "includes/header.php" ; ?>

	<!-- Navigation -->

<?php include "includes/navigation.php" ; ?>

<!--==========================
    INSIDE HERO SECTION Section
============================-->	
<section class="page-image page-image-contact md-padding">
    <h1 class="text-white text-center">CONTACT</h1>
</section>
    
    <!--==========================
    Contact Section
============================-->
<section id="contact" class="md-padding">
	<div class="container">

			<div class="row text-center">
				<div class="col-md-4 offset-md-4">
					<div class="section-header">
						<h2 class="title">Contact</h2>
					</div>
				</div>
			</div>

		<div class="row">
			<div class="col-lg-12">
				<form id="contactForm" name="sentMessage" novalidate="novalidate">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
								<p class="help-block text-danger"></p>
							</div>
							<div class="form-group">
								<input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-lg-12 text-center">
							<div id="success"></div>
							<button id="sendMessageButton" class="main-btn" type="submit">Send Message</button>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</section>

<?php include "includes/footer.php" ; ?>