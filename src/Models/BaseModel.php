<?php

namespace App\Models;

use App\Database\DatabaseManager;

class BaseModel
{
    protected $db;

    public function __construct()
    {
        $this->db = (new DatabaseManager())->getPDO();
    }
}
