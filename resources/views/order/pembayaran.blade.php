@extends('layouts.layout')

@section('content')
<div class="content">
	<div class="container-fluid pembayaran">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title bold">Total Pembayaran&nbsp;:</h6>
				<h1 class="panel-title" style="color: #ff6600;">Rp. 70.000</h1>
				<p class="text-success">Bayar pesanan sesuai jumlah diatas</p>
				<p class="text-muted">Dicek dalam 24 jam setelah bukti transfer diupload. Diwajibkan untuk membayar sesuai total pembayaran sebelum batas waktu berakhir.</p>
			</div>
		</div>
		<div>
			<div class="bullet-detail">1</div>
			<p class="text-muted">Gunakan ATM / iBanking / mBanking / setor tunai untuk transfer ke rekening Shabby berikut ini:</p>
		</div>
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h6 class="panel-title bold">BRI</h6>
				<div style="width: 95%; margin: 0px auto; font-size: 14px; color: #808080">
					<span>No. Rekening&nbsp;:&nbsp;</span><span>112001000159301</span><br>
					<span>Cabang&nbsp;:&nbsp;</span><span>Slipi</span><br>
					<span>Nama Rekening&nbsp;:&nbsp;</span><span>Shabby Organizer</span><br>
				</div>
			</div>
		</div>
		<div>
			<div class="bullet-detail">2</div>
			<p class="text-muted">Silakan upload bukti transfer sebelum 23-11-2018</p>
		</div>
		<div>
			<div class="bullet-detail">3</div>
			<p class="text-muted">Demi keamanan transaksi, mohon untuk tidak membagikan bukti atau konfirmasi pembayaran pesanan kepada siapapun, selain mengunggahnya diwebsite Shabby Organizer.</p>
		</div>
		<div>
			<a href="/transaction"><div class="btn-upload-bukti1">Upload bukti transfer sekarang</div></a>
			<a href="/belanjaanku"><div class="btn-upload-bukti2">Upload bukti transfer nanti</div></a>
		</div>
	</div>
</div>
@endsection