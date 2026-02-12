<?php

namespace App\Controllers;

class Home extends BaseController
{
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

            $emailService = service('email');
            $emailService->setTo('jmedrano@desaingenieria.com');
            $emailService->setCC('hdelarosa@desaingenieria.com');
            $emailService->setSubject('Contacto DESA 2026 - ' . $nombre);
            $emailService->setMailType('html');

            $body = '<h2>Nuevo contacto DESA 2026</h2>'
                . '<p><strong>Nombre:</strong> ' . esc($nombre) . '</p>'
                . '<p><strong>Email:</strong> ' . esc($email) . '</p>'
                . '<p><strong>Teléfono:</strong> ' . esc($telefono) . '</p>'
                . '<p><strong>Mensaje:</strong><br>' . nl2br(esc($mensaje)) . '</p>';

            $emailService->setMessage($body);

            if ($emailService->send()) {
                return redirect()->to(base_url('/#contacto'))->with('success', 'Tu mensaje fue enviado correctamente.');
            }

            return redirect()->to(base_url('/#contacto'))->with('error', 'No fue posible enviar tu mensaje. Intenta nuevamente.');
        }

        return view('home', $data);
    }
}
