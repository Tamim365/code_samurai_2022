<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'project_id';
    public $incrementing = false;
    public $timestamps = false;
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['project_id','name', 'location', 'latitude','longitude','exec','cost','timespan','goal','start_date','completion','actual_cost'];

    public function components()
    {
        return $this->hasMany(Component::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
