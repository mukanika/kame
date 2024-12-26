<?php

namespace App\Http\Controllers;

//use App\Http\Requests\ExhibitionRequest;
//use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
//use Illuminate\Pagination\Paginator;
//use Illuminate\Pagination\LengthAwarePaginator;

class ItemController extends Controller
{
  public function index()
  {
    //$products = product::all();
    return view('index');
  }

}