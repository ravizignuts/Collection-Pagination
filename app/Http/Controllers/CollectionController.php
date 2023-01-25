<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    function index(){
        // $collection = collect([1,2,3,4,5,6,7,8,9]);
        // //dd($collection);
        // $data = $collection->all();
        // $data = $collection->avg();
        // $data = $collection->chunk(2);
        // // return $data;
        // dd($data);
        // $collection = collect(['ravi', 'thakor', null])->map(function ($name) {
        //     return strtoupper($name);
        // })->reject(function ($name) {
        //     return empty($name);
        // });
        // $data = $collection->reverse(2);
        // dd($data->toArray());
        //$data = Data::get();
        //
        // $output = $data->search(function($data){
        //     return $data->email == 'lharber@hayes.com';
        // });

        // $output=$data->filter(function($data){
        //         return $data->id <= 10 && $data->gender == 'male';

        // });
        //

        /////====================>>Query Builder Practice<<=====================////
        //$data = DB::table('datas')->inRandomOrder()->get();
        //$data = DB::table('datas')->inRandomOrder()->first();

        //dd($data);

    }
}
