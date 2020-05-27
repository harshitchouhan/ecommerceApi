<?php

namespace App\Http\Controllers\Admin\OrderCart;

use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{
    protected $fillable = ['ocid', 'ocoid', 'ocpid', 'ocpname', 'ocpcode', 'ocprice'];
}
