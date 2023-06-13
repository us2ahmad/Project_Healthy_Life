<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\TrainingPlanController;

Route::middleware(['auth','check.coach'])->group(function () {
Route::prefix('coach')->name('coach.')->controller(CoachController::class)->group(function () {
Route::get('home','index')->name('home');      //Dashboard
Route::get('article', 'pagearticle')->name('page.article');      //Add Articles
Route::post('addarticle', 'addarticle')->name('add.article');
Route::get('viewarticle','view_article')->name('view.article');
Route::get('viewplayers','view_players')->name('view.players'); 
Route::get('viewplan','view_plan')->name('view.plan');
});
});
Route::controller(ArticleController::class)->middleware('auth','check.coach')->name('coach.')->group(function(){
    Route::post('delete/{id}','destroy')->name('destroy.articel');
    Route::post('editarticel/{id}','edit')->name('edit.articel');
    Route::post('update/{id}','update')->name('update.article');
});
Route::middleware('auth','check.coach')->group(function(){
Route::view('addconten','coach.contents')->name('coach.add.cont');
Route::post('addconten',[ContentController::class,'addcontent'])->name('coach.add.content');
Route::get('viewcontent',[ContentController::class,'view_content'])->name('coach.view.content');
Route::post('deletcontent/{id}',[ContentController::class,'delet_content'])->name('coach.delet.content');
Route::post('editcontent/{id}',[ContentController::class,'edit_content'])->name('coach.edit.content');
Route::post('updatecontent/{id}',[ContentController::class,'update_content'])->name('coach.update.content');
Route::view('addaddplan','coach.addtrainingplanning')->name('coach.add.plan');
Route::post('addplan',[TrainingPlanController::class,'addplan'])->name('coach.add.tr.plan');
Route::get('addtrin/{plan}',[TrainingPlanController::class,'addtrin'])->name('coach.add.trin');
Route::post('saveplan/{planid}',[TrainingPlanController::class,'saveplan'])->name('coach.save.plan');
});