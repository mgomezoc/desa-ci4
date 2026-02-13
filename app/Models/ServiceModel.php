<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        'id', 'page_id', 'slug', 'name', 'short_description', 'long_description', 'content_payload',
        'is_visible', 'service_status', 'created_at', 'updated_at',
    ];
    protected $useTimestamps = true;
    protected $validationRules = [
        'id' => 'required|max_length[36]',
        'slug' => 'required|min_length[3]|max_length[180]',
        'name' => 'required|min_length[3]|max_length[180]',
        'service_status' => 'required|in_list[draft,active,suspended,archived]',
    ];
}
