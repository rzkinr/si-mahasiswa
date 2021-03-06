@extends("layout")
@section("content")
<a href="{{ route('mahasiswa.index') }}" class="btn btn-info btn-sm">kembali</a>
<form action="{{ route('mahasiswa.update', ['id' =>$data->id])}}" method="post" accept-charset="utf-8">
	@csrf
	<div class="form-group">
		<label class="control-label">Nama</label>
		<input type="text" name="name" class="form-control" value="{{$data->name}}">
	</div>
	<div class="form-group">
		<label class="control-label">Nim</label>
		<input type="text" name="nim" class="form-control" value="{{$data->nim}}">
	</div>
	<div class="form-group">
		<label class="control-label">Address</label>
		<textarea name="address" rows="5" class="form-control">{{ $data->address }}</textarea>
	</div>
	<div class="form-group">
		<button type="btn btn-primary" type="submit" class="btn btn-primary ">Simpan</button>
		<a href="{{ route('mahasiswa.index' )}}" title="" class="btn btn-danger">Batal</a>
	</div>
</form>
@endsection