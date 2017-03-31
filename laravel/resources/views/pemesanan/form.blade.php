    @extends('templates/header')
	
	@section('content')
	
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ empty($result) ? 'Tambah' : 'Edit' }} Data Produk
        <small>UIN Mens Fashion</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/') }}"><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Data Pemesanan</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Pemesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('pemesanan') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i> Kembali</a>
		</div>
        <div class="box-body">
			<form action="{{ empty($result) ? url('pemesanan/add') : url("pemesanan/
			$result->id_pemesanan/edit") }}" class="form-horizontal" method="POST"
			enctype="multipart/form-data">
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Pelanggan</label>
				<div class="col-sm-10">
					<input type="text" readonly name="nama_pelanggan" class="form-control" placeholder="Masukan ID Produk" 
					value="{{ @$result->nama_pelanggan }}"  />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Nomor Telepon</label>
				<div class="col-sm-10">
					<input type="text" readonly name="nama_prod" class="form-control" placeholder="Masukan Nama Produk" 
					value="{{ @$result->notelp }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Alamat</label>
				<div class="col-sm-10">
					
						<input type="text" readonly name="alamat" class="form-control" placeholder="Masukan Nama Produk" 
					value="{{ @$result->alamat }}" />
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">ID Produk</label>
				<div class="col-sm-10">
					<input type="text" readonly name="id_prod" class="form-control" placeholder="Masukan Deskripsi Produk" 
					value="{{ @$result->id_prod }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Konfirmasi Kepada Pelanggan</label>
				<div class="col-sm-10">
					<select name="status" class="form-control">
						
							<option value="Sudah">Sudah</option>
							<option value="Belum">Belum</option>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>
					Simpan</button>
				</div>
			</div>
			</form>
        </div>
        <!-- /.box-body -->
        
       </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection