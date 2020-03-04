@extends("layout")

@section("content")
<a href="{{ route('mahasiswa.index') }}" class="btn btn-info btn-sm">kembali</a>
<form method="POST" action="{{ route('mahasiswa.store') }}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label class="control-label">Nama</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label class="control-label">Nim</label>
		<input type="text" name="nim" class="form-control">
	</div>
	<div class="form-group">
		<label class="control-label">Address</label>
		<textarea name="address" rows="5" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label class="control-label">Foto</label>
		<input type="file" name="foto">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary ">Simpan</button>
		<a href="{{ route('mahasiswa.index')}}" title="" class="btn btn-danger">Batal</a>
	</div>
</form>
@endsection