<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

use \Gumlet\ImageResize;
// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function employee()
    {
        $data = Employee::get();
        return view('employees',compact('data'));
    }
    public function destroy($id)
    {
        $emp = Employee::find($id);
        $emp->delete();
        return redirect()->route('empList');
    }
    public function edit($id)
    {
        $emp = Employee::find($id);
        return view('edit_employee',compact('emp'));
    }
    public function update($id,Request $request)
    {
        $emp = Employee::find($id);

        $emp->EmpName    = $request->name;
        $emp->Designation    = $request->position;
        $emp->Department    = $request->dept;
        $emp->JoiningDate    = $request->dateofjoin;
        $emp->salary    = $request->salary;
        $emp->email    = $request->email;

        $emp->update();
        return redirect()->route('empList');
    }

    public function uploadimg(Request $request){

        $image = $request->file('photo');
        $realName = $image->getClientOriginalName();
        $input['imagename'] = time().'_'.$realName;
        $destinationPath = public_path('/upload');

        $imgname = $input['imagename'];

        $img = Image::make($image)->crop(400, 600, 25, 25);
        //$img = Image::make($imgname)->resize(300, 200);

        $img->save('upload/'.$imgname);

    }
}
