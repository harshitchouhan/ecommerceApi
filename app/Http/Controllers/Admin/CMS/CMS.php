<?php

namespace App\Http\Controllers\Admin\CMS;

use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{
    protected $fillable = ['cid', 'cpagetitle', 'cpagedescription', 'ctemplate', 'cpageurl', 'cmetatitle', 'cmetadecription', 'cmetakeyword', 'cactive'];
}
