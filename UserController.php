<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

class UserController extends Controller
{
    function index()
    {
        return view('patient/index');
    }

    function admin_dashboard()
    {
        return view('admin/index');
    }

    function add(Request $reg)
    {
        if($reg->submit=="Add")
        {
            $name=$reg->pname;
            $email=$reg->pemail;
            $password = $reg->ppasss;
            $password = Hash::make($password);
            $mobile = $reg->pmobile;

            $k=new User();
            $k->name=$name;
            $k->email=$email;
            $k->password=$password;
            $k->mobile=$mobile;
            $k->user_type=0;
            $k->save();
            $msg = "Saved Successfully";
            return view("patient/add",compact('msg'));
        }
        else
        {
            return view("patient/add");
        }
    }

    function list()
    {
        $k = User::where('user_type','0')->get();
        return view("patient/list",compact('k'));
    }

    function doctor_list()
    {
        $k = User::where('user_type','2')->get();
        return view("doctor/list",compact('k'));
    }

    function app_list()
    {
        $k = Appointment::all();
        return view("admin/app_list",compact('k'));
    }


    function add_doctor(Request $reg)
    {
        if($reg->submit=="Add")
        {
            $name=$reg->pname;
            $email=$reg->pemail;
            $password = $reg->ppasss;
            $password = Hash::make($password);
            $mobile = $reg->pmobile;

            $k=new User();
            $k->name=$name;
            $k->email=$email;
            $k->password=$password;
            $k->mobile=$mobile;
            $k->user_type=2;
            $k->save();
            $msg = "Saved Successfully";
            return view("doctor/add",compact('msg'));
        }
        else
        {
            return view("doctor/add");
        }
    }

    function book_appointment()
    {
        $patient = User::where('user_type','0')->get();
        $doctor = User::where('user_type','2')->get();
        return view("admin/book_appointment",compact('patient', 'doctor'));
    }

    function book(Request $reg)
    {
        $patient_name=$reg->pname;
        $mobile=$reg->mobile;
        $doctor_name = $reg->dname;
        $date = $reg->date;
        $time = $reg->time;
        $message = $reg->message;

        $k=new Appointment();
        $k->patient_name=$patient_name;
        $k->mobile=$mobile;
        $k->docter_name=$doctor_name;
        $k->date=$date;
        $k->time=$time;
        $k->message=$message;
        $k->save();

        $msg = "Saved Successfully";
        return redirect("admin/appointment/list");
    }

    function edit_app($id)
    {
        $k = Appointment::find($id);
        return view("admin/edit_appointment",compact('k'));
    }
    function update_app(Request $reg)
    {
        $patient_name=$reg->pname;
        $mobile=$reg->mobile;
        $doctor_name = $reg->dname;
        $date = $reg->date;
        $time = $reg->time;
        $message = $reg->message;
        $id = $reg->id;

        $k = Appointment::find($id);
        $k->patient_name=$patient_name;
        $k->mobile=$mobile;
        $k->docter_name=$doctor_name;
        $k->date=$date;
        $k->time=$time;
        $k->message=$message;
        $k->save();

        $msg = "Updated Successfully";
        return redirect("admin/appointment/list");
    }
    function register(Request $reg)
    {
        if($reg->submit=="Register")
        {
            $name=$reg->name;
            $email=$reg->email;
            $password=$reg->password;
            $password = Hash::make($password);
            $mobile=$reg->mobile;
            $user_type = $reg->user_type;
            $k=new User();
            $k->name=$name;
            $k->email=$email;
            $k->password=$password;
            $k->mobile=$mobile;
            $k->user_type=$user_type;
            $k->save();
            return redirect("login");
        }
        else
        {
            return view("register");
        }
    }

    function login(Request $req)
    {
        return view("login");

    }

    function login_check(Request $req)
    {
         $email = $req->email;
            $password = $req->password;


            $k = Auth::attempt(['email' => $email, 'password' => $password]);



            if($k)
            {

                if(Auth::user()->user_type==0)
                {
                    return redirect('patient/dashboard');
                }
                else if(Auth::user()->user_type==1)
                {
                    return redirect("admin/dashboard");
                }
                else
                {
                    return redirect("logout");
                }
            }
            else
            {
                echo "Invalid Login";
            }
        }


    function logout()
    {
        Auth::logout();
        return redirect('login');
    }

    function my_appointment()
    {
        $mobile = Auth::user()->mobile;

        $k = Appointment::where('mobile',$mobile)->get();
        return view("patient/my_appointments",compact('k'));
    }
}
