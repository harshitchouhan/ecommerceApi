<?php

namespace App\Http\Controllers\Admin\City;

use League\Fractal\TransformerAbstract;

class CityTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(City $city)
    {
        return [
            'cityId' => $city->cityid,
            'name' => $city->cityname,
            'code' => $city->citycode,
            'status' => $city->cityactive,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'cityId' => 'cityid',
            'name' => 'cityname',
            'code' => 'citycode',
            'status' => 'cityactive',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'cityid' => 'cityId',
            'cityname' => 'name',
            'citycode' => 'code',
            'cityactive' => 'status',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
