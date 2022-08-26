<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;
use App\Models\Product;
use App\Models\Producer;
use App\Models\Customer;



class AdminController extends Controller
{
   
    public function register()
    {
        return view('1001a.registerAdmin');
    }
    public function registerAdminProcess(Request $request)
    {
        $admin = new Admin();
        $admin->adminID = $request->username;
        $admin->adminPass = Hash::make($request->password);
        $admin->adminFullname = $request->fullname;
       
       
        $res = $admin->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh no!!! Something wrong!!!');
        }
    }
    public function admin()
    {
        return view('1001a.loginAdmin');
    }
    
    public function loginAdminProcess(Request $request)
    {
        $admin = Admin::where('adminID', '=', $request->username)->first();
        if($admin) {
            if(Hash::check($request->password, $admin->adminPass)) {
                $request->session()->put('loginAdminID', $admin->adminID);
                return view('1001a.admin');
            } else {
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered!');
        }        
    }

    public function deleteA($id)
    {
        Admin::where('adminID', '=', $id)->delete();
        return redirect()->back()->with('success', 'Admin deleted successfully!');
    }

    public function logoutAdmin()
    {
        return view('1001a.home');
    }

    public function listProduct()
    {
        $data = Product::get();
        //return $data;
        return view('list', compact('data'));
    }
    public function listAdmin()
    {
        $data = Admin::get();
        //return $data;
        return view('admin.listAdmin', compact('data'));
    }

    public function listCustomer()
    {
        $data = Customer::get();
        //return $data;
        return view('customer.listCustomer', compact('data'));
    }

    public function listProducer()
    {
        $data = Producer::get();
        //return $data;
        return view('producer.listProducer', compact('data'));
    }

    public function editA($id) {
        $data = Admin::where('adminID', '=', $id)->first();
        return view('admin.editA', compact('data'));
    }
    

    public function saveadmininfo(Request $request)
    {
        $id = $request->username;
        Admin::where('adminID', '=', $id)->update([
            'adminFullname'=>$request->name,
            'adminPass'=>Hash::make($request->password)
        ]);

        return redirect()->back()->with('success', 'Admin updated successfully!');
    }


}