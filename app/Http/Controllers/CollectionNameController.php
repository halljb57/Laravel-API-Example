<?php

namespace App\Http\Controllers;

use App\Model\CollectionName;
use Illuminate\Http\Request;

use App\Http\Requests;

class CollectionNameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = CollectionName::all();
        return response()->json($collections);
//        return response()->json(['collections' => $collections]);
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
            $collection = new CollectionName();
            $collection->collection_name = $request->input('collection_name');
            $collection->country_id = $request->input('country_id');
            $collection->comments = $request->input('comments');
            
            $collection->save();
            return response()->json(['message' => 'Collection saved']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $collection_id
     * @return \Illuminate\Http\Response
     */
    public function show($collection_id)
    {
        $collection = CollectionName::find($collection_id);
//        return response()->json($collection);
        return response()->json(['collection' => $collection]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $collection_id
     * @return \Illuminate\Http\Response
     */
    public function edit($collection_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $collection_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $collection_id)
    {
        if($request->ajax())
        {
            $collection = CollectionName::find($collection_id);
            $collection->collection_name = $request->input('collection_name');
            $collection->country_id = $request->input('country_id');
            $collection->comments = $request->input('comments');
            
            $collection->save();
            return response()->json(['message' => 'Collection updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $collection_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($collection_id)
    {
        $collection = CollectionName::find($collection_id);
        $collection->delete();
        return response()->json(['message' => 'Collection removed']);
    }
}
