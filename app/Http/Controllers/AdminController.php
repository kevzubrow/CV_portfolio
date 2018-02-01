<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
//Appel des MODELS
use App\Models\Experience;
use App\Models\Competence;
use App\Models\Extra;
use App\Models\Projet;
use App\Models\Contacts;
//Appel des REQUEST 
use App\Http\Requests\ExperienceRequest;
use App\Http\Requests\ExtraRequest;
use App\Http\Requests\CompetenceRequest;
use App\Http\Requests\ProjetRequest;


class AdminController extends Controller
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

                                                        //controller d'affichage
    public function indexAdmin()
    {
        return view('admin');
    }

    public function mailAdmin()
    {   
        $contact = Contacts::all();
        return view('mail_admin', compact('contact'));
    }

    public function voirMail($id)
        {   
            // recupère l'id pour afficher la ligne concerné
            $contact = Contacts::where('id_contact', '=', $id)->get();
            return view('voir_mail_admin',compact('contact'));
        }


    public function experienceAdmin()
    {
        // recup des experiences en base
        $experiences = Experience::all();
        // recup des extra experience en base
        $reparation =  Extra::where('type', 1)->get();
        $developpement = Extra::where('type', 2)->get();
        $formation = Extra::where('type', 3)->get();
        return view('experience_admin', compact('experiences', 'reparation', 'developpement', 'formation'));

    }

    public function projetsAdmin()
    {
        //recup des projets en base
        $project = Projet::all();
        return view('projets_admin', compact('project'));
    }

    public function competencesAdmin()
    {
        // recup des competences en base
        $langages = Competence::where('type', 1)->get();//langage de programmation
        $framew = Competence::where('type', 2)->get();//frameworks
        return view('competences_admin', compact('langages', 'framew'));
    }

                                                    //controller de suppression EXPERIENCE

     public function supprExperience($id)
    {  
        // recupère l'id pour supprimer la ligne
        $experiences = Experience::where('id_entreprise', '=', $id)->delete();
        return redirect('experience_admin')->with('message', 'La formation a bien été supprimée');
    }

    public function SupprExtra($id)
    {
        $reparation =  Extra::where('id_extra', '=', $id)->delete();
        $developpement = Extra::where('id_extra', '=', $id)->delete();
        return redirect('experience_admin')->with('message', 'La formation a bien été supprimée');
    }

                                                    //controller de modification EXPERIENCE

    public function modifAdmin($id)
    {   
        // recupère l'id pour afficher la ligne concerné
        $experiences = Experience::where('id_entreprise', '=', $id)->get();
        $reparation = Extra::where('id_extra', '=', $id)->get();
        $developpement = Extra::where('id_extra', '=', $id)->get();
        $formation = Extra::where('id_extra', '=', $id)->get();
        return view('modif_experience',compact('experiences', 'reparation', 'developpement', 'formation'));
    }
    
    public function ModifExperience(Request $request)
        {

            $experience = Experience::where('id_entreprise', '=', $request->id_entreprise)->update(array('nom_entreprise' => $request->nom_entreprise, 'description' => $request->description, 'date_debut' => $request->date_debut, 'date_fin' => $request->date_fin ));

            return redirect('experience_admin')->with('message', 'La modification a bien été mise à jour');
        }

        public function ModifExtra(Request $request)
        {
            $reparation = Extra::where('id_extra', '=', $request->id_extra)->update(array('descriptif' => $request->descriptif, 'type' => $request->type ));
             
              return redirect('experience_admin')->with('message', 'La modification a bien été mise à jour');
        }


                                                    //controller d'ajout EXPERIENCE
    public function ajoutExperience()
    {
        return view('ajout_experience_admin');
    }

   public function updateExperience(ExperienceRequest $request)
    {
        $experience = new Experience();
        $experience->nom_entreprise = $request->nom_entreprise;
        $experience->description = $request->description;
        $experience->date_debut = $request->date_debut;
        $experience->date_fin = $request->date_fin;
        $experience->save();
        return redirect('experience_admin')->with('message', 'L\'experience a bien été ajoutée');
    }


     public function ajoutExtra()
    {
        return view('ajout_extra_admin');
    }

   public function updateExtra(ExtraRequest $request)
    {
        $extra = new Extra();
        $extra->type = $request->type;
        $extra->descriptif = $request->descriptif;
        $extra->save();
        return redirect('experience_admin')->with('message', 'L\'estra experience a bien été ajoutée');
    }
                                    // Controller de suppression COMPETENCE


    public function SupprCompetence($id)
    {
        $langages = Competence::where('id_competence', '=', $id)->delete();//langage de programmation
        $framew = Competence::where('id_competence', '=', $id)->delete();//frameworks
        return redirect('competences_admin')->with('message', 'La competence a bien été supprimée');
    }

                                         // Controller de modification COMPETENCE

    public function modifCompt($id)
        {   
            // recupère l'id pour afficher la ligne concerné
            $langages = Competence::where('id_competence', '=', $id)->get();
            $framew = Competence::where('id_competence', '=', $id)->get();
            return view('modif_competences',compact('langages', 'framew'));
        }


    public function ModifCompetence(Request $request)
        {
          
            $langages = Competence::where('id_competence', '=', $request->id_competence)->update(array('nom' => $request->nom, 'pourcentage' => $request->pourcentage, 'image' => $request->image, 'type' => $request->type ));
                
              return redirect('competences_admin')->with('message', 'La competence a bien été mise à jour');
        }

                                        //Controller d'ajout de COMPETENCE

        public function ajoutCompetence()
    {
        return view('ajout_competence_admin');
    }

   public function updateCompetence(CompetenceRequest $request)
    {
        $competc = new Competence();
        $competc->nom = $request->nom;
        $competc->pourcentage = $request->pourcentage;
        $competc->image = $request->image;
        $competc->type = $request->type;
        $competc->save();
        return redirect('competences_admin')->with('message', 'La Compétence a bien été ajoutée');
    }

                                             //Controller de suppression de PROETS

     public function supprProjets($id)
    {  
        // recupère l'id pour supprimer la ligne
        $project = Projet::where('id_projet', '=', $id)->delete();
        return redirect('projets_admin')->with('message', 'Le projet a bien été supprimée');
    }

                                            //Controller de modification de Projet

    public function modifprjt($id)
        {   
            // recupère l'id pour afficher la ligne concerné
            $project = Projet::where('id_projet', '=', $id)->get();
           
            return view('modif_projet_admin',compact('project'));
        }


    public function modifProjets(Request $request)
        {
          
            $project = Projet::where('id_projet', '=', $request->id_projet)->update(array('titre_projet' => $request->titre_projet, 'text' => $request->text, 'image' => $request->image, 'date' => $request->date ));
                
              return redirect('projets_admin')->with('message', 'Le projet a bien été mise à jour');
        }

                                        //Controller d'ajout de PROJET


        public function ajoutProjet()
    {
        return view('ajout_projet_admin');
    }

   public function updateProjet(ProjetRequest $request)
    {   
        $project = new Projet();
        $project->titre_projet = $request->titre_projet;
        $project->text = $request->text;
        $project->image = $request->image;
        $project->date = $request->date;
        $project->save();

        return redirect('projets_admin')->with('message', 'Le Projet a bien été ajoutée');
    }


                                //Controller de Suppression des MAILS
    public function supprMails($id)
    {  
        // recupère l'id pour supprimer la ligne
        $contact = Contacts::where('id_contact', '=', $id)->delete();
        return redirect('mail_admin')->with('message', 'Le mail a bien été supprimée');
    }

}
