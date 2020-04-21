@extends("layout")

@push("style")
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.css"/>
@endpush

@section("content")
<a href="{{ route('mahasiswa.excel') }}" class="btn btn-success btn-sm">Export to Excel</a>
<a href="{{ route('mahasiswa.create') }}" class="btn btn-info btn-sm float-right mb-3">Tambah Data</a>
<div class="card-body bg-aqua mt-5">
{!! $html->table() !!}
</div>
@endsection

@push("script")
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.16/datatables.min.js"></script>
    {!! $html->scripts() !!}
@endpush

