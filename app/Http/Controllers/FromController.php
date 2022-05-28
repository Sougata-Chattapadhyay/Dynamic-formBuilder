<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fromData;
use App\Models\data;
use Log;
use DB;


class FromController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $r)
    {
        $v = new fromdata;
        $v->Unique_id = 'unique';
        $v->Data      = $r->form;
        $v->save();
        $form = json_decode($r->form,true);
        // dd($form);
        return redirect()->back();
    }

    public function generateId(){
        $data = DB::table('fromdata')->pluck('Unique_id')->last();
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
    public function edit()
    {
        $d = DB::table('fromdata')->get()->last();
        // dd($d);
        if($d == null){
            return 'no data present';
        }
        else{
        return view('Edit',['Data'=>$d]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        // dd($id);
        DB::table('fromdata')->where('id',$id)->update([
            'Data' => $r->form
        ]);
        return redirect('/');
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
