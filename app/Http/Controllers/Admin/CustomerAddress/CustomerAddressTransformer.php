<?php

namespace App\Http\Controllers\Admin\CustomerAddress;

use League\Fractal\TransformerAbstract;

class CustomerAddressTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(CustomerAddress $customerAddress)
    {
        return [
            'customerAddressId' => $customerAddress->caid,
            'ownerName' => $customerAddress->caownername,
            'address1' => $customerAddress->caaddressline1,
            'address2' => $customerAddress->caaddressline2,
            'city' => $customerAddress->cacity,
            'state' => $customerAddress->castate,
            'zipcode' => $customerAddress->cazipcode,
            'created_at' => $customerAddress->created_at,
            'updated_at' => $customerAddress->updated_at,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'customerAddressId' => 'caid',
            'ownerName' => 'caownername',
            'address1' => 'caaddressline1',
            'address2' => 'caaddressline2',
            'city' => 'cacity',
            'state' => 'castate',
            'zipcode' => 'cazipcode',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {
        $attributes = [
            'caid' => 'customerAddressId',
            'caownername' => 'ownerName',
            'caaddressline1' => 'address1',
            'caaddressline2' => 'address2',
            'cacity' => 'city',
            'castate' => 'state',
            'cazipcode' => 'zipcode',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
