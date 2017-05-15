<?php

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

Route::get('/', 'HomeController@index')->name('home.page');
Route::get('/council', 'CouncilController@index')->name('council.page');
Route::get('/council/{id}', 'CouncilController@showCouncil')->name('council.info');

Route::get('/report/step1', 'ReportController@step1')->name('report.step1');
Route::post('/report/step2', 'ReportController@step2')->name('report.step2');
Route::post('/report/step3', 'ReportController@step3')->name('report.step3');
Route::post('/report/submit', 'ReportController@submit')->name('report.submit');
Route::get('/report/error', 'ReportController@error')->name('report.error');
Route::get('/report/success', 'ReportController@success')->name('report.success');

Route::get('/problems', 'ProblemController@index')->name('view.problem');
Route::get('/problems/{suburb}', 'ProblemController@view')->name('view.problem.suburb');

Route::get('/about', 'AboutController@index')->name('about.page');
Route::get('/faq', 'FaqController@index')->name('faq.page');
Route::get('/contact', 'ContactController@index')->name('contact.page');
