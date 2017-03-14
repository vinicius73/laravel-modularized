<?php

namespace App\Front\Http\Controllers;

class PagesController extends BaseController
{
    /**
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return $this->view('front::pages.home');
    }
}