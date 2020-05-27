<?php

namespace App\Http\Controllers\Admin\Products;

use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'productId' => $product->pid,
            'code' => $product->pcode,
            'brandId' => $product->pbrandid,
            'categoryId' => $product->pcategoryid,
            'name' => $product->pname,
            'description' => $product->pdescription,
            'sellerId' => $product->psellerid,
            'wholesalePrice' => $product->pwholesaleprice,
            'retailPrice' => $product->pretailprice,
            'salePrice' => $product->psaleprice,
            'status' => $product->pstatus,
            'image1' => $product->pimage1,
            'image2' => $product->pimage2,
            'image3' => $product->pimage3,
            'image4' => $product->pimage4,
            'image5' => $product->pimage5,
            'video' => $product->pvideo,
            'metaTitle' => $product->pmetatitle,
            'metaKeyword' => $product->pmetakeyword,
            'metaDescription' => $product->pmetadescription,
            'relatedProducts' => $product->prelatedProducts,
            'created_at' => $product->created_at,
            'updated_at' => $product->updated_at,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'productId' => 'pid',
            'code' => 'pcode',
            'brandId' => 'pbrandid',
            'categoryId' => 'pcategoryid',
            'name' => 'pname',
            'description' => 'pdescription',
            'sellerId' => 'psellerid',
            'wholesalePrice' => 'pwholesaleprice',
            'retailPrice' => 'pretailprice',
            'salePrice' => 'psaleprice',
            'status' => 'pstatus',
            'image1' => 'pimage1',
            'image2' => 'pimage2',
            'image3' => 'pimage3',
            'image4' => 'pimage4',
            'image5' => 'pimage5',
            'video' => 'pvideo',
            'metaTitle' => 'pmetatitle',
            'metaKeyword' => 'pmetakeyword',
            'metaDescription' => 'pmetadescription',
            'relatedProducts' => 'prelatedproducts',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'pid' => 'productId',
            'pcode' => 'code',
            'pbrandid' => 'brandId',
            'pcategoryid' => 'categoryId',
            'pname' => 'name',
            'pdescription' => 'description',
            'psellerid' => 'sellerId',
            'pwholesaleprice' => 'wholesalePrice',
            'pretailprice' => 'retailPrice',
            'psaleprice' => 'salePrice',
            'pstatus' => 'status',
            'pimage1' => 'image1',
            'pimage2' => 'image2',
            'pimage3' => 'image3',
            'pimage4' => 'image4',
            'pimage5' => 'image5',
            'pvideo' => 'video',
            'pmetatitle' => 'metaTitle',
            'pmetakeyword' => 'metaKeyword',
            'pmetadescription' => 'metaDescription',
            'prelatedproducts' => 'relatedProducts',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
