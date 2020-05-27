<?php

namespace App\Http\Controllers\Admin\OrderCart;

use League\Fractal\TransformerAbstract;

class OrderCartTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(OrderCart $orderCart)
    {
        return [
            'orderCartId' => $orderCart->ocid,
            'orderId' => $orderCart->ocoid,
            'productId' => $orderCart->ocpid,
            'productName' => $orderCart->ocpname,
            'productCode' => $orderCart->ocpcode,
            'price' => $orderCart->ocprice,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'orderCartId' => 'ocid',
            'orderId' => 'ocoid',
            'productId' => 'ocpid',
            'productName' => 'ocpname',
            'productCode' => 'ocpcode',
            'price' => 'ocprice',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {

        $attributes = [
            'ocid' => 'orderCartId',
            'ocoid' => 'orderId',
            'ocpid' => 'productId',
            'ocpname' => 'productName',
            'ocpcode' => 'productCode',
            'ocprice' => 'price',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
