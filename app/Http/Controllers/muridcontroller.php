<?php

namespace App\Http\Controllers;
use App\Models\murid;
use Illuminate\Http\Request;

class muridcontroller extends Controller
{
    public function index(){
        $query = murid::all();

        return view('murid.index', compact('query'));
    }
    
    public function create()
    {
    return view('murid.create');
    }

    public function store(Request $request)
    {
        dd($request-> all());
        $createmurid = murid::create(
            [
                'nis' => $request->nis,
                'nama' => $request->nama,
                'gender' => $request->gender,
                'religion' => $request->religion,
                'ultah' => $request->ultah,
                'kelas' => $request->kelas,
                'alamat' => $request->alamat,
                
            ]
            );
            
        return redirect('murid');
    }

    public function delete(Request $request)
    {
        $deletedaata = murid::find($request->id);
        $deletedaata->delete();

        return redirect('murid');
    }

};