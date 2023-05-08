<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;
use App\Http\Controllers\MangerController;
use App\Http\Controllers\PlayerController;


/////////////////////////////////////////////////////////////////////////////
///////////////////////////Player///////////////////////////////////////////

//صفحات ال player
Route::controller(PlayerController::class)->group(function () {
    Route::get('/','index')->name('player.index');
    Route::post('player/create', 'create')->name('player.create');
    Route::get('player/health1',  'health1' )->name('player.health1');
    Route::get('player/health2',  'health2' )->name('player.health2');
    Route::get('player/health3',  'health3' )->name('player.health3');
    Route::get('player/health4',  'health4' )->name('player.health4');
    Route::get('player/health5',  'health5' )->name('player.health5');
    Route::get('player/article1', 'article1')->name('player.article1');
    Route::get('player/article2', 'article2')->name('player.article2');
    Route::get('player/article3', 'article3')->name('player.article3');
    Route::get('player/article4', 'article4')->name('player.article4');
    Route::get('player/article5', 'article5')->name('player.article5');
    Route::get('player/tarticle1', 'tarticle1')->name('player.tarticle1');
    Route::get('player/tarticle2', 'tarticle2')->name('player.tarticle2');
    Route::get('player/tarticle3', 'tarticle3')->name('player.tarticle3');
    Route::get('player/tarticle4', 'tarticle4')->name('player.tarticle4');
    Route::get('player/tarticle5', 'tarticle5')->name('player.tarticle5');
    //صفحات الفيو لهي الراوتات غير  
    Route::get('player/health', 'health')->name('player.health');
    Route::get('player/training', 'training')->name('player.training');
    Route::get('player/nutrition', 'nutrition')->name('player.nutrition');
    Route::get('player/plans', 'plans')->name('player.plans');
    Route::get('player/balding_body_team', 'balding_body_team')->name('player.balding_body_team');
    Route::get('player/fitness-team', 'fitness_team')->name('player.fitness_team');
    Route::get('player/athart_rachel', 'athartrachel')->name('player.athart_rachel');
    Route::get('player/exsersize', 'exsersize')->name('player.exsersize');
  
    Route::get('Mselftraining', function (){
        return view('player.tutorial.Mselftraining');
    })->name('Mselftraining');

    Route::get('Feselftraining', function (){
        return view('player.tutorial.Feselftraining');
    })->name('Feselftraining');
    
  

});

/////////////////////////////////////////////////////////////////////////////
////////////////////////////Coach///////////////////////////////////////////

Route::controller(CoachController::class)->group(function () {

    Route::get('coach/addadvice', 'addadvice')->name('addadvice');
    Route::get('coach/addtrainingplanning','addtrainingplanning')->name('addtrainingplanning');
    Route::get('coach/index','index')->name('index');
    Route::get('coach/update_trainer','update_trainer')->name('update_trainer');
    Route::get('coach/updatecontent','updatecontent')->name('updatecontent');
    Route::get('coach/updateplanning','updateplanning')->name('updateplanning');
    Route::get('coach/viewcontent','viewcontent')->name('viewcontent');
    Route::get('coach/viewplayers','viewplayers')->name('viewplayers');
    Route::get('coach/viewviolations','viewviolations')->name('viewviolations');
    Route::get('coach/violation','violation')->name('violation');

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
