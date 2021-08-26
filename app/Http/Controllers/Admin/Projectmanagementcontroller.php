<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\project_managements;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Project_types;

class Projectmanagementcontroller extends Controller
{

    public function projectmanagement()
    {
        $data['projectmanagements'] = Project_managements::get();
        return view('admin.projectmanagement', $data);
    }

    public function insert_projectmanagement(){
        $data['project_types'] = Project_types::select('id', 'project_name')->where('status', 1)->get();
        
        return view('admin.insert_projectmanagement',$data);
    }

    public function create_projectmanagement(Request $request){

        $validate = $request ->validate([
            'project_Name' => 'required',
            'projecttype_id' => 'required',
            //'image' => 'required',
            'description' => 'required',
            'owner_name' => 'required',
            'owner_phn_num' => 'required',
            'owner_email' => 'required',
            'actual_start_date' => 'required',
            'actual_end_date' => 'required',
            'expected_end_date' => 'required',
           ]);
   
           $insert_data = array(
   /*database colom name here--*/ 'project_name' =>$request->project_Name,/*form name here*/
                                   'project_type_id' => $request->projecttype_id,
                                   //'image' => $request->image,
                                  'description' =>$request->description,
                                  'owner_name' =>$request->owner_name,
                                  'owner_phn' =>$request->owner_phn_num,
                                  'owner_email' =>$request->owner_email,
                                  'actual_start_date' =>$request->actual_start_date,
                                  'actual_end_date' =>$request->actual_end_date,
                                  'expected_end_date' =>$request->expected_end_date,
                               );
   
           $resp =Project_managements::insert($insert_data);
           if($resp){
               $request->session()->flash('message', 'Your date has been successfully inserted!');
           }else{
               $request->session()->flash('message', 'Something went wrong!');
           }
           return redirect('projectmanagement');
   
   
    }

    public function deletePM(Request $request){
        $a = Project_managements::where('id', $request->deletePM)->delete();
        if($a){
            $request->session()->flash('message', 'Your date has been successfully deleted!');
        }else{
            $request->session()->flash('message', 'Something went wrong!');
        }
        return redirect('projectmanagement');
    }

    public function edit_ProjectManagement(Request $request){
        $data['projectmanagements'] = Project_managements::where('id', $request->id)->first();
        $data['project_types'] = Project_types::select('id', 'project_name')->where('status', 1)->get();
        return view('admin.edit_ProjectManagement',$data);
    }
    public function update_ProjectManagement(Request $request){
        $updateemp_arr = array(
             /*database colom name here--*/ 'project_name' =>$request->project_name,/*form name here*/
                                            'project_type_id' => $request->project_type_id,
             //'image' => $request->image,
                                             'description' =>$request->description,
                                             'owner_name' =>$request->owner_name,
                                             'owner_phn' =>$request->owner_phn,
                                             'owner_email' =>$request->owner_email,
                                             'actual_start_date' =>$request->actual_start_date,
                                             'actual_end_date' =>$request->actual_end_date,
                                             'expected_end_date' =>$request->expected_end_date,
        );
        $resp =Project_managements::where('id', $request->id)->update($updateemp_arr);
        if($resp){
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }else{
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }
        return redirect('projectmanagement');
    }
   
}

