<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $table = 'blogs';
    protected $primaryKey='id';
    protected $guarded = [];

    public function blog_comments(){
        return $this->hasMany(BlogComment::class,'blog_id', 'id');
    }
}
