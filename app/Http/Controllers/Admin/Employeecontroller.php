<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//use App\Models\employees;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\Departments;
use App\Models\Designations;
use App\Models\User;
class Employeecontroller extends Controller
{
    //

    public function employee(){

        $data['employees']= User::get();
        return view('admin.employee',$data);
    }

    public function insertemployee()
    {
        $data['departments'] = Departments::select('id', 'department_name')->where('status', 1)->get();
        $data['designation'] = Designations::select('id', 'position_name')->where('status', 1)->get();
        return view('admin.insertemployee', $data);
    }

    public function createemployee(Request $request){
    
        $validate = $request ->validate([
         'name' => 'required',
         'email' => 'required',
         'password' => 'required',
         'dep_id' => 'required',
         'designation' => 'required',
         'dob' => 'required',
         'doj' => 'required',
         'address' => 'required',
         'aadhar_num' => 'required',
         'status' => 'required',
        ]);

        $insert_data = array(
/*database colom name here--*/ 'name' =>$request->name,/*form name here*/
                                'email' => $request->email,
                                'password' => $request->password,
                               'department_id' =>$request->dep_id,
                               'designation_id' =>$request->designation,
                               'dob' =>$request->dob,
                               'doj' =>$request->doj,
                               'address' =>$request->address,
                               'aadharcard' =>$request->aadhar_num,
                               'status' =>$request->status,
                            );

        $resp =User::insert($insert_data);
        if($resp){
            $request->session()->flash('message', 'Your date has been successfully inserted!');
        }else{
            $request->session()->flash('message', 'Something went wrong!');
        }
        return redirect('employee');


    }

    public function editemp(Request $request){
        //$data['employees'] = Employees::where('id', $request->id)->first();
        $data['employees'] = User::where('id', $request->id)->first();
        $data['departments'] = Departments::select('id', 'department_name')->where('status', 1)->get();
        $data['designation'] = Designations::select('id', 'position_name')->where('status', 1)->get();
        return view('admin.editemp', $data);

    }

    public function updateemp(Request $request)
    {

       /* $validate = $request ->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'dep_id' => 'required',
            'designation' => 'required',
            'dob' => 'required',
            'doj' => 'required',
            'address' => 'required', 
            'aadhar_num' => 'required',
            'status' => 'required',
           ]);*/

        $updateemp_arr = array(
            'name' =>$request->emp_name,/* edit form name here*/ 
            'email' => $request->email,
            'password' => $request->password,
           'department_id' =>$request->dep_id,
           'designation_id' =>$request->designation,
           'dob' =>$request->dob,
           'address' =>$request->address,
           'doj' =>$request->doj,
          
           'aadharcard' =>$request->aadhar_card,
           'status' =>$request->status,
        );
        $resp =User::where('id', $request->id)->update($updateemp_arr);
        if($resp){
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }else{
            $request->session()->flash('message', 'Your date has been successfully updated!');
        }
        return redirect('employee/edit/'.$request->id);
    }

    public function deleteemp(Request $request)
    {
        if( User::where('id',$request->empid)->delete()){
            $request->session()->flash('message', 'your data has been deleted');
        }else{
            $request->session()->flash('message', 'your data has not been deleted');
        }
        
        return redirect('employee');
    }
}
