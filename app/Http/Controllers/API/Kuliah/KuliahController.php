<?php

namespace App\Http\Controllers\API\Kuliah;

use App\Http\Controllers\Controller;
use App\Models\Kuliah;
use Illuminate\Http\Request;

class KuliahController extends Controller
{
    public function index()
    {
        $kuliah = Kuliah::all();
        return response()->json($kuliah, 200);
    }

    public function add(Request $request)
    {
        // create user
        $kuliah = new Kuliah([
            'kodeKuliah' =>  $request->kodeKuliah,
            'namaKuliah' =>  $request->namaKuliah,
            'pengajar' =>  $request->pengajar,
        ]);

        $kuliah->save();

        return response()->json($kuliah, 201);
    }

    // public function update(Request $request, $id)
    // {
    //     $kuliah = Kuliah::find($id);
    //     $kuliah->kodeKuliah = $request->input('kodeKuliah');
    //     $kuliah->namaKuliah = $request->input('namaKuliah');
    //     $kuliah->pengajar = $request->input('pengajar');

    //     $kuliah->save();

    //     return response()->json($kuliah, 201);
    // }

    public function destroy($id)
    {
        $kuliah = Kuliah::find($id);
        $kuliah->delete();
        return response()->json($kuliah, 201);
    }
}
