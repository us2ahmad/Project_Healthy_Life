<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\MangerController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ArticleController;
use Chatify\Http\Controllers\MessagesController;

/////////////////////////////////////////////////////////////////////////////
///////////////////////////Player///////////////////////////////////////////

//صفحات ال player
Route::controller(PlayerController::class)->group(function () {
    Route::get('/','index')->name('player.index');
    Route::get('player/plans', 'plans')->name('player.plans');
    Route::get('team/{type}', 'team')->name('team');
    Route::get('player/exsersize', 'exsersize')->name('player.exsersize');//->middleware('check.player');
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
        Route::get('home','index')->name('home');      //Dashboard
        Route::get('article', 'pagearticle')->name('page.article');      //Add Articles
        Route::post('addarticle', 'addarticle')->name('add.article');
      
        Route::get('coach/addadvice', 'addadvice')->name('add.advice');
        Route::get('addplan','addplans')->name('add.plan');
        Route::get('coach/update_trainer','update_trainer')->name('update.trainer');
        Route::get('coach/updatecontent','updatecontent')->name('update.content');
        Route::get('coach/updateplanning','updateplanning')->name('update.planning');
        Route::get('coach/viewcontent','viewcontent')->name('view.content');
        Route::get('coach/viewplayers','viewplayers')->name('view.players');
        Route::get('coach/viewviolations','viewviolations')->name('view.violations');
        Route::get('coach/violation','violation')->name('violation');
        Route::get('coach/viewplan','viewplan')->name('view.plan');
    });
});
/////////////////////////////////////////////////////////////////////////////
///////////////////////////Manger///////////////////////////////////////////

Route::controller(MangerController::class)->group(function () {
    Route::get('manger/addadvice', 'addadvice')->name('se');
    Route::get('manger/addarticle','addarticle');
    Route::get('oh','addcoach')->name('add.coach');
    Route::get('manger/addviolations','addviolations')->name('violations');
    Route::get('manger/calc','calc')->name('calc');
    Route::get('manger/chat','chat')->name('chat');
    Route::get('manger/imports','imports')->name('imports');
    Route::get('manger/payments','payments')->name('payments');
    Route::get('a/index','index')->name('index');
    Route::get('manger/replycomplaint','replycomplaint')->name('replycomplaint');
    Route::get('updateplayer','updateplayer')->name('update.player');
    Route::get('updatetrainer','updatetrainer')->name('updatetrainer');
    Route::get('updateviolation','updateviolation')->name('updateviolation');
    Route::get('viewbannings','viewbannings')->name('viewbannings');
    Route::get('viewcoach','showcoach')->name('ahmad');
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
});
///////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
