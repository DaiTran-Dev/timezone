<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = 'product';
    protected  $fillable = ['name','price','priceSale','quantity','description','createBy',
                            'modifiedBy','created_at','updated_at'];
    public function add($product){
        return $this->create($product);
    }
}
