<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey='id';
    protected $guarded = [];

    public function product_category(){
        return $this->belongsTo(Product_categry::class, 'product_category_id','id');
    }

    public function product_comments(){
        return $this->hasMany(ProductComments::class, 'product_id','id');
    }

    public function product_images(){
            return $this->hasMany(ProductImages::class, 'product_id','id');
    }

    public function product_detalails(){
        return $this->hasMany(Products::class, 'product_id','id');
    }

    public function order_details(){
        return $this->hasMany(OederDetails::class, 'product_id','id');
    }
    public function store(){
        return $this->belongsTo(Store::class, 'store_id','id');
    }
}
