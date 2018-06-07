<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function start(){

    	return view('main.start');
    }

    public function sarl(Request $request){

    	if($_SERVER['REQUEST_METHOD'] == 'POST'){

    		$this->validate($request,[
            	'choice' => 'required',
        	]);

    		if (isset($_POST['choice'])) {

    			/*dd('Enfin');*/
    			return view('main.sarl-au');
    		}

    			/*return view('main.sarl-au');*/
    			/*dd($_SERVER['REQUEST_METHOD']);
    			dd('Hey you just');*/
    		/*echo $request;*/
    		/*return view('main.start');*/
    		/*dd('thats post without SARL');*/
    	}


    	/*dd('thats get');*/
    	return redirect('start');
    }

    public function display(){
        return view('main.displayData');
    }
}
