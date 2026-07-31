<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Banner;

class HomeController extends Controller{


    // Método HOME - Carregar a INDEX (HOME)
    public function home(){


    //Busca a lista de Banner para exibie na Home (View)
    //$listaBanner = Banner::where('status_banner', 'ATIVO')->inRandomOrder()->get();
    // inRandomOrder deixa o id aleatorio

    //dd($listaBanner); 
    //var_dump($listaBanner);



    return view('site.home.home');

    }



} // FIM DA CLASS