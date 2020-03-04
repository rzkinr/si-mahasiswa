@extends("layout")
@section("content")
<a href="{{ route('mahasiswa.create') }}" class="btn btn-info btn-sm float-right mb-3">Tambah Data</a>
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Nim</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		@forelse($mahasiswa as $data)
		<tr>
			<td>{{ $data -> id}}</td>
			<td>{{ $data -> name}}</td>
			<td>{{ $data -> nim}}</td>
			<td>
				<a href="{{ route('mahasiswa.show', ['id' => $data->id]) }}" type="button" class="btn btn-success btn-sm">Detail</a>
				<a href="{{ route('mahasiswa.edit', ['id' => $data->id]) }}" type="button" class="btn btn-warning btn-sm">Edit</a>
				<a onclick="return confirm('apakah anda yakin?')" href="{{ route('mahasiswa.destroy', ['id' => $data->id]) }}" type="submit" class="btn btn-danger btn-sm">Delete</a>
			</td>
		</tr>
		@empty
		<tr>
			<td colspan="4">Data yang belum tersedia</td>
		</tr>
		@endforelse
	</tbody>
</table>
@endsection

