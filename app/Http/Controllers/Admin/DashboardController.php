<?php

namespace App\Http\Controllers\Admin;

class DashboardController extends AdminBaseController
{

    /**
     * Main Dashboard View
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return view('admin.dashboard.index');
    }

}
