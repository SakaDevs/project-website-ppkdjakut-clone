<?php

namespace App\Models;

use Myth\Auth\Models\UserModel as MythUserModel;

class CustomUserModel extends MythUserModel
{
    protected $allowedFields = [
        'email', 
        'username', 
        'password_hash', 
        'reset_hash', 
        'reset_at', 
        'reset_expires',
        'activate_hash', 
        'status', 
        'status_message', 
        'active', 
        'force_pass_reset',
        'permissions', 
        'deleted_at',
        // tambahan
        'full_name',
        'phone_number',
        'user_image'
    ];
}
