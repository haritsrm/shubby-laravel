@extends('layouts.layout')

@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="panel panel-flat">
			<div class="panel-body">
				<div class="tabbable">
					<ul class="nav nav-tabs nav-tabs-highlight nav-justified">
						<li class="active"><a href="#highlighted-justified-tab1" class="text-info" data-toggle="tab">Belum Bayar&nbsp;<span class="pop-up">(1)</span></a></li>
						<li><a href="#highlighted-justified-tab2" class="text-info" data-toggle="tab">Belum Dikirimkan&nbsp;<span class="pop-up">(1)</span></a></li>
						<li><a href="#highlighted-justified-tab3" class="text-info" data-toggle="tab">Belum Diterima&nbsp;<span class="pop-up">(1)</span></a></li>
						<li><a href="#highlighted-justified-tab4" class="text-info" data-toggle="tab">Selesai&nbsp;<span class="pop-up">(1)</span></a></li>
						<li><a href="#highlighted-justified-tab5" class="text-info" data-toggle="tab">Batal&nbsp;<span class="pop-up">(1)</span></a></li>
					</ul>
					
					<div class="tab-content">
					
						<!-- Belum Bayar -->
						<div class="tab-pane active" id="highlighted-justified-tab1">
							<div class="table-responsive">
								<table class="table">
									<thead>
										<tr>
											<th><h6>Produk Dipesan</h6></th>
											<th class="text-muted">Harga Satuan</th>
											<th class="text-muted">Jumlah</th>
											<th class="text-muted">Subtotal Produk</th>
										</tr>
									</thead>
									<tbody>
										@for($i=0; $i<=1; $i++)
										<tr>
											<td style="width: 600px">
												<div class="detail-cart">
													<img src="/assets/images/1.jpg" style="width: 50px; height: 50px">
													<p>SWEATER SUPREME VM Sweater Cardigan Polos Rajut ZIpper Hoodie Long Knitt Abu Muda X7O6Z (<b>Ukuran : 210x100</b> ) (<b>warna : merah</b>)</p>
													<div class="clear"></div>
												</div>
											</td>
											<td>Rp. 150.000</td>
											<td>
												<p>1</p>
											</td>
											<td>Rp. 120.000</td>
										</tr>
										@endfor
									</tbody>
								</table>

								<div style="background-color: #fafdff;">
									<div style="padding: 20px; float: right;">
										<h1 style="color: #ff6600;float: right; margin-top: -1px; margin-right: 85px"><b>Rp 11.000</b></h1>
										<h6 style="color: #999999;float: right; margin-right: 10px">Jumlah Harus Dibayar :</h6>
									</div>
									<div class="clear"></div>

									<div style="float: right; margin: 0px 80px 30px 0px">
										<a href="/info pembayaran" style="margin:0px 3px" class="btn btn-info">Transfer Sekarang</a>
										<a href="" style="margin:0px 3px" class="btn btn-default">Tampilkan Rincian Pesanan</a>
										<a href="" onclick="ConfirmDelete()" style="margin:0px 3px" class="btn btn-default">Batalkan Pesanan</a>
									</div>
									
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<!-- /Belum Bayar -->
						
						<!-- Belum Dikirimkan -->
						<div class="tab-pane" id="highlighted-justified-tab2">
							<div style="min-height: 300px; text-align: center;">
								<div style="width: 100px;height: 100px;margin: 150px auto 15px auto;">
									<img src="/assets/images/icon_list.png" width="100%" height="100%">
								</div>
								<p class="text-muted">Belum ada pesanan</p>
							</div>
						</div>
						<!-- /Belum Dikirimkan -->

						<!-- Belum Diterima -->
						<div class="tab-pane" id="highlighted-justified-tab3">
							<div style="min-height: 300px; text-align: center;">
								<div style="width: 100px;height: 100px;margin: 150px auto 15px auto;">
									<img src="/assets/images/icon_list.png" width="100%" height="100%">
								</div>
								<p class="text-muted">Belum ada pesanan</p>
							</div>
						</div>
						<!-- /Belum Diterima -->

						<!-- Selesai -->
						<div class="tab-pane" id="highlighted-justified-tab4">
							<div style="min-height: 300px; text-align: center;">
								<div style="width: 100px;height: 100px;margin: 150px auto 15px auto;">
									<img src="/assets/images/icon_list.png" width="100%" height="100%">
								</div>
								<p class="text-muted">Belum ada pesanan</p>
							</div>
						</div>
						<!-- /Selesai -->
						
						<!-- Batal -->
						<div class="tab-pane" id="highlighted-justified-tab5">
							<div style="min-height: 300px; text-align: center;">
								<div style="width: 100px;height: 100px;margin: 150px auto 15px auto;">
									<img src="/assets/images/icon_list.png" width="100%" height="100%">
								</div>
								<p class="text-muted">Belum ada pesanan</p>
							</div>
						</div>
						<!-- Batal -->
					</div>
				</div>
			</div>
		</div>							
	</div>
</div>

<script>
    function ConfirmDelete() {
      var x = confirm("Yakin Akan Membatalkan?");
      if (x)
        return true;
      else
        return false;}
</script> 
@endsection