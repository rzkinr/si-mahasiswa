@extends("layout")
@section("content")
<a href="{{ route('mahasiswa.excel') }}" class="btn btn-success">Export to Excel</a>
<a href="{{ route('mahasiswa.create') }}" class="btn btn-info btn-sm float-right mb-3">Tambah Data</a>
<div class="card-body bg-aqua">
<div class="table-responsive">
<table class="table table-bordered table-striped" width="100%" id="myTable" cellspacing="0">
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
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', ['id' => $data->id]) }}" class="btn btn-success">Detail</a>
                        <a href="{{ route('mahasiswa.edit', ['id' => $data->id]) }}" class="btn btn-warning">Edit</a>
                        <a onclick="return confirm('Apakah Anda yakin?');" href="{{ route('mahasiswa.destroy', ['biodatum' => $data->id]) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Data belum tersedia!</td>
                </tr>
            @endforelse
	</tbody>
</table>
</div>
</div>

@endsection

