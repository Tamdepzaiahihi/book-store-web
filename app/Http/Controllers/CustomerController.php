<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Hash;
use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('1001a.register');
    }

    public function registerProcess(Request $request)
    {
        $customer = new Customer();
        $customer->customerID = $request->username;
        $customer->customerPass = Hash::make($request->password);
        $customer->customerFullname = $request->fullname;
        $customer->customerAddress = $request->address;
        $customer->customerEmail = $request->email;
        $res = $customer->save();
        if($res) {
            return back()->with('success', 'You have registered successfully!');
        } else {
            return back()->with('fail', 'Oh no!!! Something wrong!!!');
        }
    }

    public function login()
    {
        return view('1001a.login');
    }

    public function loginProcess(Request $request)
    {
        $customer = Customer::where('customerID', '=', $request->username)->first();
        if($customer) {
            if(Hash::check($request->password, $customer->customerPass)) {
                $request->session()->put('loginID', $customer->customerID);
                return redirect('products');
            } else {
                return back()->with('fail', 'Password not matches');
            }
        } else {
            return back()->with('fail', 'This email is not registered!');
        }        
    }

    public function logout()
    {
        if(Session::has('loginID')) {
            Session::pull('loginID');
            return redirect('products');
        }
    }
}