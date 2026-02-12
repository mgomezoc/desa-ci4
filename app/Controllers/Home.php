<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Datos extraídos del PDF para SEO [cite: 22, 23]
        $data = [
            'meta_title' => 'DESA Ingeniería | Diseño Estructural y Construcción Industrial',
            'meta_desc'  => 'Expertos en ingenierías de valor, diseño estructural, arquitectura y construcción industrial, comercial y residencial. Más de 20 años de experiencia.',
        ];

        return view('home', $data);
    }
}
