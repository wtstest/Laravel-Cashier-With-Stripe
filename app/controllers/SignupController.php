<?php

class SignupController extends BaseController {

    public function index() {
        if (Auth::check())
            return Redirect::to("/");
        return View::make('signup');
    }

    public function store() {
        $user = new User;
        $user->email = Input::get('email');
        $user->full_name = Input::get('full_name');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        $user->subscription(Input::get('subscription'))->create(Input::get('stripeToken'), [
            'email' => Input::get('email'), 'description' => Input::get('full_name') .' has successfully subscribed.'
        ]);
        return View::make('success');
    }
    public function success() {
        return View::make('success');
    }
}
