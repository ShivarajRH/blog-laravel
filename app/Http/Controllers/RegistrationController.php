<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;
#use App\User;
#use App\Mail\Welcome;
use App\Http\Requests\RegistrationForm;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view("registration.create");
    }

    public function store(RegistrationForm $form)
    {
    	$form->persist();

    	//session() or request()->session()
    	session()->flash('message',"Thanks so much for sign up!\n Thanks so much for sign up! \n Thanks so much for sign up! Thanks so much for sign up! \n \b ");

    	return redirect()->home();
    }

}
