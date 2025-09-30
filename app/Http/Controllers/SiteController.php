<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function imoveis($modalidade)
    {
        $data = ['modalidade' => $modalidade];

        return view('listar-imoveis', $data);
    }

    public function sobre()
    {
        return view('sobre');
    }

    public function blog()
    {
        $data = ['current_date' => date('d/m/Y')];

        return view('blog', $data);
    }

    public function contato()
    {
        return view('contato');
    }
}
