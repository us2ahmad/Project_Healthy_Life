<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PlayerTrainingPlanController;
use App\Mail\WelcomeMail;
use Chatify\Http\Controllers\MessagesController;
use Illuminate\Support\Facades\Mail;

/////////////////////////////////////////////////////////////////////////////
///////////////////////////Player///////////////////////////////////////////

//صفحات ال player
Route::controller(PlayerController::class)->group(function () {
    Route::get('/','index')->name('player.index');
    Route::get('player/plans', 'plans')->name('player.plans');
    Route::get('team/{type}', 'team')->name('team')->middleware('ChaeckBan');
    Route::get('player/exsersize', 'exsersize')->name('player.exsersize');//->middleware('check.player');
    Route::get('Mselftraining', function (){
        return view('player.tutorial.Mselftraining');
    })->name('Mselftraining');

    Route::get('Feselftraining', function (){
        return view('player.tutorial.Feselftraining');
    })->name('Feselftraining');
    
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


    Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
///////////////////////////////////////////////////////////////////////////////

Route::get('/register', [RegController::class, 'showRegistrationForm'])->name('register1');
// ->middleware('ChaeckBan')

Route::post('/register', [RegController::class, 'store']);

///////////////////////////////////////////////////////////////////////////////

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


// Route::post('addtr',[PlayerTrainingPlanController::class,'add_tr'])->name('player.add.tr');

Route::middleware('auth')->group(function(){
Route::post('player/info',[PlayerTrainingPlanController::class,'add_tr'])->name('player.info');
Route::get('player/payment',[PaymentController::class,'show'])->name('player.pay');



Route::get('player/plans',[\App\Http\Controllers\PlayerTrainingPlanController::class,'ShowType'])->name('Types');
Route::get('player/exsersize/{type}',[\App\Http\Controllers\PlayerTrainingPlanController::class,'Showexsersize'])->name('ExsersizeType');
});

Route::get('/player/plans',[PlayerTrainingPlanController::class,'get_plan'])->name('get_plan');