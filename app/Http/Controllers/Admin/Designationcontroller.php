<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\designations;
use Symfony\Component\HttpFoundation\Session\Session;

class Designationcontroller extends Controller
{
    //
    public function designation(){
        $data['designations'] = Designations::get();
    return view('admin.designation',$data);
    }

    public function insertposition(){
        return view('admin.insertposition');
    }

    public function createposition(Request $request){
        $validate = $request->validate([
            'position_name' => 'required',
            'status' => 'required'
        ]);

        $addnewpos = array(
            'position_name' => $request->position_name,
            'status' => $request->status
        );
        $add = Designations::where('id', $request->id)->insert($addnewpos);
        if($add){
            $request->session()->flash('msg', 'position added successfully');
        }else{
            $request->session()->flash('msg','data not added');
        }
        return redirect('designation');
        
    }

    public function edipposition(Request $request){  
        $data['designations']= Designations::where('id', $request->id)->first();
        return view('admin.edipposition',$data);
    }

    public function updateposition(Request $request){
        $updatenewpos = array(
            'position_name' => $request->position_name,
            'status' => $request->status
        );
        $update = Designations::where('id', $request->id)->update($updatenewpos);
        //$add = Designations::where('id', $request->id)->insert($update);
        if($update){
            $request->session()->flash('msg', 'position added successfully');
        }else{
            $request->session()->flash('msg','data not added');
        }
        return redirect('designation');
    }

    public function delete(Request $request){
        if( Designations::where('id',$request->designation_id)->delete()){ 
            $request->session()->flash('msg', 'your data has been deleted');
        }else{
            $request->session()->flash('msg', 'your data has not been deleted');
        }
        
        return redirect('designation');

    }
}


