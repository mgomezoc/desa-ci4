<?php

namespace App\Models;

use CodeIgniter\Model;

class SeoMetaModel extends Model
{
    protected $table = 'seo_meta';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        'id', 'page_id', 'meta_title', 'meta_description', 'canonical_url', 'robots', 'schema_type',
        'created_at', 'updated_at',
    ];
    protected $useTimestamps = true;
    protected $validationRules = [
        'id' => 'required|max_length[36]',
        'page_id' => 'required|max_length[36]',
        'meta_title' => 'required|max_length[190]',
        'meta_description' => 'required|max_length[320]',
    ];
}
