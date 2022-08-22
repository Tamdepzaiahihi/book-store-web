<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducerController extends Controller
{
    public function listProducer()
    {
        $data = Producer::get();
        //return $data;
        return view('producer.listProducer', compact('data'));
    }

    public function saveP(Request $request)
    {
        //dd($request->all());
        $id = $request->id;
        $name = $request->name;
       

        $producer = new Producer();

        $producer->producerID = $id;
        $producer->producerName = $name;
        
        $producer->save();

        return redirect()->back()->with('success', 'Producer added successfully!');

    }

    public function updateP(Request $request)
    {
        $id = $request->id;
        Producer::where('producerID', '=', $id)->update([
            'producerName'=>$request->name
            
        ]);

        return redirect()->back()->with('success', 'Producer updated successfully!');
    }
    
    public function editP($id)
    {
        $data = Producer::get();
        return view('producer.editProducer', compact('data'));
    }

    public function addP()
    {
        $data = Producer::get();
        return view('producer.addProducer', compact('data'));
    }

    public function delete($id)
    {
        Product::where('producerID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Producer deleted successfully!');
    }
}
