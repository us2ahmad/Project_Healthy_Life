<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;

Route::middleware(['auth','check.coach'])->group(function () {
     
Route::prefix('coach')->controller(CoachController::class)->group(function () {

Route::get('home','index')->name('home');      //Dashboard

Route::get('article', 'pagearticle')->name('page.article');      //Add Articles

Route::post('addarticle', 'addarticle')->name('add.article');
      
Route::get('addadvice', 'addadvice')->name('add.advice');

Route::get('addplan','addplans')->name('add.plan');

Route::get('update_trainer','update_trainer')->name('update.trainer');

Route::get('updatecontent','updatecontent')->name('update.content');

Route::get('updateplanning','updateplanning')->name('update.planning');

Route::get('viewcontent','viewcontent')->name('view.content');

Route::get('viewplayers','viewplayers')->name('view.players'); 

Route::get('viewviolations','viewviolations')->name('view.violations');

Route::get('violation','violation')->name('violation');

Route::get('viewplan','viewplan')->name('view.plan');

});
});