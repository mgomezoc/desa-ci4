<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Resend extends BaseConfig
{
    public string $apiKey = '';
    public string $fromEmail = 'onboarding@resend.dev';
    public string $fromName = 'DESA Ingeniería';
    public string $toEmail = 'hola@desaingenieria.com';
    public string $ccEmail = '';

    public function __construct()
    {
        parent::__construct();

        $this->apiKey = (string) env('resend.apiKey', $this->apiKey);
        $this->fromEmail = (string) env('resend.fromEmail', $this->fromEmail);
        $this->fromName = (string) env('resend.fromName', $this->fromName);
        $this->toEmail = (string) env('resend.toEmail', $this->toEmail);
        $this->ccEmail = (string) env('resend.ccEmail', $this->ccEmail);
    }
}
