<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'FrikiVerse';
        return view('plantillas/header', $data).view('plantillas/navbar').view('front/principal').view('plantillas/footer');
    }

    public function contacto()
    {
        $data['titulo'] = 'Contacto';
        return view('plantillas/header', $data).view('plantillas/navbar').view('front/contacto').view('plantillas/footer');
    }

    public function quienes_somos()
    {
        $data['titulo'] = '¿Quienes Somos?';
        return view('plantillas/header', $data).view('plantillas/navbar').view('front/quienesSomos').view('plantillas/footer');
    }

    public function comercializacion()
    {
        $data['titulo'] = 'Comercializaciòn';
        return view('plantillas/header', $data).view('plantillas/navbar').view('front/comercializacion').view('plantillas/footer');
    }
    
    public function productos()
    {
        $data['titulo'] = 'Productos';
        return view('plantillas/header', $data).view('plantillas/navbar').view('front/productos').view('plantillas/footer');
    }

    public function terminos_usos()
    {
        $data['titulo'] = 'Terminos y Usos';
        return view('plantillas/header', $data).view('plantillas/navbar').view('front/terminosyUsos').view('plantillas/footer');
    }
}
