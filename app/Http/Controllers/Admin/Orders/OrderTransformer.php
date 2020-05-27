<?php

namespace App\Http\Controllers\Admin\Orders;

use League\Fractal\TransformerAbstract;

class OrderTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Order $order)
    {
        return [
            'OrderId' => $order->oid,
            'customerName' => $order->ocustomername,
            'customerId' => $order->ocid,
            'email' => $order->oemail,
            'addressLine1' => $order->oaddressline1,
            'addressLine2' => $order->oaddressline2,
            'city' => $order->ocity,
            'zipcode' => $order->ozipcode,
            'status' => $order->ostatus,
            'phone' => $order->ophone,
            'alternatePhone' => $order->oalternatephone,
            'discountId' => $order->odiscountid,
            'discountValue' => $order->odiscountvalue,
            'totalPrice' => $order->ototalprice,
            'shippingPrice' => $order->oshippingprice,
            'shippingId' => $order->oshippingid,
            'shippingCode' => $order->oshippingcode,
            'grandTotal' => $order->ograndtotal,
            'paymentType' => $order->opaymenttype,
            'paymentRequest' => $order->opaymentrequest,
            'paymentResponse' => $order->opaymentresponse,
            'paymentStatus' => $order->opaymentstatus,
            'paymentAuthroized' => $order->opaymentauthroized,
            'isGifted' => $order->oisgifted,
        ];
    }

    public static function originalAttribute($index)
    {
        $attributes = [
            'OrderId' => 'oid',
            'customerName' => 'ocustomername',
            'customerId' => 'ocid',
            'email' => 'oemail',
            'addressLine1' => 'oaddressline1',
            'addressLine2' => 'oaddressline2',
            'city' => 'ocity',
            'state' => 'ostate',
            'zipcode' => 'ozipcode',
            'status' => 'ostatus',
            'phone' => 'ophone',
            'alternatePhone' => 'oalternatephone',
            'discountId' => 'odiscountid',
            'discountValue' => 'odiscountvalue',
            'totalPrice' => 'ototalprice',
            'shippingPrice' => 'oshippingprice',
            'shippingId' => 'oshippingid',
            'shippingCode' => 'oshippingcode',
            'grandTotal' => 'ograndtotal',
            'paymentType' => 'opaymenttype',
            'paymentRequest' => 'opaymentrequest',
            'paymentResponse' => 'opaymentresponse',
            'paymentStatus' => 'opaymentstatus',
            'paymentAuthroized' => 'opaymentauthroized',
            'isGifted' => 'ostatus',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }

    public static function transformedAttribute($index)
    {

        $attributes = [
            'oid' => 'OrderId',
            'ocustomername' => 'customerName',
            'ocid' => 'customerId',
            'oemail' => 'email',
            'oaddressline1' => 'addressLine1',
            'oaddressline2' => 'addressLine2',
            'ocity' => 'city',
            'ostate' => 'state',
            'ozipcode' => 'zipcode',
            'ostatus' => 'status',
            'ophone' => 'phone',
            'oalternatephone' => 'alternatePhone',
            'odiscountid' => 'discountId',
            'odiscountvalue' => 'discountValue',
            'ototalprice' => 'totalPrice',
            'oshippingprice' => 'shippingPrice',
            'oshippingid' => 'shippingId',
            'oshippingcode' => 'shippingCode',
            'ograndtotal' => 'grandTotal',
            'opaymenttype' => 'paymentType',
            'opaymentrequest' => 'paymentRequest',
            'opaymentresponse' => 'paymentResponse',
            'opaymentstatus' => 'paymentStatus',
            'opaymentauthroized' => 'paymentAuthroized',
            'created_at' => 'created_at',
            'updated_at' => 'updated_at',
        ];

        return isset($attributes[$index]) ? $attributes[$index] : null;
    }
}
