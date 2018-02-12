<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Formation;
use App\Inscription;
use Illuminate\Http\Request;

class PageController extends Controller
{
    
     public function about()
    {
        return view('about');
    }
     

    public function formation()
    {
    	$formation = Formation::paginate(12);
        return view('formation', compact('formation'));
    }

    public function inscription(Request $request)
    {
    	if($request->isMethod('post'))
		{		
		    $a = $request->all();
			$insc = Inscription::create($a);
			if($insc){
				return redirect('formation')->with('success','Votre Inscription envoyé avec success');
			}

				
		}
    }


    public function contact(Request $request)
    {
      if($request->isMethod('post'))
		{		
		    $a = $request->all();
			$contact = Contact::create($a);
			if($contact){
				return redirect('contact')->with('success','Votre email envoyé avec success');
			}

				
		}
		return view('contact');		
	}
}
