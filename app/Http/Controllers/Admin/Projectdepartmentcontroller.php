<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Departments;
use Illuminate\Http\Request;
use App\Models\projectdeps;
use App\Models\Project_types;
use Symfony\Component\HttpFoundation\Session\Session;

class Projectdepartmentcontroller extends Controller
{
    public function projectdepertment(){
 $data['projectdeps']=Projectdeps::get();
 return view('admin.projectdepartment',$data);
    }

    public function add_projectdepertment(){

        $data['project_id'] = Project_types::select('id', 'project_name')->where('status', 1)->get();
        $data['department_name'] = Departments::select('id', 'department_name')->where('status', 1)->get();
        
        return view('admin.add_projectdepertment',$data);

    }

    public function create_projectdepertment(Request $request){
        $create = array(
            'project_id' => $request->project_id,
            'dep_id' => $request->department_name
        );

        if(Projectdeps::where('id', $request->id)->insert($create)){
            $request->session()->flash('msg', 'data added successfully');
        } else{
            $request->session()->flash('msg', 'data not added ');
        }
        return redirect('projectdepertment');
    }
}
