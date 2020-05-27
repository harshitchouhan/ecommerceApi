<?php

namespace App\Http\Controllers\Admin\Discounts;

use League\Fractal\TransformerAbstract;

class DiscountTransformer extends TransformerAbstract
{

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Discount $discount)
    {
        return [
            'discountId' => $discount->did,
            'name' => $discount->dname,
            'code' => $discount->dcode,
            'value' => $discount->dvalue,
            'type' => $discount->dtype,
            'uses' => $discount->duses,
            'startDate' => $discount->dstartdate,
            'expiryDate' => $discount->dexpirydate,
            'Active' => $discount->dactive,
            'basis' => $discount->dbasis,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'discountId' => 'did',
            'name' => 'dname',
            'code' => 'dcode',
            'value' => 'dvalue',
            'type' => 'dtype',
            'uses' => 'duses',
            'startDate' => 'dstartdate',
            'expiryDate' => 'dexpirydate',
            'active' => 'dactive',
            'basis' => 'dbasis',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {

        $attributes = [
            'did' => 'discountId',
            'dname' => 'name',
            'dcode' => 'code',
            'dvalue' => 'value',
            'dtype' => 'type',
            'duses' => 'uses',
            'dstartdate' => 'startDate',
            'dexpirydate' => 'expiryDate',
            'dactive' => 'active',
            'dbasis' => 'basis',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
