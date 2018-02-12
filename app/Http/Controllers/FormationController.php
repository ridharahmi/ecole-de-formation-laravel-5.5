<?php

namespace App\Http\Controllers;

use App\Formation;
use App\Inscription;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation = Formation::paginate(10);
        return view('formation.listformation', compact('formation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                    
            $input=$request->all();

             if(isset($input['image']))
             {
                $extension=$input['image']->getClientOriginalExtension();
                $sha1= sha1($input['image']->getClientOriginalName());
                $filename=date('Y-m-d-h-i-s')."_".$sha1.".".$extension;
                $path=public_path('images/formations/');
                $input['image']->move($path , $filename);
                $input['image']='images/formations/'.$filename;         
              }
               //dd($input);
             $art = Formation::create($input);
              if($art)
              {   
                 return redirect('listformation');
              }                 
        
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $inscription = Inscription::where('formation_id', $id)->get();
        return view('formation.inscription', compact('inscription'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formation=Formation::findOrFail($id);
        return view('formation.edit' ,compact('formation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $input=$request->all();
          $image=$input['fichier'];
       
           if(isset($input['image']))
           {
                $extension=$input['image']->getClientOriginalExtension();
                $sha1= sha1($input['image']->getClientOriginalName());
                $filename=date('Y-m-d-h-i-s')."_".$sha1.".".$extension;
                $path=public_path('images/formations/');
                $input['image']->move($path , $filename);
                $input['image']='images/formations/'.$filename; 
                unlink($image);
            }
           $f = Formation::findOrFail($id)->update($input); 
             if($f)
             {          
                return redirect('listformation')->with('info','Article Updated successfully!');          
             }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
