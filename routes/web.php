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
/////////////////////////////////////////////////////////////////////////////
///////////////////////////Manger///////////////////////////////////////////

Route::prefix('manger')->controller(MangerController::class)->group(function () {

    Route::get('index', 'index')->name('admin.index');

    /////////////////////////////////////////////////////////////////////////////
    Route::get('addadvice', 'peagadvice')->name('admin.peag.advice');
    Route::post('addadvice', 'addadvice')->name('add.add.advice');
    Route::get('showAdvices', 'showAdvices')->name('admin.show.advices');

    /////////////////////////////////////////////////////////////////////////////

 Route::get('showarticle', 'showarticle')->name('admin.show.article');
    /////////////////////////////////////////////////////////////////////////////
    Route::get('addarticle','addarticle');
    Route::get('oh','addcoach')->name('add.coach');
    Route::get('addviolations','addviolations')->name('violations');
    Route::get('mangecalc','calc')->name('calc');
    Route::get('imports','imports')->name('imports');
    Route::get('payments','payments')->name('payments');
    Route::get('replycomplaint','replycomplaint')->name('replycomplaint');
    Route::get('updateplayer','updateplayer')->name('update.player');
    Route::get('updatetrainer','updatetrainer')->name('updatetrainer');
    Route::get('updateviolation','updateviolation')->name('updateviolation');
    Route::get('viewbannings','viewbannings')->name('viewbannings');   
    Route::get('viewplayer','viewplayer')->name('admin.view.players');
    Route::get('viewcoach','viewcoash')->name('admin.view.coashes');
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