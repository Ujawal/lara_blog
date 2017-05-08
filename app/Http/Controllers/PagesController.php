<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view ('pages.welcome');
		# process variable data or params
		#talk to the model
		#receive from the model
		# compile or process data from the model if needed
		# pass that data to the correct view
	}

	public function getAbout(){
		$first = "Ujawal";
		$last = "Joshi";

		$fullname = $first . " " . $last;
		$email = 'joshi.ujawal1@gmail.com';
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
			//return view('pages.about')->with("fullname", $full);
			//return view('pages.about')->withFullname($fullname)->withEmail($email);
		// Array 
		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact') ;
	}

}
