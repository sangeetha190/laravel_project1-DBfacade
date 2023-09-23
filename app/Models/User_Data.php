<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Data extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'phone', 'age'];
}
