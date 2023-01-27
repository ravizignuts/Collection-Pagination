<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\DB;

class PaginationQBController extends Controller
{
    public function ShowQBPagination(){
        $data = DB::table('customer_models')->Paginate(12);
        //For more designed view we have to add path App/Providers/AppserviceProvider ==> use Illuminate\Pagination\Paginator;
        //add in root method Paginator::useBootstrap;
        //$data = DB::table('customer_models')->simplePaginate(10);
        //$data->withPath('/home/index');
        //dd($data);
        return view('home',['data'=>$data]);
    }
    public function ShowEloquentPagination(){
        // $data = Data::where('gender','=','male')->paginate(5);
        $data = CustomerModel::Paginate(10);
        // dd($data)
        return view('home',['customer'=>$data]);
    }
}
