<?php

namespace App\Http\Controllers;

use App\Models\RespondentIdentitiy;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RespondentIdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = RespondentIdentitiy::orderBy('id','DESC')->paginate(6);
        return view('admin.responden.index',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $respondent = RespondentIdentitiy::where('slug', $id)->first();
        return view('admin.responden.details',compact('respondent'));

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
        try{
            $respondent = RespondentIdentitiy::find($id);
            $respondent->delete();
            Alert::success('Success', 'Berhasil Dihapus');
            return redirect()->back();
        }catch (\Throwable $th) {
            Alert::error('Failed','Gagal Dihapus', ['error' => $th->getMessage()]);
        }
        return redirect()->back();
    }

}
