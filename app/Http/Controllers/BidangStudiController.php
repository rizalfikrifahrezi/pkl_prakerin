<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BidangStudi;

class BidangStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidangstudis = BidangStudi::orderBy('id', 'DESC')->paginate(5);
        return view('bidangstudi.index', compact('bidangstudis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bidangstudi.create');
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
            'content' => 'required'
        ]);

        $bidangstudi = BidangStudi::create($request->all());
        return redirect()->route('bidangstudi.index')->with('message', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bidangstudi = BidangStudi::findOrFail($id);
        return view('bidangstudi.show', compact('bidangstudi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidangstudi = BidangStudi::findOrFail($id);
        return view('bidangstudi.edit', compact('bidangstudi'));
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
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $bidangstudi = BidangStudi::findOrFail($id)->update($request->all());

        return redirect()->route('bidangstudi.index')->with('message', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidangstudi = BidangStudi::findOrFail($id)->delete();
        return redirect()->route('bidangstudi.index')->with('message', 'Data berhasil dihapus!');
    }
}
