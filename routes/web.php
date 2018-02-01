<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


//route cote utilisateur
Route::get('/','HomePageController@home');  //va sur la page d'acceuil
Route::get('/contact','HomePageController@contact');  //va sur la page de contact
Route::get('/experience','HomePageController@experience');  //va sur la page d'experience
Route::get('/info','HomePageController@info');  //va sur la page d'info
Route::get('/projet','HomePageController@projet');  //va sur la page des projets
Route::post('/contact' , 'HomePageController@store')->name('envoiecontact');

//route cote admin
//vue
Route::get('/admin', 'AdminController@indexAdmin');  //va sur la page coté admin
Route::get('/mail_admin', 'AdminController@mailAdmin'); // va sur la page coté admin pour voir les mails
Route::get('/experience_admin', 'AdminController@experienceAdmin')->name('experience_admin');  // va sur la page coté admin pour voir les experiences
Route::get('/projets_admin', 'AdminController@projetsAdmin'); // va sur la page coté admin pour voir les experiences
Route::get('/competences_admin', 'AdminController@competencesAdmin'); // va sur la page coté admin pour voir les experiences


//modifier et supprimer coté EXPERIENCE
Route::get('/supprExperience/{id}', 'AdminController@supprExperience')->name('supprExperience');//supprime l'experience selectionner
Route::get('/modifExperience/{id}', 'AdminController@modifAdmin')->name('modifExperience');
Route::post('/modif_experience', 'AdminController@modifExperience')->name('modif_experience');

// ajout coté EXPERIENCE
Route::get('/ajoutExperience', 'AdminController@ajoutExperience')->name('ajoutExperience');
Route::post('/udapteExperience', 'AdminController@updateExperience')->name('udapteexperience');


//modifier et supprimer coté experience EXTRA PRO
Route::get('/supprExtra/{id}', 'AdminController@supprExtra')->name('supprExtra');
Route::get('/modifExtra/{id}', 'AdminController@modifAdmin')->name('modifExtra');
Route::post('/modif_extra', 'AdminController@modifExtra')->name('modif_extra');

// ajout coté EXTRA PRO
Route::get('/ajoutExtra', 'AdminController@ajoutExtra')->name('ajoutExtra');
Route::post('/udapteExtra', 'AdminController@updateExtra')->name('udapteextra');

//modifier et supprimer coté experience COMPETENCE
Route::get('/supprCompetence/{id}', 'AdminController@SupprCompetence')->name('supprCompetence');
Route::get('/modifCompetence/{id}', 'AdminController@modifCompt')->name('modifCompetence');
Route::post('/modif_competence', 'AdminController@ModifCompetence')->name('modif_competence');

// ajout coté COMPETENCE
Route::get('/ajoutCompetence', 'AdminController@ajoutCompetence')->name('ajoutcompetence');
Route::post('/udapteCompetence', 'AdminController@updateCompetence')->name('udaptecompetence');

//Voir Mail Admin
Route::get('/voirMail/{id}', 'AdminController@voirMail')->name('voirMail');

//modifier et supprimer coté PROJETS
Route::get('/supprProjets/{id}', 'AdminController@supprProjets')->name('supprProjets');
Route::get('/modifProjets/{id}', 'AdminController@modifprjt')->name('modifProjets');
Route::post('/modif_projets', 'AdminController@modifProjets')->name('modif_projets');

// ajout coté PROJET
Route::get('/ajoutProjet', 'AdminController@ajoutProjet')->name('ajoutprojet');
Route::post('/udapteProjet', 'AdminController@updateProjet')->name('udapteprojet');

//Suppression des Mails
Route::get('/supprMails/{id}', 'AdminController@SupprMails')->name('supprMails');