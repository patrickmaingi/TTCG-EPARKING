<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class detailscontroller extends Controller
{
    public function save(Request $request){
        //dd($request -> all() );

        $detail = new detail;
        $detail->parking_zone = $request->parking_zone;
        $detail->vehicle_type = $request->vehicle_type;
        $detail->plate_number = $request->plate_number;
        $detail->amount_paid = $request->amount_paid;

        $detail->save();

        return back()-> with(['success' =>'saved']);
        

    }

    public function show(){
        return view('welcome')-> with(['data' => detail::all()]);
    }

    public function edit($id){
        return view('edits')->with('detail', detail::where('id', $id)->get());

    }
    
    public function saveEdit(Request $request){
        $detail = detail::where('id', $request->id)->first();
        
        if($detail){
            $detail->parking_zone = $request->parking_zone;
            $detail->vehicle_type = $request->vehicle_type;
            $detail->plate_number = $request->plate_number;
            $detail->amount_paid = $request->amount_paid;
    
            $detail->save();
            return redirect('/')-> with(['data' => detail::all()]); 
        }
    }
    
    public function delete($id){
        $detail = detail::where('id', $id);
        $detail->delete();
        
        return redirect('/')-> with(['data' => detail::all()]);

    }
}
