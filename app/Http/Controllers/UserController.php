<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function index()
    {
        $user = Admin::all();
        return view('user', ['user' => $user]);
    }
    public function create(){
        return view('createAdmin');
    }

    public function store(Request $request){

        $this->validate($request,[
            'id' => 'required',
            'name'   => 'required',
            'email'   => 'required',
            'password'   => 'required'
        ]);

        $user = Admin::create([
        'id' => $request->id,
        'name'   => $request->name,
        'email'   => $request->email,
        'password'     => $request->password
        ]);

        if($user){

            return redirect('user')->with(['success' => 'Data Berasil Disimpan !']);
        }else{

            return redirect('user')->with(['error' => 'Data Gagal Disimpan !']); 
        }
        }


            public function destroy($id)
        {
            DB::table('users')->where('id',$id)->delete();

            return redirect('/user');
        }


        public function edit($id){

            $user = DB::table('users')->where('id',$id)->get();
            
            return view('updateUser', ['user' => $user]);
        }


        public function update(Request $request)
        {
            DB::table('users')->where('id',$request->id)->update([
            'name'             => $request->name,
            'email'                    => $request->email,
            'password'                     => $request->password
            ]);

            return redirect('/user');
        }
}