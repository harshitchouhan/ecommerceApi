<?php

namespace App\Http\Controllers\Admin\ProductAttribute;

use League\Fractal\TransformerAbstract;

class ProductAttributeTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(ProductAttribute $productAttribute)
    {
        return [
            'productAttributeId' => $productAttribute->paid,
            'name' => $productAttribute->paname,
            'value' => $productAttribute->pavalue,
            'detail' => $productAttribute->padetail,
            'filter' => $productAttribute->pafilter,
            'status' => $productAttribute->pastatus,
            'image' => $productAttribute->paimage,
            'category' => $productAttribute->pacategory,
            'created_at' => $productAttribute->created_at,
            'updated_at' => $productAttribute->updated_at,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'productAttributeId' => 'paid',
            'name' => 'paname',
            'value' => 'pavalue',
            'detail' => 'padetail',
            'filter' => 'pafilter',
            'status' => 'pastatus',
            'image' => 'paimage',
            'category' => 'pacategory',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {

        $attributes = [
            'paid' => 'productAttributeId',
            'paname' => 'name',
            'pavalue' => 'value',
            'padetail' => 'detail',
            'pafilter' => 'filter',
            'pastatus' => 'status',
            'paimage' => 'image',
            'pacategory' => 'category',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
