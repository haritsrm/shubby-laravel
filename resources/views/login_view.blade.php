@extends('layouts.layout')

@section('content')
<div class="login-container banner" style="margin-top: -20px">
	<!-- Page container -->
	<div class="page-container">
		<!-- Page content -->
		<div class="page-content">
			<!-- Main content -->
			<div class="content-wrapper">
				<!-- Content area -->
				<div class="content pb-20">
					<div style="text-align: center; margin-bottom: 50px">
      					<img src="/assets/images/shabby.png" style="width: 350px; height: 80px;">
					</div>
					<!-- Advanced login -->
					<form action="">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<h5 class="content-group-lg">Login to your account <small class="display-block">Enter your credentials</small></h5>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<input type="email" class="form-control" placeholder="Email">
								<div class="form-control-feedback">
									<i class="icon-mention text-muted"></i>
								</div>
							</div>
							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>
							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" checked="checked">
											Remember
										</label>
									</div>

									<div class="col-sm-6 text-right">
										<a href="login_password_recover.html">Forgot password?</a>
									</div>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>
							<div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
							<a href="register" class="btn btn-default btn-block content-group">Sign up</a>
							<span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
						</div>
					</form>
					<!-- /advanced login -->
				</div>
				<!-- /content area -->
			</div>
			<!-- /main content -->
		</div>
		<!-- /page content -->
	</div>
	<!-- /page container -->
</div>
@endsection