<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Constraint extends Model
{
    protected $table = 'constraints';
    protected $primaryKey = ['code','constraint_type'];
    public $timestamps = false;
    use HasFactory;
    use SoftDeletes;
    public $incrementing = false;
    protected $fillable = ['code','constraint_type','max_limit'];
}
