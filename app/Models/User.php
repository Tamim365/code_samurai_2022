<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Model

{
    protected $table = 'users';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    use HasFactory;
}
