<?php namespace Modules\Place\Http\Controllers\Admin;

use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class PlaceController extends AdminBaseController
{
    public function index()
    {
        return view('place::admin.index');
    }
}
