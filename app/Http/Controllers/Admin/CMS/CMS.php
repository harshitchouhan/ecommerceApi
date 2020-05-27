<?php

namespace App\Http\Controllers\Admin\CMS;

use Illuminate\Database\Eloquent\Model;

class cms extends Model
{
    protected $fillable = ['cid', 'cpagetitle', 'cpagedescription', 'ctemplate', 'cpageurl', 'cmetatitle', 'cmetadecription', 'cmetakeyword', 'cactive'];

    protected $primaryKey = "cid";

    public $transformer = CMSTransformer::class;

    public function getAllCMS()
    {
        $CMS = cms::all();
        return $CMS;
    }

    public function getCMS($id)
    {
        $CMS = cms::findOrFail($id);
        return $CMS;
    }

    public function storeCMS($request)
    {
        $data = $request->all();
        $data['cactive'] = 0;

        $CMS = cms::create($data);
        return $CMS;
    }

    public function updateCMS($request, $id)
    {
        $CMS = $this->getCMS($id);

        if ($request->has('cpagetitle')) {
            $CMS->cpagetitle = $request->cpagetitle;
        }

        if ($request->has('cpagedescription')) {
            $CMS->cpagedescription = $request->cpagedescription;
        }

        if ($request->has('ctemplate')) {
            $CMS->ctemplate = $request->ctemplate;
        }

        if ($request->has('cpageurl')) {
            $CMS->cpageurl = $request->cpageurl;
        }

        if ($request->has('cmetatitle')) {
            $CMS->cmetatitle = $request->cmetatitle;
        }

        if ($request->has('cmetadecription')) {
            $CMS->cmetadecription = $request->cmetadecription;
        }

        if ($request->has('cmetakeyword')) {
            $CMS->cmetakeyword = $request->cmetakeyword;
        }

        if ($request->has('cactive')) {
            $CMS->cactive = $request->cactive;
        }

        if (!$CMS->isDirty()) {
            return false;
        }

        $CMS->save();
        return $CMS;
    }

    public function deleteCMS($id)
    {
        $CMS = $this->getCMS($id);
        $CMS->delete();
        return $CMS;
    }
}
