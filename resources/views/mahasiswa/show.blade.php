@extends("layout")

@section("content")
<a href="{{ route('mahasiswa.index') }}" class="btn btn-info btn-sm">kembali</a>
	<ul>
		<li>ID Mahasiswa : {{$data->id}}</li>
		<li>Nama Mahasiswa : {{$data->name}} </li>
		<li>Nim Mahasiswa : {{$data->nim}} </li>
		<li>Alamat Mahasiswa : {{$data->address}} </li>
		<li>Foto Mahasiswa : <img src="{{ Storage::url($data->foto)}}" width="100dp" ></li>
	</ul>
@endsection