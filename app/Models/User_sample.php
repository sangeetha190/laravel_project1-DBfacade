<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_sample extends Model
{
    use HasFactory;
    const CREATED_AT = 'custom_created_at'; // Custom created_at column name
    const UPDATED_AT = 'custom_updated_at'; // Custom updated_at column name

}
