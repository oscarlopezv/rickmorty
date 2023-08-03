<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class rickmortyController extends Controller
{
    public function index()
    {

        $apiInfo = Http::get('https://rickandmortyapi.com/api/character')['results'];
       
        // return $apiInfo;
        return view('rick.index',compact('apiInfo'));
    }

    public function detail($id)
    {
        $info = Http::get('https://rickandmortyapi.com/api/character/' . $id);
        return view('rick.detail',compact('info'));
    }

    public function filtro(Request $request)
    {
        // return $request;
        $name = $request->name;
        $species = $request->species;
        $apiInfo = Http::get('https://rickandmortyapi.com/api/character/?page=1&name='.$name.'&status=&gender=&species='.$species.'')['results'];
        return view('rick.index',compact('apiInfo'));
    }
}
