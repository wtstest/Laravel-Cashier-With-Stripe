<?php

class IndexController extends BaseController {

    public function index() {
        if (!Auth::check())
            return Redirect::to("/login");
        return View::make('index');
    }

}
