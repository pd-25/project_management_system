<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\departments;
use Symfony\Component\HttpFoundation\Session\Session;

class Departmentcontroller extends Controller
{

    public function Department()
    {
        $data['departments'] = Departments::get();
        return view('admin.department-list', $data);
    }

    public function edit(Request $request)
    {
        $data['departments'] = Departments::where('id', $request->id)->first();
        return view('admin.edit-department', $data);
    }

    public function update(Request $request)
    {
        $update_arr = array(
            'department_name' => $request->department_name,
            'status' => $request->status
        );
        $resp =Departments::where('id', $request->id)->update($update_arr);
        if($resp){
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }else{
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }
        return redirect('department/edit/'.$request->id);
    }

    public function insertdepp()
    {
        return view('admin.insertdepart');
    }

    public function create(Request $request)
    {
        
        $validreqt = $request->validate([
/*form name here--*/ 'department_name' => 'required',
            
                     'status' => 'required', 
        ]);
        $instr_data = array(
/*database colom name here--*/ 'department_name' =>$request->department_name,/*form name here*/
                               'status' => $request->status,
        );
        $resp =Departments::insert($instr_data);
        if($resp){
            $request->session()->flash('message', 'Your date has been successfully inserted!');
        }else{
            $request->session()->flash('message', 'Something went wrong!');
        }
        return redirect('department');
        
    }

    public function destroy(Request $request )
    {
        
        
        if( Departments::where('id',$request->id)->delete()){
            $request->session()->flash('message', 'your data has been deleted');
        }else{
            $request->session()->flash('message', 'your data has not been deleted');
        }
        
        return redirect('department');
        

    }
    public function newdestroy(Request $request)
    {
        if( Departments::where('id',$request->deptid)->delete()){
            $request->session()->flash('message', 'your data has been deleted');
        }else{
            $request->session()->flash('message', 'your data has not been deleted');
        }
        
        return redirect('department');
    }
}
