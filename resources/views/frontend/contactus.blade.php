@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
	<div class="intro about">
			<div class="wrap">
				<div class="textwidget">
					<h1>Contact US</h1>
				</div>
			</div>
		</div>
		<div class="wrap">
			<div class="row" style="margin-top:100px;">
				
				<!--- Content -->
				<div class="full-width content textongrey">
					<h2>Send us a message</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit. All fields are required.</p>
				</div>
				<!--- //Content -->
				
				<!-- Form -->
				<div class="three-fourth">
					<form method="post" action="contact_form_message.php" name="contactform" id="contactform">
						<div id="message"></div>
						<div class="row">
							<div class="col-md-6">
								<label for="name">Name and surname</label>
								<input type="text" id="name">
							</div>
							<div class="col-md-6">
								<label for="email">Email address</label>
								<input type="email" id="email">
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="comments">Message</label>
								<textarea id="comments"></textarea>
							</div>
						</div>
						<div class="f-row">
							<input type="submit" value="Submit" id="submit" name="submit" class="btn color medium right">
						</div>
					</form>
				</div>
				<!-- //Form -->
				
				<!--- Sidebar -->
				<aside class="one-fourth sidebar right">
					<!-- Widget -->
					<div class="widget">
						<h4>Need help booking?</h4>
						<div class="textwidget">
							<p class="contact-data"><span class="icon icon-themeenergy_user"></span>Name</p>
							<p class="contact-data"><span class="icon icon-themeenergy_call"></span> +92-300-123456789</p>
							<p class="contact-data"><span class="icon icon-themeenergy_mail-2"></span> <a href="mailto:help@transfers.com">help@transfers.com</a></p>
						</div>
					</div>
					<!-- //Widget -->
					
					<!-- Widget -->
					<div class="widget">
						<a href="#"><img src="frontend\images\uploads\img3.jpg" alt=""></a>
					</div>
					<!-- //Widget -->
				</aside>
				<!--- //Sidebar -->
				
				<!--- //location -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82099.68964854923!2d8.382985570617496!3d49.98107260673201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd9eec4bbcdc23%3A0x1c224353694a9c00!2s65428%20R%C3%BCsselsheim%2C%20Germany!5e0!3m2!1sen!2s!4v1649244313215!5m2!1sen!2s" width="100%" height="450" style="border:0; margin-bottom:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			    <!--- //location -->
			</div>
		</div>
	</main>
@endsection