<?php

namespace App\Controllers;

use App\Libraries\WebsiteContentService;
use CodeIgniter\Exceptions\PageNotFoundException;

class ServiceController extends BaseController
{
    public function __construct(private ?WebsiteContentService $contentService = null)
    {
        $this->contentService ??= new WebsiteContentService();
    }

    public function detail(string $slug): string
    {
        $payload = $this->contentService->getServiceDetailBySlug($slug);

        if (! $payload) {
            throw PageNotFoundException::forPageNotFound();
        }

        $service = $payload['service'];

        $data = [
            'meta_title'   => $service['meta_title'] ?: ($service['name'] . ' | DESA Ingeniería'),
            'meta_desc'    => $service['meta_description'] ?: ($service['short_description'] ?? ''),
            'service'      => $service,
            'technologies' => $payload['technologies'],
            'faqs'         => $payload['faqs'] ?? [],
            'seo'          => $payload['seo'] ?? [],
        ];

        return view('service_detail', $data);
    }

    public function index(): string
    {
        $services = $this->contentService->getServices();

        return view('services_index', [
            'meta_title' => 'Servicios de Ingeniería | DESA Ingeniería',
            'meta_desc' => 'Conoce todos los servicios de ingeniería y arquitectura de DESA Ingeniería.',
            'services' => $services,
        ]);
    }
}
