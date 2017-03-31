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
		<li>Data Produk</li>
        <li class="active">{{ empty($result) ? 'Tambah' : 'Edit' }} Data Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	@include('templates/feedback')
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <a href="{{ url('produk') }}" class="btn bg-purple"><i class="fa fa-chevron-left"></i> Kembali</a>
		</div>
        <div class="box-body">
			<form action="{{ empty($result) ? url('produk/add') : url("produk/
			$result->id_prod/edit") }}" class="form-horizontal" method="POST"
			enctype="multipart/form-data">
				{{ csrf_field() }}
				
				@if (!empty($result))
					{{ method_field('patch') }}
				@endif
			<div class="form-group">
				<label class="control-label col-sm-2">ID Produk (min. 4 karakter)</label>
				<div class="col-sm-10">
					<input type="text" name="id_prod" class="form-control" placeholder="Masukan ID Produk" 
					value="{{ @$result->id_prod }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Nama Produk</label>
				<div class="col-sm-10">
					<input type="text" name="nama_prod" class="form-control" placeholder="Masukan Nama Produk" 
					value="{{ @$result->nama_prod }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Kategori Produk</label>
				<div class="col-sm-10">
					<select name="id_kat" class="form-control">
						@foreach (\App\Kategori::all() as $kategori)
							<option value="{{ $kategori->id_kat }}" {{ @$result->id_kat == 
							$kategori->id_kat ? 'selected' : '' }}>{{ $kategori->nama_kat }}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Deskripsi Produk</label>
				<div class="col-sm-10">
					<textarea name="deskripsi" class="form-control" placeholder="Masukan Deskripsi Produk" 
					value="{{ @$result->deskripsi }}" /></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Harga Produk</label>
				<div class="col-sm-10">
					<input type="text" name="harga" class="form-control" placeholder="Masukan Harga Produk" 
					value="{{ @$result->harga }}" />
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Foto Produk</label>
				<div class="col-sm-10">
					<input type="file" name="foto"  />
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