<?php

namespace App\Http\Controllers;


use App\Institution;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Validator;

class InstitutionController extends Controller
{
    
    public function index()
    {
        $institution = Institution::all();
        return response()->json($institution); 
    }


    public function create()
    {
        return view('lembaga.create');
    }

    
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            "id"=>"required",
            "nama"=>"required",
            "description"=> "required"
        ]);
        
        if($validasi->passes()){
            return response()->json([
                'pesan'=> 'Data berhasil disimpan', 'data' =>Institution::create($request->all())
            ]);
        }
        return response()->json([
          'pesan'=> 'Data gagal dimasukkan', 'data' =>$validasi->errors()->all()
      ], 404);

    }

   
    public function show(Institution $institution)
    {
       
        // return $institution;
        $data = Institution::where('id', $institution)->first();
        if(empty($detail)){
            return response()->json([
                'pesan'=> 'Data tidak ditemukan', 'data' =>$detail
            ], 404);
        }
        return response()->json([
          'pesan'=> 'Data ditemukan', 'data' =>$detail
      ], 200);
    }

    
    public function edit(Institution $institution)
    {
        //
    }

   
    public function update(Request $request, Institution $institution)
    {
        $data->update($request->all()); 
        return response()->json(['massage'=>'berhasil diupdate',
        'data'=>$data]);
    }


    public function destroy(Institution $institution)
    {
        $institution = Institution::where('id', $data)->first();
        if(empty($detail)){
            return response()->json([
                'pesan'=> 'Data tidak Dihapus', 'data' =>$detail
            ], 404);
        }
        $detail->delete();
        return response()->json([
          'pesan'=> 'Data Dihapus', 'data' =>$detail
      ], 200);
    }
}
