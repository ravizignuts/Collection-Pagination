<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\DB;

class PaginationQBController extends Controller
{
    public function ShowQBPagination(){
        $datas = DB::table('customer_models')->Paginate(12);
        //For more designed view we have to add path App/Providers/AppserviceProvider ==> use Illuminate\Pagination\Paginator;
        //add in root method Paginator::useBootstrap;
        //$datas = DB::table('customer_models')->simplePaginate(10);
        //$datas->withPath('/home/index');
        //dd($data);
        return view('home',['datas'=>$datas]);
    }
    public function ShowEloquentPagination(){
        // $datas = Data::where('gender','=','male')->paginate(5);
        $datas = CustomerModel::Paginate(10);
        return view('home',['datas'=>$datas]);
    }
}
