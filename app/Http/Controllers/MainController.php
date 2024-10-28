<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        //As linguas que cada pessoa fala
        $libguasPessoa = [
            'Carlos' => [
                'Português',
                'Inglês'
            ],
            'Mario' => [
                'Português',
            ],
            'Carolina' => [
                'Português',
                'Inglês',
                'FrancÊs'
            ],
            'João' => [
                'Português',
                'Inglês',
                'FrancÊs',
                'Japonês'
            ],

        ];

        return view('home', compact('libguasPessoa'));
    }
}
