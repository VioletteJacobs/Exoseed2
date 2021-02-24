<?php

namespace App\Http\Controllers;

use App\Models\Compagny;
use Illuminate\Http\Request;

class CompagnyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DBCompagny = Compagny::all();
        return view ("welcome", compact('DBCompagny'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "Compagny" => "required|min:5|max:200",
            "Compagny" => "required|min:5|max:50",
            "Compagny" => "required|min:5|max:50",
            "Compagny" => "required|min:5|max:30",
            "Compagny" => "required|min:5|max:500",
        ]);

        $newEntry = new Compagny;
        $newEntry->Compagny = $request->Compagny;
        $newEntry->Adresse = $request->Adresse;
        $newEntry->phone = $request->phone;
        $newEntry->email = $request->email;
        $newEntry->name = $request->name;
        $newEntry->surname = $request->surname;
        $newEntry->src = $request->src;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show= Compagny::find($id);
        return view("pages.show",compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Compagny::find($id);
        return view("pages.edit", compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Compagny::find($id);
        $update->Compagny = $request->Compagny;
        $update->Adresse = $request->Adresse;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->name = $request->name;
        $update->surname = $request->surname;
        $update->src = $request->src;
        $update ->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compagny  $compagny
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Compagny::find($id);
        $destroy->delete();
        return redirect()->back();
    }
}
