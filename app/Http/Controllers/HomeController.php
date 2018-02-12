<?php

namespace App\Http\Controllers;

use  App\Contact;
use App\Formation;
use App\Inscription;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact::all()->count();
        $formation=Formation::all()->count();
         $inscription=Inscription::all()->count();
        return view('home', compact('contact', 'formation', 'inscription'));
    }

     public function listcontact()
    {
        $contact = Contact::paginate(5);
        return view('listcontact', compact('contact'));
    }

    public function deletecontact($id)
    {
        //dd($id);
        $contact = Contact::findOrFail($id)->delete();
        if($contact){
            return redirect('listcontact')->with('info','Votre item supprimer avec success');
        }
    }
      
}
