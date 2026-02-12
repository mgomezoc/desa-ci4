<?php

namespace App\Controllers;

use App\Libraries\WebsiteContentService;

class ProjectsController extends BaseController
{
    public function __construct(private ?WebsiteContentService $contentService = null)
    {
        $this->contentService ??= new WebsiteContentService();
    }

    public function index(): string
    {
        $categoryId = $this->request->getGet('category_id');
        $categoryId = is_numeric($categoryId) ? (int) $categoryId : null;

        $data = [
            'meta_title'        => 'Portafolio de Proyectos de Ingeniería en Monterrey | DESA Ingeniería',
            'meta_desc'         => 'Conoce proyectos industriales, comerciales y deportivos desarrollados por DESA Ingeniería en Monterrey y el norte de México.',
            'projects'          => $this->contentService->getProjects($categoryId),
            'categories'        => $this->contentService->getProjectCategories(),
            'active_category'   => $categoryId,
        ];

        return view('projects_index', $data);
    }
}
