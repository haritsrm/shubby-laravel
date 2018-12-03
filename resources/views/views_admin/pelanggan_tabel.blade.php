@extends('layouts.layout_admin')

@section('content')
	<!-- Marketing campaigns -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h6 class="panel-title">Daftar Pelanggan</h6>
		</div>

		<div class="table-responsive">
			<table class="table datatable-basic text-nowrap">
				<thead>
					<tr>
						<th>No</th>
						<th class="col-md-2">ID Pelanggan</th>
						<th class="col-md-2">Nama</th>
						<th class="col-md-2">Terdaftar</th>
						<th class="col-md-2">E-mail</th>
						<th class="col-md-2">Riwayat Belanja</th>
						<th class="text-center"><i class="icon-arrow-down12"></i></th>
					</tr>
				</thead>
				<tbody>
					@for($i=1;$i<=3;$i++)
					<tr>
						<td>{{$i}}</td>
						<td>CSO{{$i}}</td>
						<td><span class="text-muted">Muhammad Yusuf</span></td>
						<td>{{date('d/m/Y')}}</td>
						<td>yusuf@yanto.co</td>
						<td>
							<ul class="list list-unstyled no-margin">
								<li class="no-margin">
									<i class="icon-infinite text-size-base text-warning position-left"></i>
									Pending:
									<a href="#">25 orders</a>
								</li>

								<li class="no-margin">
									<i class="icon-spinner2 text-size-base text-success position-left"></i>
									Processed:
									<a href="#">34 orders</a>
								</li>

								<li class="no-margin">
									<i class="icon-checkmark3 text-size-base text-success position-left"></i>
									Success:
									<a href="#">34 orders</a>
								</li>
							</ul>
						</td>
						<td>
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