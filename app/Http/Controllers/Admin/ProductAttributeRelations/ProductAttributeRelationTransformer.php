<?php

namespace App\Http\Controllers\Admin\ProductAttributeRelations;

use App\Http\Controllers\Admin\ProductAttributeRelations\ProductAttributeRelation;
use League\Fractal\TransformerAbstract;

class ProductAttributeRelationTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(ProductAttributeRelation $productAttributeRelation)
    {
        return [
            'productAttributeRelationId' => $productAttributeRelation->parid,
            'productId' => $productAttributeRelation->parpid,
            'attributeId' => $productAttributeRelation->paraid,
            'valueId' => $productAttributeRelation->parvid,
            'created_at' => $productAttributeRelation->created_at,
            'updated_at' => $productAttributeRelation->updated_at,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'productAttributeRelationId' => 'parid',
            'productId' => 'parpid',
            'attributeId' => 'paraid',
            'valueId' => 'parvid',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {

        $attributes = [
            'parid' => 'productAttributeRelationId',
            'parpid' => 'productId',
            'paraid' => 'attributeId',
            'parvid' => 'valueId',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
