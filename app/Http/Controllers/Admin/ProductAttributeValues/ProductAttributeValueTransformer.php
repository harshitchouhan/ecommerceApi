<?php

namespace App\Http\Controllers\Admin\ProductAttributeValues;

use App\Http\Controllers\Admin\ProductAttributeValues\ProductAttributeValue;
use League\Fractal\TransformerAbstract;

class ProductAttributeValueTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(ProductAttributeValue $productAttributeValue)
    {
        return [
            'productValueId' => $productAttributeValue->pavid,
            'attributeId' => $productAttributeValue->pavaid,
            'value' => $productAttributeValue->pavvalue,
            'status' => $productAttributeValue->pavstatus,
            'created_at' => $productAttributeValue->created_at,
            'updated_at' => $productAttributeValue->updated_at,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'productValueId' => 'pavid',
            'attributeId' => 'pavaid',
            'value' => 'pavvalue',
            'status' => 'pavstatus',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {

        $attributes = [
            'pavid' => 'productValueId',
            'pavaid' => 'attributeId',
            'pavvalue' => 'value',
            'pavstatus' => 'status',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
