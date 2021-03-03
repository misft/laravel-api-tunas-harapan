<?php

namespace App\Http\Controllers;

use App\Keranjang;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function index(Request $request) {
        $id_user = $request->get('id_user');

        $keranjang = Keranjang::with('buku')->where('id_user', $id_user)->get();

        return response()->json([
            'status' => 1,
            'message' => 'List Keranjang',
            'keranjang' => $keranjang
        ]);
    }

    public function tambah(Request $request) {
        $id_user = $request->get('id_user');
        $id_buku = $request->get('id_buku');
        $keranjang = Keranjang::create([
            'id_user'=>$id_user,
            'id_buku'=>$id_buku
        ]);

        return response()->json([
            'status'=>1,
            'message'=>'Berhasil menambahkan ke kerajang',
            'keranjang'=>$keranjang
        ]);
    }

    public function hapus(Request $request) {
        $keranjang = Keranjang::findOrFail($request->get('id'));
        $keranjang->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Berhasil menghapus'
        ]);
    }
}
