<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller 
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
        $suppliers = Supplier::all();
        return view('Supplier.supplier')->with('suppliers',$suppliers);;
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
    public function store(Request $request, Supplier $supplier)
    {
            $supplier -> supplier_name = $request->supplier_name;
            $supplier ->  email= $request->email;
            $supplier-> phone_number = $request->phone_number;
            $supplier-> address = $request->address;
            $supplier-> company= $request->company;
            $supplier-> location= $request->location;
            $supplier->save();
        return redirect()->route('suppliers.index')->with('success','Supplier Added Successfully');
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
    public function edit(Supplier $supplier)
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
         $supplier -> supplier_name = $request->supplier_name;
            $supplier ->  email= $request->email;
            $supplier-> phone_number = $request->phone_number;
            $supplier-> address = $request->address;
            $supplier-> company= $request->company;
            $supplier-> location= $request->location;
            $supplier->save();
        return redirect()->route('suppliers.index')->with('success','Supplier Edited Successfully');
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
