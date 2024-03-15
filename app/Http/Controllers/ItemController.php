<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('item.index',['items' => Item::orderBy('id','asc')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('item.create');
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
        $item = new Item();

        $item->item_id = $request->input('item_id');
        $item->title = $request->input('title');
        $item->price = $request->input('price');
        $item->intro = $request->input('intro');
        $item->num = $request->input('num');
        $item->category_id = $request->input('category_id');
        $item->available = $request->input('available');
        $item->save();

        return redirect()->route('item.show');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
        return view('item.show',['item' => $item]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
        return view('item.edit',['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        // 
        $newItem = [
            'item_id' => $request->input('item_id'),
            'title' => $request->input('title'),
            'price' => $request->input('price'),
            'intro' => $request->input('intro'),
            'num' => $request->input('num'),
            'category_id' => $request->input('category_id'),
            'available' => $request->input('available')
        ];

        $item->update($newItem);

        return redirect()->route('item.show',['item'=>$item->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
        $item->delete();

        $item = Item::orderBy('id','asc')->get();

        return redirect()->route('item.index');
    }
}
