<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateMahasiswa;
use DataTables;
use App\DataTables\MhsDataTable;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Html\Builder;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Builder $builder)
    {
        if (request()->ajax()) {
            return DataTables::of(Mahasiswa::query())->editColumn("nim", function($data){
                return "<strong> " . $data->nim . " </strong>";
            })->addColumn("action", function($data) {
                return "
                  <a href = '" . route( "mahasiswa.show", ["id" => $data->id]) . "' class='btn btn-success'>Detail</a>  
                  <a href = '" . route( "mahasiswa.edit", ["id" => $data->id]) . "' class='btn btn-warning'>Edit</a>
                  <a href = '" . route( "mahasiswa.destroy", ["id" => $data->id]) . "' class='btn btn-danger'>Delete</a>
                ";
            })->rawColumns(["nim", "action"])->addIndexColumn()->toJson();
        }

        $html = $builder->columns([
            ["data" => "DT_RowIndex", "name" => "#", "title" => "#", "defaultContent" => "", "orderable" => false, 'searchable' => false,],
            ["data" => "name", "name" => "name", "title" => "NAMA"],
            ["data" => "nim", "name" => "nim", "title" => "NIM"],
            [
                'defaultContent' => '',
                'data'           => 'action',
                'name'           => 'action',
                'title'          => 'Action',
                'render'         => null,
                'orderable'      => false,
                'searchable'     => false,
                'exportable'     => false,
                'printable'      => true,
            ],
        ]);

        return view("mahasiswa.index", compact("html"));
    }

    public function export_excel()
	{
		return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mahasiswa.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // $filepath = $request->file("foto")->store("foto-mhs");

        $filePath = $request->file("foto")->store("public");
        // return $filePath;

        Mahasiswa::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'address' => $request->address,
            'foto' => $filePath]); //menyimpan filePath yang didapatkan 
        return redirect()->route("mahasiswa.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Mahasiswa::find($id);

        return view("mahasiswa.show", compact("data"));

        // return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::find($id);

        return view("mahasiswa.edit", compact("data"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMahasiswa  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMahasiswa $request, $id)
    {
        Mahasiswa::where("id", $id)->update($request->except("_token", "_method"));
        return redirect()->route("mahasiswa.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where("id", $id)->delete();
        return redirect()->route("mahasiswa.index");
    }
}
