@section('title')
Login  
@endsection
@extends('auth_layout/layout')
@section('contenu')
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/logo.jpg" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST"  action="{{ route('login') }}">
								@csrf
								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror"name="email"  required autofocus>
									@error('email')
										<div class="invalid-feedback" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="{{ url('forgot-password') }}" class="float-right">
											Forgot Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required data-eye>
									@error('password')
										<div class="invalid-feedback is-invalid" role="alert">
											<strong>{{ $message }} </strong>
										</div>
									@enderror
									
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="{{ url('register') }}">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; Amjid imad
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection



