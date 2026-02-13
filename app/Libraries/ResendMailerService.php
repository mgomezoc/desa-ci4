<?php

namespace App\Libraries;

use Config\Resend as ResendConfig;
use Resend;
use RuntimeException;
use Throwable;

class ResendMailerService
{
    public function __construct(private ?ResendConfig $config = null)
    {
        $this->config ??= config('Resend');
    }

    /**
     * @param array{nombre:string,email:string,telefono:string,mensaje:string} $payload
     */
    public function sendContactEmail(array $payload): bool
    {
        if (! class_exists(Resend::class)) {
            throw new RuntimeException('Resend SDK no está instalado. Ejecuta composer require resend/resend-php.');
        }

        if ($this->config->apiKey === '' || str_starts_with($this->config->apiKey, 're_xxxxxxxxx')) {
            throw new RuntimeException('Configura una API key real de Resend en resend.apiKey dentro de .env.');
        }

        $subject = 'Contacto DESA 2026 - ' . $payload['nombre'];

        $html = '<h2>Nuevo contacto DESA 2026</h2>'
            . '<p><strong>Nombre:</strong> ' . esc($payload['nombre']) . '</p>'
            . '<p><strong>Email:</strong> ' . esc($payload['email']) . '</p>'
            . '<p><strong>Teléfono:</strong> ' . esc($payload['telefono']) . '</p>'
            . '<p><strong>Mensaje:</strong><br>' . nl2br(esc($payload['mensaje'])) . '</p>';

        $resend = Resend::client($this->config->apiKey);

        $sendPayload = [
            'from' => $this->config->fromName . ' <' . $this->config->fromEmail . '>',
            'to' => [$this->config->toEmail],
            'subject' => $subject,
            'html' => $html,
            'reply_to' => [$payload['email']],
        ];

        if ($this->config->ccEmail !== '') {
            $sendPayload['cc'] = [$this->config->ccEmail];
        }

        try {
            $resend->emails->send($sendPayload);

            return true;
        } catch (Throwable $exception) {
            log_message('error', 'Error enviando correo con Resend: {message}', ['message' => $exception->getMessage()]);

            return false;
        }
    }
}
