<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $table = 'store';
    protected $primaryKey='id';
    protected $guarded = [];

    public function product(){
        return $this->belongsTo(Product::class,'store_id', 'id');
    }



}
