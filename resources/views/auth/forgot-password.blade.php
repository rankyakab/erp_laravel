@include("layouts.auth-header")
<body class="bg-forgot">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-forgot d-flex align-items-center justify-content-center" style="background-image: url(assets/images/IMG_5425.jpg); background-repeat: no-repeat; background-size: cover;">
			<div class="card forgot-box">
				<div class="card-body">
					<div class="p-4 rounded  border">
						<div class="text-center">
							<img src="{{ asset('assets/images/icons/forgot-2.png') }}" width="120" alt="" />
						</div>
						@if (session('status'))
                        <div class="alert alert-success" style="margin-top: 10px;" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif
						<form method="POST" action="{{ route('password.email') }}">
                         @csrf
						<h4 class="mt-5 font-weight-bold">Forgot Password?</h4>
						<p class="text-muted">Enter your registered email ID to reset the password</p>
						<div class="my-4">
							<label class="form-label">Email Address</label>
							<input type="text" name="email" id="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" placeholder="example@user.com" value="{{ old('email') }}" required autofocus/>
						</div>
						
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
						<div class="d-grid gap-2">
							<button type="submit" class="btn btn-primary btn-lg">{{ __('Email Password Reset Link') }}</button> <a href="{{ route('login') }}" class="btn btn-light btn-lg"><i class='bx bx-arrow-back me-1'></i>Back to Login</a>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
@include("layouts.auth-footer")