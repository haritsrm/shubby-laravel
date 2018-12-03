@extends('layouts.layout')

@section('content')
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title bold">Keranjang Belanja</h5>
	</div>
</div>

	<div class="container" style="min-height:300px">
		<!-- Basic table -->
		<div class="panel panel-flat">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th>Produk</th>
							<th>Harga Satuan</th>
							<th>Kuantitas</th>
							<th>Total harga</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($carts as $cart)
						<tr>
							<td style="width: 600px">
								<div class="detail-cart">
									<img src="/assets/images/1.JPG">
									<h6>{{ App\Product::find($cart->id_product)->name }}</h6>
									<p class="text-muted">Ukuran : </p>
									<p class="text-muted">Warna : </p>
									<div class="clear"></div>
								</div>
							</td>
							<td>Rp. {{ $price = App\Product::find($cart->id_product)->price }}</td>
							<td>				
								<script type="text/javascript">

								function btKurang{{$cart->id}}() {
									n = 0;
									n1 = eval(document.getElementById('jumlah{{$cart->id}}').value);
									if (n1>1) {
										n = n1-1;
										tp = n * parseInt({{$price}});
										document.getElementById('jumlah{{$cart->id}}').value = n;
										document.getElementById('totprice{{$cart->id}}').value = tp;
									}
								}
								function btTambah{{$cart->id}}() {
									n = 0;
									{{! $stock = App\Stock::where('id_product', $cart->id_product)->first() }}
									n2 = parseInt({{ $stock->stock }});
									n1 = eval(document.getElementById('jumlah{{$cart->id}}').value);
									if (n1 < n2) {
										n = n1+1;
										tp = n * parseInt({{$price}});
										document.getElementById('jumlah{{$cart->id}}').value = n;
										document.getElementById('totprice{{$cart->id}}').value = tp;
									}
								}
								n1 = eval(document.getElementById('jumlah{{$cart->id}}').value);
								tp = n1 * parseInt({{$price}});
								document.getElementById('totprice{{$cart->id}}').value = tp;								
								
								</script>
								<div>
									<button type="button" onclick="btKurang{{$cart->id}}()" class="btJum"><i class="icon-minus3"></i></button>
									<input type="text" autocomplete="off" id="jumlah{{$cart->id}}" class="inJum" value="{{ $cart->quantity }}" name="jum">
									<button type="button" onclick="btTambah{{$cart->id}}()" class="btJum"><i class="icon-plus3"></i></button>
								</div>
							</td>
							<td style="color: #ff6600;">Rp. <input type="text" id="totprice{{$cart->id}}" readonly value="{{ $price * $cart->quantity }}" style="border:none"></td>
							<td>
								<a class="text-info" href="{{ route('cart.delete', $cart->id) }}"
									onclick="event.preventDefault();
													document.getElementById('delete-form-{{ $cart->id }}').submit();">
									Hapus
								</a>

								<form id="delete-form-{{ $cart->id }}" action="{{ route('cart.delete', $cart->id) }}" method="POST">
									@csrf
									@method('DELETE')
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		<!-- /basic table -->
	</div>
		
	<div class="footer-cart">
		<div style="float: right;">
			<h6>Subtotal untuk ({{count($carts)}}) Produk :</h6>	
			<h2>Rp. 120.000</h2>
			<a href="/checkout"><button>Checkout</button></a>
		</div>
		<div class="clear"></div>
	</div>

@endsection