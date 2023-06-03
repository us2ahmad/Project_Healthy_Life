<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangerController;


Route::prefix('manger')->middleware('check.manger','auth')->name('admin.')->controller(MangerController::class)->group(function () {

Route::get('index', 'index')->name('index');

Route::get('addadvice', 'peagadvice')->name('peag.advice');

Route::post('addadvice', 'addadvice')->name('add.advice');

Route::get('showAdvices', 'showAdvices')->name('show.advices');

Route::get('showarticle', 'showarticle')->name('show.article');

Route::get('addarticle','addarticle');

Route::get('accoach','accept_coach')->name('accept.coach');

Route::post('accoach/{id}','acc_coach')->name('act.coach');
Route::get('addviolations','addviolations')->name('violations');

Route::get('calc','calc')->name('calc');

Route::get('imports','imports')->name('imports');

Route::get('payments','payments')->name('payments');

Route::get('replycomplaint','replycomplaint')->name('replycomplaint');

Route::get('updateplayer','updateplayer')->name('update.player');

Route::get('updatetrainer','updatetrainer')->name('updatetrainer');

Route::get('updateviolation','updateviolation')->name('updateviolation');

Route::get('viewplayerban','view_player_ban')->name('view.player.ban');   
Route::post('playerban/{id}','player_ban')->name('ban.player');
Route::post('playerunban/{id}','player_unban')->name('unban.player');

Route::get('viewcoachban','view_coach_ban')->name('view.coach.ban');
Route::post('coachban/{id}','coach_ban')->name('ban.coach');
Route::post('coachunban/{id}','coach_unban')->name('unban.coach');


Route::get('viewplayer','viewplayer')->name('view.players');

Route::get('viewcoach','viewcoash')->name('view.coashes');
});
