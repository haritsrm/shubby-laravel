<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Shabby Organizer</title>

		<!-- Global stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="/assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/core.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/components.css" rel="stylesheet" type="text/css">
		<link href="/assets/css/colors.css" rel="stylesheet" type="text/css">
		<!-- /global stylesheets -->
		<link rel="stylesheet" type="text/css" href="/css/styleme.css">

		<!-- Core JS files -->
		<script type="text/javascript" src="/assets/js/plugins/loaders/pace.min.js"></script>
		<script type="text/javascript" src="/assets/js/core/libraries/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/core/libraries/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/loaders/blockui.min.js"></script>
		<!-- /core JS files -->

		<!-- Theme JS files -->
		<script type="text/javascript" src="/assets/js/plugins/ui/prism.min.js"></script>
		<script type="text/javascript" src="/assets/js/core/app.js"></script>
		<!-- /theme JS files -->

		<!-- Theme JS files -->
		<script type="text/javascript" src="/assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/forms/selects/select2.min.js"></script>
		<script type="text/javascript" src="/assets/js/pages/form_select2.js"></script>
		<!-- /theme JS files -->

		<!-- Theme JS files -->
		<script type="text/javascript" src="/assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
		<script type="text/javascript" src="/assets/js/pages/uploader_bootstrap.js"></script>
		<!-- /theme JS files -->

		<script>
			function btKurang() {
				n = 0;
				n1 = eval(document.getElementById('jumlah').value);
				if (n1>1) {
					n = n1-1;
					document.getElementById('jumlah').value = n;
				}
			}
			function btTambah() {
				n = 0;
				n1 = eval(document.getElementById('jumlah').value);
				n = n1+1;
				document.getElementById('jumlah').value = n;
			}
		</script>
	</head>

	<body>	
	<!-- Default navbar -->
	<div class="navbar navbar-default navbar-component" style="border-bottom: 1px solid #80bfff; padding: 15px">
		<div class="navbar-header">
			<a class="navbar-brand" href="">
				<img src="assets/images/logo.jpg" class="logoSO" alt="">
				<img src="assets/images/logo_dark.png" alt="">
			</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-demo1"><i class="icon-grid3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-demo1">
			<ul class="nav navbar-nav">
				<li><a href="/" class="text-info">Beranda</a></li>
				<li><a href="/products" class="text-info">Belanja</a></li>
				<li><a href="" class="text-info">Panduan</a></li>
				<li> <a href="/belanjaanku" class="text-info">Belanjaanku</a></li>
				<li><a href="#" class="text-info">Kontak</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li>
					<form class="form-search">
						<input type="text" name="q" class="in-search" placeholder="Search here..">	
						<button type="submit" style="outline: none; " class="btn-search"><i class="glyphicon glyphicon-search"></i></button>
						<div class="clear"></div>
					</form>
				</li>
				@guest
				<li>
					<a href="/cart">
						<i class="icon-cart text-info"></i>
						<span class="visible-xs-inline-block position-right text-info">Keranjang</span>
						<span class="badge bg-warning-400">2</span>
					</a>
				</li>
				<li><a href="/login" class="text-info">Login</a></li>
				@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle text-info" data-toggle="dropdown">{{ Auth::user()->name }}</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#" class="text-info">Profile</a></li>
						<li>
							<a class="text-info" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</ul>
				</li>
				<li><a href="/cart">
						<i class="icon-cart text-info"></i>
						<span class="visible-xs-inline-block position-right text-info">Keranjang</span>
						<span class="badge bg-warning-400">2</span>
					</a>
				</li>
				@endguest
			</ul>
		</div>
	</div>
	<!-- /default navbar -->

	<!-- content -->
	@yield('content')
	<!-- content -->

	<footer>
		<p>Copyright &copy; 2018 Granada projects.</p>
	</footer>

	</body>
</html>