<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerModelController extends Controller
{
    //=============Mutators Casting Controller=================
    public function AddValues(){
        // $customer = DB::table('customer_models')->insert([
        //     'fname' => 'Manan',
        //     'lname' => 'Patel',
        //     'dob'   => '1999/01/12',
        //     'email' => 'mp05@gmail.com',
        //     'gender'=> 'Male',
        //     'phone' => '9197651234',
        //     'city'  => 'Canada',
        // ]);
        // return $customer;
    }

}

