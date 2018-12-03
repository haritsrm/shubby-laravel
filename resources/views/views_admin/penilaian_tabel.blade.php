@extends('layouts.layout_admin')

@section('content')
	<!-- Marketing campaigns -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h6 class="panel-title">Daftar Penilaian Produk</h6>
		</div>

		<div class="table-responsive">
			<table class="table datatable-basic text-nowrap">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pelanggan</th>
						<th>ID Barang</th>
						<th>Nilai</th>
						<th>Pesan</th>
						<th>Waktu</th>
						<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
					</tr>
				</thead>
				<tbody>
					@for($i=1;$i<=3;$i++)
					<tr>
						<td>{{$i}}</td>
						<td>CSO{{$i}}</td>
						<td>PSO{{$i}}</td>
						<td>
							<div class="text-nowrap">
								<i class="icon-star-full2 text-size-base text-warning-300"></i>
								<i class="icon-star-full2 text-size-base text-warning-300"></i>
								<i class="icon-star-full2 text-size-base text-warning-300"></i>
								<i class="icon-star-full2 text-size-base text-warning-300"></i>
								<i class="icon-star-full2 text-size-base text-warning-300"></i>
							</div>
							<div class="text-muted">85 reviews</div>
						</td>
						<td>
							<textarea cols="34" rows="3" readonly="">pesan dari customers</textarea>
						</td>
						<td>
							{{date('G:i:s')}}<br>
							{{date('d/m/Y')}}
						</td>
						<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="#"><i class="icon-eye"></i> Lihat detail</a></li>
										<li><a href="#"><i class="icon-pencil7"></i> Update</a></li>
									</ul>
								</li>
							</ul>
						</td>
					</tr>
					@endfor
				</tbody>
			</table>
		</div>
	</div>
	<!-- /marketing campaigns -->
@endsection