<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\MangerController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ArticleController;


/////////////////////////////////////////////////////////////////////////////
///////////////////////////Player///////////////////////////////////////////

//صفحات ال player
Route::controller(PlayerController::class)->group(function () {
    Route::get('/','index')->name('player.index');
    Route::get('player/plans', 'plans')->name('player.plans');
    Route::get('player/balding_body_team', 'balding_body_team')->name('player.balding_body_team');
    Route::get('player/fitness-team', 'fitness_team')->name('player.fitness_team');
    Route::get('player/athart_rachel', 'athartrachel')->name('player.athart_rachel');
    Route::get('player/exsersize', 'exsersize')->name('player.exsersize')->middleware('check.player');
    Route::get('Mselftraining', function (){
        return view('player.tutorial.Mselftraining');
    })->name('Mselftraining');

    Route::get('Feselftraining', function (){
        return view('player.tutorial.Feselftraining');
    })->name('Feselftraining');
    
});

/////////////////////////////////////////////////////////////////////////////
////////////////////////////Coach///////////////////////////////////////////

Route::middleware(['auth','check.coach'])->group(function () {
    Route::controller(CoachController::class)->group(function () {
        Route::get('coach/addadvice', 'addadvice')->name('addadvice');
        Route::get('coach/addtrainingplanning','addtrainingplanning')->name('addtrainingplanning');
        Route::get('coach/index','index')->name('coach.index');
        Route::get('coach/update_trainer','update_trainer')->name('update_trainer');
        Route::get('coach/updatecontent','updatecontent')->name('updatecontent');
        Route::get('coach/updateplanning','updateplanning')->name('updateplanning');
        Route::get('coach/viewcontent','viewcontent')->name('viewcontent');
        Route::get('coach/viewplayers','viewplayers')->name('viewplayers');
        Route::get('coach/viewviolations','viewviolations')->name('viewviolations');
        Route::get('coach/violation','violation')->name('violation');
    });
});
/////////////////////////////////////////////////////////////////////////////
///////////////////////////Manger///////////////////////////////////////////

Route::controller(MangerController::class)->group(function () {
    Route::get('manger/addadvice', 'addadvice');
    Route::get('manger/addarticle','addarticle');
    Route::get('manger/addtrainer','addtrainer')->name('addtrainer');
    Route::get('manger/addviolations','addviolations')->name('addviolations');
    Route::get('manger/calc','calc')->name('calc');
    Route::get('manger/chat','chat')->name('chat');
    Route::get('manger/imports','imports')->name('imports');
    Route::get('manger/payments','payments')->name('payments');
    Route::get('manger/index','index')->name('index');
    Route::get('manger/replycomplaint','replycomplaint')->name('replycomplaint');
    Route::get('manger/updateplayer','updateplayer')->name('updateplayer');
    Route::get('manger/updatetrainer','updatetrainer')->name('updatetrainer');
    Route::get('manger/updateviolation','updateviolation')->name('updateviolation');
    Route::get('manger/viewbannings','viewbannings')->name('viewbannings');
    Route::get('manger/viewtrainer','viewtrainer')->name('viewtrainer');
    Route::get('manger/viewviolations','viewviolations')->name('viewviolations');
    Route::get('manger/violations','violations')->name('violations');

});

/////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
///////////////////////////////////////////////////////////////////////////////
Route::get('/registered1', [RegController::class, 'showRegistrationForm'])->name('register1');
Route::post('/registered1', [RegController::class, 'store']);
///////////////////////////////////////////////////////////////
Route::get('Check',[RegController::class,'check']);

///////////////////////////////////////////////////////////////////////////////
/////////////////////Article//////////////////////////////////////////////////
Route::controller(ArticleController::class)->group(function () {
  
    Route::get('art/health', 'Health')->name('health');
    Route::get('art/training', 'Training')->name('training');
    Route::get('art/nutrition', 'Nutrition')->name('nutrition');
    Route::get('ShowArticle/{type}/{id}', 'ShowArticle')->name('ShowArticle');
    Route::get('show', 'show')->name('art.show');
    Route::POST('art/create', 'create')->name('art.create');
});
