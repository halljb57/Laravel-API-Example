<?php

namespace App\Http\Controllers;

use App\Model\Address;
use Illuminate\Http\Request;

use App\Http\Requests;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresses = Address::all();
        return response()->json($addresses);
//        return response()->json(['addresses' => $addresses]);
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
        if ($request->ajax()) {
            $address = new Address();
            $address->street = $request->input('street');
            $address->city = $request->input('city');
            $address->province = $request->input('province');
            $address->country = $request->input('country');
            $address->postcode = $request->input('postcode');
            
            $address->save();
            return response()->json(['message' => 'Address saved']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $address = Address::find($id);
//        return response()->json($address);
        return response()->json(['address' => $address]);
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
        if($request->ajax())
        {
            $address = Address::find($id);
            $address->street = $request->input('street');
            $address->city = $request->input('city');
            $address->province = $request->input('province');
            $address->country = $request->input('country');
            $address->postcode = $request->input('postcode');
            
            $address->save();
            return response()->json(['message' => 'Address updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $address = Address::find($id);
        $address->delete();
        return response()->json(['message' => 'Address removed']);
    }
}
