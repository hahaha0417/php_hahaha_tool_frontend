<?php

namespace App\Http\Controllers\Frontend\Index;

class Index_Controller extends \hahaha\base_ontroller
{
    public function Index()
    {
        $parameter = \hahaha\parameter::Instance();

        $parameter->page = new \StdClass;
        $parameter->page->title = "hahaha官網";

        $parameter->is_static = true;
        $file_name = public_path("../../../public/app/[前端]_首頁.html"); // 存到 public
        $view = view('frontend.index.index', [
            'parameter' => $parameter,
        ])->render();

        $this->hahaha($view, $file_name);

        $parameter->is_static = false;
        $file_name = public_path("../../../public/app/[前端]_首頁.html"); // 存到 public
        $view = view('frontend.index.index', [
            'parameter' => $parameter,
        ])->render();

        return $view;
    }
}
