<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Proposal extends Model
{
    protected $table = 'proposals';
    protected $primaryKey = 'project_id';
    public $timestamps = false;
    public $incrementing = false;
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['project_id','name', 'location', 'latitude','longitude','exec','cost','timespan','goal','proposal_date'];

    public function components()
    {
        return $this->hasMany(Component::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}
