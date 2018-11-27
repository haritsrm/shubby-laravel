@extends('layouts.layout')

@section('content')
<div class="panel panel-flat">
	<div class="panel-heading">
		<h5 class="panel-title bold">Keranjang Belanja</h5>
	</div>
</div>

<form action="/checkout" method="GET">
	<div class="container">
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
						@for($i=0; $i<=3; $i++)
						<tr>
							<td style="width: 600px">
								<div class="detail-cart">
									<img src="/assets/images/1.JPG">
									<h6>SWEATER SUPREME VM Sweater Cardigan Polos Rajut ZIpper Hoodie Long Knitt Abu Muda X7O6Z</h6>
									<p class="text-muted">Ukuran : </p>
									<p class="text-muted">Warna : </p>
									<div class="clear"></div>
								</div>
							</td>
							<td>Rp. 150.000</td>
							<td>				
								<script type="text/javascript">
								function btKurang{{$i}}() {
									n = 0;
									n1 = eval(document.getElementById('jumlah{{$i}}').value);
									if (n1>1) {
										n = n1-1;
										document.getElementById('jumlah{{$i}}').value = n;
									}
								}
								function btTambah{{$i}}() {
									n = 0;
									n1 = eval(document.getElementById('jumlah{{$i}}').value);
									n = n1+1;
									document.getElementById('jumlah{{$i}}').value = n;
								}
								</script>
								<div>
									<button type="button" onclick="btKurang{{$i}}()" class="btJum"><i class="icon-minus3"></i></button>
									<input type="text" autocomplete="off" id="jumlah{{$i}}" class="inJum" value="1" name="jum">
									<button type="button" onclick="btTambah{{$i}}()" class="btJum"><i class="icon-plus3"></i></button>
								</div>
							</td>
							<td style="color: #ff6600;">Rp. 120.000</td>
							<td><a href="">Hapus</a></td>
						</tr>
						@endfor
					</tbody>
				</table>
			</div>
		</div>
		<!-- /basic table -->
	</div>
		
	<div class="footer-cart">
		<div style="float: right;">
			<h6>Subtotal untuk ({{$i}}) Produk :</h6>	
			<h2>Rp. 120.000</h2>
			<button type="submit">Checkout</button>
		</div>
		<div class="clear"></div>
	</div>
</form>
@endsection