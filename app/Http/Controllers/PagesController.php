<?php
namespace App\Http\Controllers;
use App\Models\Penyewa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{

    public function login()
    {
        return view('login');
    }

   	public function home()
    {
        return view('home');
    }

    public function index()
    {
        // $penyewa = DB::table('penyewa')->get();
        $penyewa = Penyewa::all();
        return view('penyewa', ['penyewa' => $penyewa]);
    }

    public function create(){
        return view('createPenyewa');
    }

    public function store(Request $request){

        $this->validate($request,[
            'id' => 'required',
            'username'   => 'required',
            'jam_sewa'   => 'required',
            'alamat'   => 'required',
            'id_lapangan'   => 'required',
            'nohp'   => 'required'
        ]);

        $penyewa = Penyewa::create([
        'id' => $request->id_penyewa,
        'username'   => $request->username,
        'jam_sewa'   => $request->jam_sewa,
        'alamat'     => $request->alamat,
        'id_lapangan'       => $request->id_lapangan,
        'nohp'       => $request->nohp

        ]);

        if($penyewa){

            return redirect('penyewa')->with(['success' => 'Data Berasil Disimpan !']);
        }else{

            return redirect('penyewa')->with(['error' => 'Data Gagal Disimpan !']); 
        }
        }

    public function edit($id){

            $penyewa = DB::table('penyewa')->where('id',$id)->get();
            
            return view('updatePenyewa', ['penyewa' => $penyewa]);
        }


        public function update(Request $request)
            {
            DB::table('penyewa')->where('id',$request->id)->update([
            'id'        => $request->id,
            'username'          => $request->username,
            'alamat'            => $request->alamat,
            'id_lapangan'       => $request->id_lapangan,
            'nohp'              => $request->nohp,
            'jam_sewa'          => $request->jam_sewa
            ]);

            return redirect('/penyewa');
}


    public function destroy($id)
        {
            DB::table('penyewa')->where('id',$id)->delete();

            return redirect('/penyewa');
        }



    }

