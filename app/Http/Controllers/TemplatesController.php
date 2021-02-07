<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    // public function index(){
    //     // return view('clients', ['posts' => $this->emp]);
    //     return view('emailtemplate', ['posts' => \App\Models\Templates::all()]);
    // }
    // public function show($id){
    //     // foreach($this->emp as $emp){
    //     //     if($emp['id'] == $id){
    //     //         return $emp;
    //     //     }
    //     // }
    //     return view('emailtemplate', ['post' => \App\Models\Templates::find($id)]);
    // }

    private $prj = [
        ['id' => 1, 'text' => 'PHP']
    ];
    
    public function index(){
        return view('emailtemplate', ['posts' => \App\Models\Templates::all()]); // MODEL::all() → SELECT ALL ROWS
    }
    
    public function show($id){
        foreach($this->prj as $prj){
            if($prj['id'] == $id){
                return $prj;
            }
        }
    }
    
    // Metodas Create nauja darbuotoja
    public function store(Request $request){
        $pb = new \App\Models\Templates();
        $pb->Text = $request['text'];
        $pb->save();
        return redirect('/emailtemplate');
    }



} 
    // public function store(Request $request){
    //     $this->validate($request, [
    //         // [Dėmesio] validacijoje unique turi būti nurodytas teisingas lentelės pavadinimas! Galime pažiūrėti, kas bus jei bus neteisingas
    //         'name' => 'required',
    //         'surname' => 'required',
    //         'email' => 'required',
    //     ]);
   
    //     $pb = new \App\Models\Clients();
    //     $pb->name = $request['name'];
    //     $pb->surname = $request['surname'];
    //     $pb->email = $request['email'];

    //     return ($pb->save() !== 1) ? 
    //         redirect('/')->with('status_success', 'Client created!') : 
    //         redirect('/')->with('status_error', 'Client was not created!');
    // }

     
