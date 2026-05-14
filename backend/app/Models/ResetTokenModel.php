<?php

namespace App\Models;

use CodeIgniter\Model;

class ResetTokenModel extends Model
{
    protected $table = 'reset_tokens';
    protected $primaryKey = 'id';
    protected $allowedFields = ['user_id', 'token', 'expires_at', 'created_at'];
    protected $useTimestamps = false;
}
