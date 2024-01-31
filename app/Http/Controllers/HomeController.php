<?php

namespace App\Http\Controllers;

use App\Models\recette;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $recettes = recette::query()->paginate(perPage:1);
        return view(view:'recette.index',['recettes'=>$recettes]);

    }
}
