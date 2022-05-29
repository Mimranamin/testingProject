@extends('frontend.layouts.main')
@section('content')
	<main class="main" role="main">
		<div class="wrap" style="width:50%;">
			<div class="row" style="margin-top:100px;">
				<div class="box">
					<form>
						<div class="f-row">
							<div class="full-width">
								<label for="username">Your username</label>
								<input type="text" id="username">
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<label for="password">Your password</label>
								<input type="password" id="password">
							</div>
						</div>
						<div class="f-row">
							<div class="full-width check">
								<div class="checker" id="uniform-checkbox"><span><input type="checkbox" id="checkbox"></span></div>
								<label for="checkbox">Remember me next time</label>
							</div>
						</div>
						<div class="f-row">
							<div class="full-width">
								<input type="submit" value="Login" class="btn color medium full">
							</div>
						</div>
						
						<p><a href="#">Forgotten password?</a><br>Dont have an account yet? <a href="register.html">Sign up</a>.</p>
					</form>
				</div>
			</div>
		</div>
	</main>
@endsection