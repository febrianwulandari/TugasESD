<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lapangan;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LapanganController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        $lapangan = Lapangan::all();
        return view('lapangan', ['lapangan' => $lapangan]);
    }
    public function create(){
        return view('createLapangan');
    }

    public function store(Request $request){

        $this->validate($request,[
            'id' => 'required',
            'nama_lapangan'   => 'required',
            'status'   => 'required',
            'harga'   => 'required'
        ]);

        $lapangan = Lapangan::create([
        'id' => $request->id,
        'nama_lapangan'   => $request->nama_lapangan,
        'status'   => $request->status,
        'harga'     => $request->harga
        ]);

        if($lapangan){

            return redirect('lapangan')->with(['success' => 'Data Berasil Disimpan !']);
        }else{

            return redirect('lapangan')->with(['error' => 'Data Gagal Disimpan !']); 
        }
        }

            public function destroy($id)
        {
            DB::table('lapangan')->where('id',$id)->delete();

            return redirect('/lapangan');
        }

        public function edit($id){

            $lapangan = DB::table('lapangan')->where('id',$id)->get();
            
            return view('updateLapangan', ['lapangan' => $lapangan]);
        }


        public function update(Request $request)
        {
            DB::table('lapangan')->where('id',$request->id)->update([
            'nama_lapangan'             => $request->nama_lapangan,
            'status'                    => $request->status,
            'harga'                     => $request->harga
            ]);

            return redirect('/lapangan');
        }



}