@extends('layouts.layout_admin')

@section('content')

	<h5 class="panel-title">Update Data Produk</h5>

	<form action="" method="">
		<div class="row">
			<div class="col-lg-6">
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="form-group">
							<label>Nama Produk :</label>
							<input type="text" name="nm_produk" class="form-control" required="" placeholder="masukan nama produk">
						</div>

						<div class="form-group">
							<label>Deskripsi Produk :</label>
							<!-- <textarea name="editor-full" id="editor-full" rows="4" cols="4"></textarea> -->
							<textarea name="desk_produk" required="" class="ckeditor" id="ckedtor"></textarea>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="panel panel-flat">
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-sm-5">
								<label>Kategori :</label>
								<select class="select" name="kat_produk" data-placeholder="Pilih Kategori">
									<option></option>
								</select>
							</div>

							<div class="form-group col-sm-2">
								<label>Stok :</label>
								<input type="number" name="stok" class="form-control" required="" value="1">
							</div>

							<div class="form-group col-sm-5">
								<label>Harga :</label>
								<div class="input-group">
									<span class="input-group-addon"><b>Rp</b></span>
									<input type="number" name="harga" class="form-control" required="" placeholder="">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label>Gambar Produk :</label>
							<input type="file" accept="*/images" name="gambar" class="form-control">
						</div>

					<div class="form-group">
							<label>Preview Gambar :</label>
						</div>
						
						<div class="form-group right">
							<a href="{{URL::previous()}}" class="btn btn-danger">Batal</a>
							<input type="submit" value="Tambahkan" class="btn btn-info">
						</div>
					</div>
				</div>
			</div>

		</div>
	</form>
@endsection