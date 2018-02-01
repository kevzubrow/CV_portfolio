<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Competence;
use App\Models\Extra;
use App\Models\Connexion;
use App\Models\Projet;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use App\Models\Contacts;

class HomePageController extends Controller
{
    public function home(){
    	// recup des competences en base
    	$langages = Competence::where('type', 1)->get();//langage de programmation
    	$framew = Competence::where('type', 2)->get();//frameworks
        // recup des projet en base
        $project = Projet::all();
    	return view('welcome', compact('langages', 'framew', 'project'));
    }

    public function projet(){
    	//recup des projets en base
        $project = Projet::all();
    	return view('projet', compact('project'));
    }


     public function contact(){
    	return view('contact');
    }



    public function store(ContactRequest $request)
    {   
        Contacts::create($request->except('_token'));
        Mail::to('k.pean@aformac-vichy.fr')
            ->send(new Contact($request->except('_token')));
        return redirect('contact')->with('retour' , 'le message est bien parti');
    }


    public function experience(){
        // recup des experiences en base
        $experiences = Experience::all();
        // recup des extra experience en base
        $reparation =  Extra::where('type', 1)->get();
        $developpement = Extra::where('type', 2)->get();
        $formation = Extra::where('type', 3)->get();

        return view('experience', compact('experiences', 'reparation', 'developpement', 'formation'));
    }


     public function info(){
        return view('info');
    }
}
