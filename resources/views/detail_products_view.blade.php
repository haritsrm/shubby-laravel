@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="bg-detail">
		<!-- foto detail produk -->
		<div class="detail-gambar">
			<img src="assets/images/gambar1.jpg" class="gambar-utama">
			<div class="gambar-kecil">
				<img src="assets/images/gambar1.jpg">
				<img src="assets/images/1.jpg">
				<img src="assets/images/1.jpg">
				<img src="assets/images/1.jpg">
				<div class="clear"></div>
			</div>
		</div>
		<!-- foto detail produk -->

		<!-- form action produk -->
		<div class="form-action-produk">
			<h4>SWEATER SUPREME VM Sweater Cardigan Polos Rajut ZIpper Hoodie Long Knitt Abu Muda X7O6Z</h4>
			<div style="float: right;">
				<p style="margin-bottom: -5px">Penilaian produk</p>
				<div class="text-nowrap" style="float:left;">
					<i class="icon-star-full2 text-size-base text-warning-300"></i>
					<i class="icon-star-full2 text-size-base text-warning-300"></i>
					<i class="icon-star-full2 text-size-base text-warning-300"></i>
					<i class="icon-star-full2 text-size-base text-warning-300"></i>
					<i class="icon-star-full2 text-size-base text-warning-300"></i>
					<p class="text-muted text-star2">(30)</p>
				</div>
			</div>
			<div class="clear"></div>
			<div class="bar-harga">
				<h4 style="font-weight: bold;">Rp. 148.000</h4>
			</div>

			<div class="actgroup">
				<h6 class="text-muted">Pilihan warna :</h6>
				@for($i=1;$i<=3;$i++)
				<div class="radio">
					<label>
						<input type="radio" name="warna" class="styled">
						Warna&nbsp;{{$i}}
					</label>
				</div>
				@endfor
			</div>
			<div class="clear"></div>
		
			<div class="actgroup">
				<h6 class="text-muted">Ukuran :</h6>
				@for($i=1;$i<=3;$i++)
				<div class="radio">
					<label>
						<input type="radio" name="ukuran" class="styled">
						Ukuran&nbsp;{{$i}}
					</label>
				</div>
				@endfor
			</div>
			<div class="clear"></div>

			<div style="margin-top: 20px;">
				<h6 class="text-muted" style="float: left;">Kuantitas : </h6>
				<div class="btnGroup">
					<button type="button" onclick="btKurang()" class="btJum"><i class="icon-minus3"></i></button>
					<input type="text" autocomplete="off" id="jumlah" class="inJum" value="1" name="jum">
					<button type="button" onclick="btTambah()" class="btJum"><i class="icon-plus3"></i></button>
					<p class="text-muted">Tersisa 20 buah</p>
				</div>
			</div>

			<div class="clear"></div>
			<button type="submit" class="btnCart"><i class="icon-cart-add" style="font-size: 18px"></i> Masukkan Keranjang</button>

			<a href="" class="btnBuy">Beli Sekarang</a>

			<hr>
			<div style="">
				<h6 class="text-muted">Deskripsi Produk : </h6>
				<p>Kotak serbaguna bentuk laci, terdiri dari 3 susun ( 5 laci ). Bisa dipakai untuk tempat menyimpan pakaian dalam seperti bra atau celana dalam, pakaian bayi.</p>
				<p>Juga bisa dipakai untuk tempat pernak pernak aksesoris, kosmetik atau pernak pernik rumah. Sangat cocok untuk menyimpan barang-barang kecil agar tersimpan rapi dan mudah dicari saat dibutuhkan.</p>
				<p>Bukanya dengan ditarik keluar seperti membuka laci.</p>
				<p>Bahan cukup tebal, dalamnya terjahit lapisan karton tebal, bisa berdiri kokoh.</p>
				<p>Material : Kain kanvas + lapisan karton tebal</p>
			</div>
		</div>
		<!-- deskripsi produk -->
		<div class="clear"></div>

	</div>
</div>
@endsection