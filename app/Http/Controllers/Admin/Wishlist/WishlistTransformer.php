<?php

namespace App\Http\Controllers\Admin\Wishlist;

use League\Fractal\TransformerAbstract;

class WishlistTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Wishlist $wishlist)
    {
        return [
            'wishListId' => $wishlist->wid,
            'categoryId' => $wishlist->wcid,
            'productsId' => $wishlist->wpid
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'wishListId' => 'wid',
            'categoryId' => 'wcid',
            'productsId' => 'wpid',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'wid' => 'wishListId',
            'wcid' => 'categoryId',
            'wpid' => 'productsId',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
