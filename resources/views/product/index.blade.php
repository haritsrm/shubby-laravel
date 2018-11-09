@extends('layouts.layout')

@section('content')
<!-- Grid -->
<div class="content">
	<div class="sidebar-content" style="float: left; width: 190px">
		<div style="margin-bottom: 30px;">
			<h5><i class="icon-filter4"></i> SARING FILTER</h5>
			<h6><b>Berdasarkan Kategori</b></h6>
		</div>
		<div class="list-kat">
			<a href="" class="text-info">Kategori 1</a><hr>
			<a href="" class="text-info">Kategori 2</a><hr>
			<a href="" class="text-info">Kategori 3</a><hr>
			<a href="" class="text-info">Kategori 4</a><hr>
		</div>
	</div>

	<div class="produk-content">
		<div class="bar-action">
			<h6>Urutkan</h6>
			<a href="">Terbaru</a>
			<a href="">Terlaris</a>
			<select class="dropdown-harga">
				<option>Harga</option>
				<option>Harga Tertinggi</option>
				<option>Harga Terendah</option>
			</select>

			<div class="clear"></div>
		</div>
		@for($i=0; $i<=7; $i++)
		<a href="/detail products" class="panel-produk">
			<div class="panel-img">
				<img src="assets/images/1.jpg" alt="">
			</div>
			<div class="body-panel-produk">
				<p class="p-produk">Decorative Rack rak Shabby chic rak Shabby...  </p>
				<p class="p-harga">Rp. 20.000</p>
				<div style="float: right;">
					<div class="text-nowrap" style="float:left;">
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<i class="icon-star-full2 text-size-base text-warning-300"></i>
						<p class="text-muted text-star">(30)</p>
					</div>
				</div>
			</div>
		</a>
		@endfor
	</div>
	<div class="clear"></div>
</div>
@endsection