<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;

class Customers extends Controller
{
    function registration(Request $req)
    {
        $answer = $req->validate([
            'first_name' => 'required|string|max:200',
            'last_name' => 'required|string|max:200',
            'customer_email' =>
            'required|email:filter|string|max:200|unique:customers',
            'gender' => 'required',
            'password' =>
            [
                'required',
                'string',
                'confirmed',
                password::min(8)->letters()->numbers()->mixedCase()->symbols()
            ],
            'password_confirmation' =>   [
                'required',
                'string',
                password::min(8)->letters()->numbers()->mixedCase()->symbols()
            ],
            'address' => 'required|string'
        ]);

        $first_name = $req->first_name;
        $last_name = $req->last_name;
        $customer_email = $req->customer_email;
        $gender = $req->gender;
        $password = md5($req->password);
        $re_password = md5($req->password_confirmation);
        $address = $req->address;

        DB::insert('insert into customers (
           customer_firstname,customer_lastname,customer_email,
           customer_gender,customer_password,customer_repassword,
           customer_address ) values (?,?,?,?,?,?,?)', [
            $first_name, $last_name, $customer_email,
            $gender, $password, $re_password, $address
        ]);

        $req->session()->flash('success', 'You have successfully registered');

        return redirect('login');
    }

    function loginIndex()
    {
        return (view('login'));
    }

    function storeIndex(Request $req)
    {
        $req->validate([
            'email' => 'string|required|email:filter',
            'password' => 'min:8|required|string'
        ]);

        $customer = Customer::where('customer_email', '=', $req->email)
            ->where('customer_password', '=', md5($req->password))->first();
        if ($customer) {
            $req->session()->put('user', $customer->customer_id);
            return redirect('homepage');
        } else {
            return back()->with('fail', 'invalid emaul or password');
        }
    }

    function homePage()
    {
        if (session()->has('user')) {
            $userSession = session('user');
            $user = Customer::find($userSession);
            $data = [
                'loggedInInfo' => $user
            ];
            return (view('homepage', $data));
        }
    }

    function logOut()
    {
        if (session()->has('user')) {
            session()->pull('user');
            return redirect('login');
        }
    }
}