@extends("layout.app")

@section("content")

<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">Detail Mahasiswa</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Kelola Mahasiswa</a></li>
					<li class="breadcrumb-item active">Detail Mahasiswa</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">

				<ul>
					<li>ID Mahasiswa : {{$data->id}}</li>
					<li>Nama Mahasiswa : {{$data->name}} </li>
					<li>Nim Mahasiswa : {{$data->nim}} </li>
					<li>Alamat Mahasiswa : {{$data->address}} </li>
					<li>Foto Mahasiswa : <img src="{{ Storage::url($data->foto)}}" width="100dp"></li>
				</ul>
			</div>
		</div>
	</div>
</section>

@endsection