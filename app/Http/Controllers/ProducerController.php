<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function listProducer()
    {
        $data = Customer::get();
        //return $data;
        return view('producer.listProducer', compact('data'));
    }

    public function save(Request $request)
    {
        //dd($request->all());
        $id = $request->id;
        $name = $request->name;
       

        $producer = new Producer();

        $product->producerID = $id;
        $product->producerName = $name;
        
        $producer->save();

        return redirect()->back()->with('success', 'Producer added successfully!');

    }

    public function add()
    {
        
        return view('producer.addNew', compact('data'));
    }

    public function delete($id)
    {
        Product::where('producerID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Producer deleted successfully!');
    }
}
