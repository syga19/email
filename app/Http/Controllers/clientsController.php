<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientsController extends Controller
{
    public function index(){
        // return view('clients', ['posts' => $this->emp]);
        return view('clients', ['posts' => \App\Models\Clients::all()]);
    }

    public function show($id){
        // foreach($this->emp as $emp){
        //     if($emp['id'] == $id){
        //         return $emp;
        //     }
        // }
        return view('clients', ['post' => \App\Models\Clients::find($id)]);
    }
    // public function store(Request $request){
    //     $pb = new \App\Models\Clients();
    //     $pb->name = $request['name'];
    //     $pb->surname = $request['surname'];
    //     $pb->email = $request['email'];
    //     $pb->save();
    //     return redirect('/');
    // }
    public function store(Request $request){
        $this->validate($request, [
            // [Dėmesio] validacijoje unique turi būti nurodytas teisingas lentelės pavadinimas! Galime pažiūrėti, kas bus jei bus neteisingas
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
        ]);
   
        $pb = new \App\Models\Clients();
        $pb->name = $request['name'];
        $pb->surname = $request['surname'];
        $pb->email = $request['email'];

        return ($pb->save() !== 1) ? 
            redirect('/')->with('status_success', 'Client created!') : 
            redirect('/')->with('status_error', 'Client was not created!');
    }

     
}
