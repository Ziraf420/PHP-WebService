<?php

namespace App\Http\Controllers;
use App\Http\Resources\KomentarResource;
use App\Models\Komentar;
use Illuminate\Http\Request;


class KomentarController extends Controller
{
    public function index($id){
   
        return KomentarResource::collection( resource: Komentar::query()->where('project_id', $id)->get()); 
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'komentar'=>'required',
        ]);

        try{
            Komentar::create($request->post());
            return response()->json([
                'message'=>'Komentar Berhasil Ditambahkan!!'
            ]);
        }catch(\Exception $e){
            \Log::error($e->getMessage());
            return response()->json([
                'message'=>'Terjadi kesalahan saat menambahkan komentar!!'
            ],500);
        }
    }
}
