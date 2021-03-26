<?php


namespace App\Mapper;


class ProductMapper
{
    public static function mapData(){
        $req = request();
        $product = [
            'name' => $req->name,
            'price' => $req->price,
            'priceSale' => $req->priceSale,
            'quantity' => $req->quantity,
            'description' => $req->description,
            'thumbnail'=>$req->thumbnail,
            'listImage'=>$req->listImage,
            'createBy' => 'admin'
        ];
        if(isset($req->id)){
            $product['modifiedBy'] = "admin 2";
        }
        return $product;
    }
}
