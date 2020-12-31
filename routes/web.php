<?php

use App\Http\Controllers\AddController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ConversationController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    //Route::get('/add', [AddController::class, 'show'])->name('form.show');//pour l'ajout mission
    Route::get('/conversations', [ConversationController::class, 'index'])->name('conversations.index');
    Route::get('/conversations/{conversation}', [ConversationController::class, 'show'])->name('conversations.show');
    Route::get('/confirmProposal/{proposal}', [ProposalController::class, 'confirm'])->name('confirm.proposal');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');//pour afficher la vue du formulaire 
    Route::get('/add', [AddController::class, 'index'])->name('form.add');//pour voir le formulaire dans la page d'accueil si on clique sur Ajout mission
    Route::get('/jobs/edit/{job}', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('jobs/edit/{job}', [JobController::class, 'update']); 
});

Route::group(['middleware' => ['auth', 'proposal']], function () {
Route::get('/proposals/{jobId}', [ProposalController::class, 'submit'])->name('proposals.submit');
    Route::post('/proposals/{jobId}', [ProposalController::class, 'submitStore'])->name('proposals.submit.store');
	});

Auth::routes();

