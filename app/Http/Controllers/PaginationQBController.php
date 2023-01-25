<?php

namespace App\Http\Controllers;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationQBController extends Controller
{
    public function ¸(){
        $datas = DB::table('datas')->Paginate(12);
        //For more designed view we have to add path App/Providers/AppserviceProvider ==> use Illuminate\Pagination\Paginator;
        //add in root method Paginator::useBootstrap;
        //$datas = DB::table('datas')->simplePaginate(10);
        //$datas->withPath('/home/index');
        //dd($data);
        return view('home',['datas'=>$datas]);
    }
    public function ShowEloquentPagination(){
        // $datas = Data::where('gender','=','male')->paginate(5);
        $datas = Data::Paginate(10);
        return view('home',['datas'=>$datas]);
    }
}
