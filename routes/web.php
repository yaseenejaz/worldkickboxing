<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();

//Home routes
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@home')->name('home');
// 






// Route::get('newcompetitor/{id}', 'TournamentController@newComp')->name('tournament.newComp');

//Tournament routes
Route::resource('tournament', 'TournamentsController');
Route::get('/get/tournament/descipline', 'TournamentsController@getTournamentDescipline')->name('get.tournament.descipline');
Route::get('/user/tournament/{slug?}', 'TournamentsController@showTournament')->name('show.tournament');
Route::post('/update/tournament/description', 'TournamentsController@updateTournamentDescription')->name('update.tournament.description');
Route::get('/change/tournament/visibility', 'TournamentsController@changeTournamentVisibility')->name('change.tournament.visibility');
Route::get('tournament/draw/{slug?}','TournamentsController@draw')->name('tournament.draw');
Route::get('tournament/registration/{slug?}','TournamentsController@registration')->name('tournament.registration');
Route::get('tournament/orgnaization/{slug?}','TournamentsController@orgnaization')->name('tournament.orgnaization');
Route::post('tournament/orgnaization/{slug?}','TournamentsController@saveorgnaization')->name('tournament.saveorgnaization');
Route::get('tournament/school_info/{slug?}','TournamentsController@school_info')->name('school_info');
Route::get('tournament/schedule/{slug?}','TournamentsController@schedule')->name('tournament.schedule');




Route::get('/change/tournament/draw', 'TournamentsController@changeTournamentDraw')->name('change.tournament.draw');

//About Us routes
Route::resource('about', 'AboutUsController');

//Contact Us routes
Route::resource('contact', 'ContactUsController');

//Pricing routes
Route::resource('pricing', 'PricingController');

//User routes
Route::get('/user/{slug?}', 'UserController@user')->name('user');
Route::get('/billing/{slug?}', 'UserController@billing')->name('billing');
Route::get('/account_setting/{slug?}', 'UserController@accountSetting')->name('account.setting');
Route::post('/user/info/update', 'UserController@userInfoUpdate')->name('user.info.update');
Route::post('/guest/info/update', 'UserController@guestInfoUpdate')->name('guest.info.update');
Route::post('/user/password/update', 'UserController@userPasswordUpdate')->name('user.password.update');
Route::get('/stripe/{slug?}', 'UserController@stripe')->name('stripe');
Route::get('/paypal/{slug?}', 'UserController@paypal')->name('paypal');
Route::get('/user/ranking/{slug?}', 'UserController@userTournamentRanking')->name('user.tournament.ranking');

//Setting routes
Route::post('general/{slug?}','SettingController@savegenral')->name('general.save');
Route::get('/general/{slug?}', 'SettingController@general')->name('general');
Route::get('/registration_setting/{slug?}', 'SettingController@registration')->name('registration.setting');
Route::get('/venue_setting/{slug?}', 'SettingController@venue')->name('venue.setting');
Route::get('/image_setting/{slug?}', 'SettingController@image')->name('image.setting');
Route::post('/image_setting/{slug?}','SettingController@saveimage')->name('save.image');
Route::get('/draw_setting/{slug?}', 'SettingController@draw')->name('draw.setting');
Route::get('/entry_fees_setting/{slug?}', 'SettingController@entryFees')->name('entry.setting');
Route::get('/payment_setting/{slug?}', 'SettingController@payment')->name('payment.setting');
Route::get('/document_setting/{slug?}', 'SettingController@document')->name('document.setting');
Route::get('/email_setting/{slug?}', 'SettingController@email')->name('email.setting');
Route::get('/permission_setting/{slug?}', 'SettingController@permission')->name('permission.setting');
Route::get('/result_setting/{slug?}', 'SettingController@result')->name('result.setting');
Route::get('/certificate_setting/{slug?}', 'SettingController@certificate')->name('certificate.setting');
Route::get('/weigh_in_setting/{slug?}', 'SettingController@weighIn')->name('weigh.setting');
Route::get('/license_setting/{slug?}', 'SettingController@license')->name('license.setting');
Route::get('/physical_setting/{slug?}', 'SettingController@physical')->name('physical.setting');
Route::get('/edit_certificate/{slug?}', 'SettingController@editCerticate')->name('edit.certificate');
Route::get('/data_setting/{slug}', 'SettingController@data')->name('data.setting');

//Event routes
Route::get('/new/tournament/event/{slug?}', 'EventController@newEvent')->name('new.tournament.event');
Route::post('/create/new/tournament/event', 'EventController@createNewEvent')->name('create.new.tournament.event');
Route::get('/import/event', 'EventController@importEvent')->name('import.event');
Route::get('/tournament/event/{slug?}/{slug2?}/division', 'EventController@eventDivision')->name('event.division');
Route::get('/tournament/event/{slug?}/{slug2?}/division/edit', 'EventController@eventEditDivision')->name('event.division.edit');
Route::get('/tournament/event/{slug?}/{slug2?}/categories', 'EventController@eventCategories')->name('event.categories');
Route::get('/tournament/event/{slug?}/{slug2?}/competitors', 'EventController@eventCompetitors')->name('event.competitors');
Route::get('/tournament/event/{slug?}/{slug2?}/setting', 'EventController@eventSetting')->name('event.setting');
Route::get('event/newcompetitor/{slug?}','eventController@eventCompetitor')->name('event.newcompetitor');
Route::post('event/store/{slug?}','eventController@storeevent')->name('storeevent');
Route::get('event/event_info/{slug?}','eventController@event_info')->name('event_info');

