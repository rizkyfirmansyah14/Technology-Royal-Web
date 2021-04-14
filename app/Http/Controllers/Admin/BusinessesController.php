<?php

namespace App\Http\Controllers\Admin;

use App\Admin\Business;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Bus;

class BusinessesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bisnis = Business::all();
        return view('admin.business.index', compact('bisnis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg,svg',
        ]);

        // menyimpan data file yang diupload ke variabel $file
		$file = $request->file('image');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'uploads';
		$file->move($tujuan_upload,$nama_file);
        

        // Student::create($request->all());

        Business::create([
            'title' => $request->title,
			'image' => $nama_file,
        ]);
        
        return redirect('/business')->with('status','data successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit(Business $business)
    {
        $bisnis = Business::find($business);
        return view('admin.business.edit', ['bisnis' => $bisnis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Business $business)
    {
        $business->title = $request->title;

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('uploads/'), $filename);
            $business->image = $request->file('image')->getClientOriginalName();
        }

        $business->update();

        return redirect()->route('business.index')->with('status','data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        Business::destroy($business->id);
        return redirect('/business')->with('status','data successfully deleted');
    }
}
