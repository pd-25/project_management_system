<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project_types;
use Symfony\Component\HttpFoundation\Session\Session;

class ProjecttypeController extends Controller
{

    public function projecttype()
    {
        $data['project_types'] = Project_types::get();
        return view('admin.project-type-list', $data);
    }
    public function add()
    {
       // $data['project_type'] = Project_types::where('', $request->id)->first();
        return view('admin.add-project-type' );
    }

    public function edit(Request $request)
    {
        $data['project_type'] = Project_types::where('id', $request->id)->first();
        return view('admin.edit-project-type', $data);
    }

    public function update(Request $request)
    {
        $update_arr = array(
            'project_name' => $request->project_name,
            'status' => $request->status
        );
        $resp = Project_types::where('id', $request->id)->update($update_arr);
        if($resp){
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }else{
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }
        return redirect('project-type/edit/'.$request->id);
    }


    //-------------------------------------------------------------------------------------------//
    
    public function destroy(Request $request)
    {
        if(Project_types::where('id', $request->id)->delete()){
            $request->session()->flash('message', 'Your date has been successfully deleted!');
        }else{
            $request->session()->flash('message', 'Your date has been successfully deleted!');
        }
        return redirect('project-type');
    }
 
}
