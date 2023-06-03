<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangerController;


Route::prefix('manger')->middleware('check.manger','auth')->controller(MangerController::class)->group(function () {

Route::get('index', 'index')->name('admin.index');

Route::get('addadvice', 'peagadvice')->name('admin.peag.advice');

Route::post('addadvice', 'addadvice')->name('add.add.advice');

Route::get('showAdvices', 'showAdvices')->name('admin.show.advices');

Route::get('showarticle', 'showarticle')->name('admin.show.article');

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
