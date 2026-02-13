<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        'id', 'page_id', 'slug', 'name', 'client_id', 'category_id', 'city', 'state', 'area_m2',
        'short_description', 'cover_image', 'content_payload', 'is_featured', 'is_visible', 'service_status',
        'created_at', 'updated_at',
    ];
    protected $useTimestamps = true;
    protected $validationRules = [
        'id' => 'required|max_length[36]',
        'slug' => 'required|min_length[3]|max_length[180]',
        'name' => 'required|min_length[3]|max_length[220]',
        'service_status' => 'required|in_list[draft,active,suspended,archived]',
    ];
}
