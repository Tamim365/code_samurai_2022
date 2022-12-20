<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Agency extends Model
{
    protected $table = 'agencies';
    protected $primaryKey = 'code';
    public $timestamps = false;
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['code','name', 'type', 'description'];
    public $incrementing = false;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }
}
