<?php

namespace App\Http\Controllers\Frontend\Index;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::instance();

        $file_name = public_path("../../../public/app/[前端]_首頁.html"); // 存到 public
        $view = view('frontend.index.index', [
            'parameter' => $parameter,
        ]);

        $this->hahaha($view, $file_name);

        return $view;
    }
}
