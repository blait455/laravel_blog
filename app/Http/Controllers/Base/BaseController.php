<?php

namespace App\Http\Controllers\Base;


use App\Models\SiteAddress;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;

class BaseController extends Controller
{
    /**
     * Getting the base address of the url and then getting posts according to it
     * @return null
     */
    protected function determineUrl()
    {
        $path = URL::to("/");
        $siteAddress = SiteAddress::where('address', $path)->take(1)->get();

        // check if the id is a number or not
        if(is_numeric($siteAddress[0]->id))
        {
            return $siteAddress[0]->id;
        }
        return null;
    }
}
