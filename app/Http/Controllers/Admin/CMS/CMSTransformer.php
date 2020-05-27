<?php

namespace App\Http\Controllers\Admin\CMS;

use League\Fractal\TransformerAbstract;

class CMSTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(cms $cms)
    {
        return [
            'CMSId' => $cms->cid,
            'pageTitle' => $cms->cpagetitle,
            'pageDescription' => $cms->cpagedescription,
            'template' => $cms->ctemplate,
            'pageUrl' => $cms->cpageurl,
            'metaTitle' => $cms->cmetatitle,
            'metaDecription' => $cms->cmetadecription,
            'metaKeyword' => $cms->cmetakeyword,
            'active' => $cms->cactive,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'CMSId' => 'cid',
            'pageTitle' => 'cpagetitle',
            'pageDescription' => 'cpagedescription',
            'template' => 'ctemplate',
            'pageUrl' => 'cpageurl',
            'metaTitle' => 'cmetatitle',
            'metaDecription' => 'cmetadecription',
            'metaKeyword' => 'cmetakeyword',
            'active' => 'cactive',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'cid' => 'CMSId',
            'cpagetitle' => 'pageTitle',
            'cpagedescription' => 'pageDescription',
            'ctemplate' => 'template',
            'cpageurl' => 'pageUrl',
            'cmetatitle' => 'metaTitle',
            'cmetadecription' => 'metaDecription',
            'cmetakeyword' => 'metaKeyword',
            'cactive' => 'active',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
