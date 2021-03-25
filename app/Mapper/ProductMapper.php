<?php


namespace App\Mapper;


class ProductMapper
{
    public function mapData(){
        $req = request();
        $product = [
            'name' => $req->name,
            'price' => $req->price,
            'priceSale' => $req->priceSale,
            'quantity' => $req->quantity,
            'description' => $req->description,
            'createBy' => 'admin'
        ];
        if(!isset($req->id)){
            $product['modifiedBy'] = "admin 2";
        }
    }
}
