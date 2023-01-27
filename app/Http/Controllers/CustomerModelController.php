<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerModelController extends Controller
{
    //=============Mutators Casting Controller=================
    public function AddValues(){
        // $customer = DB::table('customer_models')->insert([
        //     'fname' => 'Dinesh',
        //     'lname' => 'Prajapati',
        //     'dob'   => '1999/01/12',
        //     'email' => 'dinesh@gmail.com',
        //     'gender'=> 'Male',
        //     'phone' => '0987651234',
        //     'city'  => 'Nadiad',
        // ]);
        //return $customer;
    }
}
