<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    public $timestamps = false;
    protected $primaryKey = 'post_id';
    use HasFactory;
    protected $fillable = ['title', 'content'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
