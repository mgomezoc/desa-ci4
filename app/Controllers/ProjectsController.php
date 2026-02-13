<?php

namespace App\Controllers;

use App\Libraries\WebsiteContentService;
use CodeIgniter\Exceptions\PageNotFoundException;

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


    public function detail(string $slug): string
    {
        $payload = $this->contentService->getProjectDetailBySlug($slug);

        if (! $payload) {
            throw PageNotFoundException::forPageNotFound();
        }

        $project = $payload['project'];

        return view('project_detail', [
            'meta_title' => $project['meta_title'] ?: ($project['name'] . ' | Proyectos DESA Ingeniería'),
            'meta_desc' => $project['meta_description'] ?: ($project['short_description'] ?? ''),
            'project' => $project,
            'technologies' => $payload['technologies'] ?? [],
            'projectGalleryImages' => $payload['project_gallery_images'] ?? [],
            'relatedProjects' => $payload['related_projects'] ?? [],
            'projects' => $this->contentService->getProjects(),
        ]);
    }

}
