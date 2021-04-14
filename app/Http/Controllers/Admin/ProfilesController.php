<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use App\User;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.profile.edit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = User::find(auth()->user()->id);
        if ($request->current_password || $request->new_password || $request->new_confirm_password) {
            $request->validate([
                'new_name' => ['required'],
                'current_password' => ['required', new MatchOldPassword],
                'new_password' => ['required'],
                'new_confirm_password' => ['same:new_password'],
            ]);

            $profile->update([
                'password'=> Hash::make($request->new_password),
                'name' => $request->new_name,
            ]);
           } else {
            $request->validate([
                'profile_picture' => ['mimes:jpeg,png,jpg'],
                'new_name' => ['required'],
            ]);
            
            if ($request->hasFile('profile_picture')) {
                $file = $request->file('profile_picture');
                $nama_file = time()."_".$file->getClientOriginalName();
                $tujuan_upload = 'uploads';
                $file->move($tujuan_upload,$nama_file);
            }else {
                $nama_file = $profile->image;
            }
          
            $profile->update([
                'name' => $request->new_name, 
                'image' => $nama_file,
            ]);
           }

           return redirect('/profile')->with('status','Profile successfully updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
