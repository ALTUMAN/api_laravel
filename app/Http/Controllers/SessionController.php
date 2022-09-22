<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class EventController extends Controller
{
        public function create () {

            return view('views.login');
        }

        public function store()
        {
            $user= user::create(request());
            auth()->login($user);
            return redirect()->to('/');
        }

}
