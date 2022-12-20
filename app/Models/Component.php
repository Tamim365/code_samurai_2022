<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Component extends Model
{
    protected $table = 'components';
    protected $primaryKey = 'component_id';
    public $incrementing = false;
    public $timestamps = false;
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['component_id','project_id', 'executing_agency', 'component_type','depends_on','budget_ratio'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
