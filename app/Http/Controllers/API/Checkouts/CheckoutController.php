<?php

namespace App\Http\Controllers\API\Checkouts;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkout = Checkout::all();
        return response()->json($checkout, 200);
    }

    public function add(Request $request)
    {
        // $validateData = $request->validate([
        //     'id' => 'required',
        //     'name' => 'required',
        //     'email' => 'required',
        //     'telepon' => 'required',
        //     'alamat' => 'required',
        //     'image' => 'required',
        //     // 'images' => 'required',
        // ]);

        $checkout = new Checkout;
        $checkout->id = $request->id;
        $checkout->name = $request->name;
        $checkout->email = $request->email;
        $checkout->telepon =  $request->telepon;
        $checkout->alamat = $request->alamat;
        $checkout->image = $request->image;
        $checkout->save();

        return response()->json($checkout, 201);
    }

    public function update(Request $request, $id)
    {
        // $validateData = $request->validate([
        //     'id' => 'required',
        //     'name' => 'required',
        //     'email' => 'required',
        //     'telepon' => 'required',
        //     'alamat' => 'required',
        //     'image' => 'required',
        //     // 'images' => 'required',
        // ]);

        // update user
        // $checkout = Checkout::where('id', '=', $request->id)->first();
        // $checkout->id = $request->id;
        // $checkout->name = $request->name;
        // $checkout->email = $request->email;
        // $checkout->telepon =  $request->telepon;
        // $checkout->alamat = $request->alamat;
        // $checkout->image = $request->image;
        // $checkout->save();

        // return response()->json($checkout, 201);

        $checkout = Checkout::find($id);
        $checkout->id = $request->input('id');
        $checkout->name = $request->input('name');
        $checkout->email = $request->input('email');
        $checkout->telepon =  $request->input('telepon');
        $checkout->alamat = $request->input('alamat');
        $checkout->image = $request->input('image');
        $checkout->save();

        return response()->json($checkout, 201);
    }

    // public function destroy(Request $request)
    // {
    //     $checkout = Checkout::where('id', '=', $request->id)->first();

    //     if (!empty($checkout)) {
    //         $checkout->delete();

    //         return response()->json($checkout, 200);
    //     } else {
    //         return response()->json([
    //             'error' => 'data tidak ditemukan'
    //         ], 404);
    //     }
    // }
    public function destroy($id)
    {
        $checkout = Checkout::find($id);
        $checkout->delete();
        return response()->json($checkout, 201);
    }
}
