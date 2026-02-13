<?php

namespace App\Libraries;

use App\Models\ProjectModel;
use App\Models\ServiceModel;
use CodeIgniter\Database\BaseConnection;

class WebsiteContentService
{
    public function __construct(
        private ?BaseConnection $db = null,
        private ?ServiceModel $serviceModel = null,
        private ?ProjectModel $projectModel = null,
    ) {
        $this->db ??= db_connect();
        $this->serviceModel ??= new ServiceModel($this->db);
        $this->projectModel ??= new ProjectModel($this->db);
    }

    public function getServiceDetailBySlug(string $slug): ?array
    {
        $service = $this->serviceModel
            ->select('services.*, p.title AS page_title, p.slug AS page_slug, sm.meta_title, sm.meta_description, sm.schema_type, sm.schema_json')
            ->join('pages p', 'p.id = services.page_id', 'left')
            ->join('seo_meta sm', 'sm.page_id = p.id', 'left')
            ->where('services.slug', $slug)
            ->where('services.is_visible', 1)
            ->where('services.service_status', 'active')
            ->first();

        if (! $service) {
            return null;
        }

        $technologies = $this->db->table('service_technologies st')
            ->select('t.name, t.slug, t.logo_path, t.website_url')
            ->join('technologies t', 't.id = st.technology_id', 'inner')
            ->where('st.service_id', $service['id'])
            ->orderBy('t.name', 'ASC')
            ->get()
            ->getResultArray();

        $faqs = $this->db->table('faq_items')
            ->select('question, answer, sort_order')
            ->where('page_id', $service['page_id'])
            ->where('is_active', 1)
            ->orderBy('sort_order', 'ASC')
            ->get()
            ->getResultArray();

        $seo = [
            'meta_title' => $service['meta_title'] ?? null,
            'meta_description' => $service['meta_description'] ?? null,
            'schema_json' => $service['schema_json'] ?? null,
        ];

        return [
            'service'      => $service,
            'technologies' => $technologies,
            'faqs'         => $faqs,
            'seo'          => $seo,
        ];
    }

    public function getServices(): array
    {
        return $this->serviceModel
            ->select('services.*, p.title AS page_title, p.slug AS page_slug, sm.meta_title, sm.meta_description')
            ->join('pages p', 'p.id = services.page_id', 'left')
            ->join('seo_meta sm', 'sm.page_id = p.id', 'left')
            ->where('services.is_visible', 1)
            ->where('services.service_status', 'active')
            ->orderBy('services.name', 'ASC')
            ->findAll();
    }



    public function getProjectDetailBySlug(string $slug): ?array
    {
        $project = $this->projectModel
            ->select('projects.*, c.name AS client_name, c.slug AS client_slug, cat.name AS category_name, cat.slug AS category_slug, p.title AS page_title, p.slug AS page_slug, sm.meta_title, sm.meta_description, sm.schema_json')
            ->join('clients c', 'c.id = projects.client_id', 'left')
            ->join('categories cat', 'cat.id = projects.category_id', 'left')
            ->join('pages p', 'p.id = projects.page_id', 'left')
            ->join('seo_meta sm', 'sm.page_id = p.id', 'left')
            ->where('projects.slug', $slug)
            ->where('projects.is_visible', 1)
            ->where('projects.service_status', 'active')
            ->first();

        if (! $project) {
            return null;
        }

        $technologies = $this->db->table('project_technologies pt')
            ->select('t.name, t.slug, t.logo_path, t.website_url')
            ->join('technologies t', 't.id = pt.technology_id', 'inner')
            ->where('pt.project_id', $project['id'])
            ->orderBy('t.name', 'ASC')
            ->get()
            ->getResultArray();

        $relatedProjects = $this->projectModel
            ->select('projects.id, projects.slug, projects.name, projects.cover_image, projects.city, projects.state')
            ->where('projects.is_visible', 1)
            ->where('projects.service_status', 'active')
            ->where('projects.id !=', $project['id'])
            ->groupStart()
                ->where('projects.category_id', $project['category_id'])
                ->orWhere('projects.client_id', $project['client_id'])
            ->groupEnd()
            ->orderBy('projects.is_featured', 'DESC')
            ->orderBy('projects.name', 'ASC')
            ->findAll(6);

        if (empty($relatedProjects)) {
            $relatedProjects = $this->projectModel
                ->select('projects.id, projects.slug, projects.name, projects.cover_image, projects.city, projects.state')
                ->where('projects.is_visible', 1)
                ->where('projects.service_status', 'active')
                ->where('projects.id !=', $project['id'])
                ->orderBy('projects.is_featured', 'DESC')
                ->orderBy('projects.name', 'ASC')
                ->findAll(6);
        }

        return [
            'project' => $project,
            'technologies' => $technologies,
            'related_projects' => $relatedProjects,
        ];
    }

    public function getProjectCategories(): array
    {
        return $this->db->table('categories')
            ->select('id, name, slug')
            ->where('is_active', 1)
            ->orderBy('name', 'ASC')
            ->get()
            ->getResultArray();
    }

    public function getProjects(?int $categoryId = null): array
    {
        $builder = $this->projectModel
            ->select('projects.*, c.name AS client_name, cat.name AS category_name')
            ->join('clients c', 'c.id = projects.client_id', 'left')
            ->join('categories cat', 'cat.id = projects.category_id', 'left')
            ->where('projects.is_visible', 1)
            ->where('projects.service_status', 'active')
            ->orderBy('projects.is_featured', 'DESC')
            ->orderBy('projects.name', 'ASC');

        if ($categoryId) {
            $builder->where('projects.category_id', $categoryId);
        }

        return $builder->findAll();
    }
}
