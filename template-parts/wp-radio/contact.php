<section id="contact-area" data-scroll-index="6">
	<div class="container">
		<div class="row">
			<!--start section heading-->
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
				<div class="section-heading text-center">
					<h5>Need Help?</h5>
					<h2 class="text-white">Contact With Us</h2>
					<p>Do you have anything to say? Let's know what do you want.</p>
				</div>
			</div>
			<!--end section heading-->
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
				<div class="contact-form">
					<form id="ajax-contact" action="http://omexer.com/rp/macnix/demo/contact.php" method="post">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" class="form-control" id="name" name="name" placeholder="Name*" required="required" data-error="name is required.">
								<div class="help-block with-errors"></div>
							</div>
							<div class="form-group col-md-6">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="required" data-error="valid email is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
						</div>
						<div class="form-group">
							<textarea class="form-control" id="message" name="message" rows="10" placeholder="Write Your Message*" required="required" data-error="Please, leave us a message."></textarea>
							<div class="help-block with-errors"></div>
						</div>
						<div class="contact-btn text-center">
							<button type="submit">Submit</button>
						</div>
						<div class="messages"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
