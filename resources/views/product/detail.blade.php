@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="bg-detail">
		<!-- foto detail produk -->
		<div class="detail-gambar">
			<img src="/assets/images/gambar1.jpg" class="gambar-utama">
			<div class="gambar-kecil">
				@foreach((App\Picture::where('id_product', '=', $product->id)) as $picture)
				<img src="{{ base64_decode(App\Picture::find($product->id)) }}">
				@endforeach
				<div class="clear"></div>
			</div>
		</div>
		<!-- foto detail produk -->

		<!-- form action produk -->
		<form action="/cart" method="post">
			@csrf
			<div class="form-action-produk">
				<h4>{{ $product->name }}</h4>
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
					<h4 style="font-weight: bold;">Rp. {{ $product->price }}</h4>
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
						<input type="text" autocomplete="off" id="jumlah" class="inJum" value="1" name="quantity">
						<button type="button" onclick="btTambah()" class="btJum"><i class="icon-plus3"></i></button>
						{{! $stock = App\Stock::where('id_product', $product->id)->first() }}
						<p class="text-muted">Tersisa {{ $stock->stock }} buah</p>
					</div>
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
							n2 = parseInt({{ $stock->stock }});
							n1 = eval(document.getElementById('jumlah').value);
							if ( n1 < n2 )
							{
								n = n1+1;
								document.getElementById('jumlah').value = n;
							}
						}
					</script>
				</div>

				<input type="hidden" name="product" value="{{ $product->id }}">

				<div class="clear"></div>
				<button type="submit" class="btnCart"><i class="icon-cart-add" style="font-size: 18px"></i> Masukkan Keranjang</button>

				<a href="" class="btnBuy">Beli Sekarang</a>

				<hr>
				<div style="">
					<h6 class="text-muted">Deskripsi Produk : </h6>
					<p>{{ $product->description }}</p>
				</div>
			</div>
		</form>
		<!-- deskripsi produk -->
		<div class="clear"></div>

	</div>
</div>
@endsection