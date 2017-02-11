<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminBaseController extends Controller
{

    /**
     * Assign variables to passed view and
     * return passed view path
     *
     * @param $view_path View to which value is to be assigned
     * @return View Path
     */
    protected function loadDataToView($view_path)
    {
        view()->composer($view_path, function ($view) use ($view_path) {
            $view->with('view_path', $this->getBasePathFromViewPath($view_path, true));

            $view->with('scope', $this->scope);

            $view->with('base_route', $this->base_path);
        });

        return $view_path;
    }


    /**
     * Generates View base path from view file path
     *
     * @param $view_path View to which value is to be assigned
     * @param bool $with_file_name Must be true if View Path is sent with file name
     * @return string View base path
     */
    public function getBasePathFromViewPath($view_path, $with_file_name = false)
    {
        $path_arr = explode('.', $view_path);

        // Remove Last value which MUST be view file name
        if ($with_file_name)
            array_pop($path_arr);

        return implode('.', $path_arr) . '.';
    }


    public function fputcsv_eol($handle, $array, $delimiter = ',', $enclosure = '"', $eol = "\n") {
        $return = fputcsv($handle, $array, $delimiter, $enclosure);
        if($return !== FALSE && "\n" != $eol && 0 === fseek($handle, -1, SEEK_CUR)) {
            fwrite($handle, $eol);
        }
        return $return;
    }

}
