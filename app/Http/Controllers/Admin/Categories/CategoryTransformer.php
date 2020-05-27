<?php

namespace App\Http\Controllers\Admin\Categories;

use App\Http\Controllers\Admin\Categories\Category;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'categoryId' => $category->Cid,
            'productId' => $category->Cpid,
            'name' => $category->Cname,
            'detail' => $category->Cdetail,
            'image' => $category->Cimage,
            'status' => $category->Cstatus,
            'metaTitle' => $category->Cmetatitle,
            'metaKeyword' => $category->Cmetakeyword,
            'metaDescription' => $category->Cmetadescription,
            'created_at' => $category->created_at,
            'updated_at' => $category->updated_at,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'categoryId' => 'Cid',
            'productId' => 'Cpid',
            'name' => 'Cname',
            'detail' => 'Cdetail',
            'image' => 'Cimage',
            'status' => 'Cstatus',
            'metaTitle' => 'Cmetatitle',
            'metaKeyword' => 'Cmetakeyword',
            'metaDescription' => 'Cmetadescription',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'Cid' => 'categoryId',
            'Cpid' => 'productId',
            'Cname' => 'name',
            'Cdetail' => 'detail',
            'Cimage' => 'image',
            'Cstatus' => 'status',
            'Cmetatitle' => 'metaTitle',
            'Cmetakeyword' => 'metaKeyword',
            'Cmetadescription' => 'metaDescription',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
