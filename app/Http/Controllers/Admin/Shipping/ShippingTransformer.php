<?php

namespace App\Http\Controllers\Admin\Shipping;

use League\Fractal\TransformerAbstract;

class ShippingTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Shipping $shipping)
    {
        return [
            'shippingId' => $shipping->spid,
            'title' => $shipping->sptitle,
            'rate' => $shipping->sprate,
            'state' => $shipping->spstate,
            'active' => $shipping->spactive,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'shippingId' => 'spid',
            'title' => 'sptitle',
            'rate' => 'sprate',
            'state' => 'spstate',
            'active' => 'spactive',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'spid' => 'shippingId',
            'sptitle' => 'title',
            'sprate' => 'rate',
            'spstate' => 'state',
            'spactive' => 'active',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
