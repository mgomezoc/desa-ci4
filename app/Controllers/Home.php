<?php

namespace App\Controllers;

use App\Libraries\ResendMailerService;

class Home extends BaseController
{
    public function __construct(private ?ResendMailerService $resendMailer = null)
    {
        $this->resendMailer ??= new ResendMailerService();
    }

    public function index()
    {
        helper(['form', 'url']);

        $data = [
            'meta_title' => 'DESA Ingeniería | Portafolio de Proyectos',
            'meta_desc'  => 'Portafolio de proyectos de DESA Ingeniería: introducción, objetivos, servicios, especificaciones y normas, tecnología aplicada, proyectos, clientes y contacto.',
        ];

        if (strtolower($this->request->getMethod()) === 'post') {
            $rules = [
                'nombre'  => 'required|min_length[3]|max_length[120]',
                'email'   => 'required|valid_email|max_length[150]',
                'telefono'=> 'required|min_length[8]|max_length[30]',
                'mensaje' => 'required|min_length[10]|max_length[2000]',
            ];

            if (! $this->validate($rules)) {
                return view('home', $data + ['validation' => $this->validator]);
            }

            $nombre = (string) $this->request->getPost('nombre');
            $email  = (string) $this->request->getPost('email');
            $telefono = (string) $this->request->getPost('telefono');
            $mensaje = (string) $this->request->getPost('mensaje');

            $emailSent = $this->resendMailer->sendContactEmail([
                'nombre' => $nombre,
                'email' => $email,
                'telefono' => $telefono,
                'mensaje' => $mensaje,
            ]);

            if ($emailSent) {
                return redirect()->to(base_url('/#contacto'))->with('success', 'Tu mensaje fue enviado correctamente.');
            }

            return redirect()->to(base_url('/#contacto'))->with('error', 'No fue posible enviar tu mensaje. Intenta nuevamente.');
        }

        return view('home', $data);
    }
}
