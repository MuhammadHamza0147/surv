<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/' , [PagesController::class , 'index'])->name('index.page');
Route::get('about-us' , [PagesController::class , 'Aboutus'])->name('about.us');
Route::get('contact-us' , [PagesController::class , 'Contactus'])->name('contact.us');
Route::get('all-services' , [PagesController::class , 'AllServices'])->name('services.all');
Route::get('surveillance-services' , [PagesController::class , 'SurveillanceServices'])->name('surveillance.services');
Route::get('cheating-partner' , [PagesController::class , 'CheatingPartner'])->name('cheating.partner');
Route::get('background-checks' , [PagesController::class , 'BackgroundCheck'])->name('background.checks');
Route::get('legal-investigation' , [PagesController::class , 'LegalInvestigation'])->name('legal.investigation');
Route::get('gps-tracker' , [PagesController::class , 'GPSTracker'])->name('gps.tracker');
Route::get('corporate' , [PagesController::class , 'Corporate'])->name('corporate');
Route::get('people-tracing' , [PagesController::class , 'PeopleTracing'])->name('people.tracing');
Route::get('privacy-policy' , [PagesController::class , 'PrivacyPolicy'])->name('privacy.policy');
Route::get('international-clients' , [PagesController::class , 'InternationalClient'])->name('international.clients');
Route::get('landloads' , [PagesController::class , 'Landload'])->name('landloads');
Route::get('faqs' , [PagesController::class , 'FAQs'])->name('faqs');
Route::post('contactus' , [PagesController::class , 'ContactForm'])->name('contactus');
Route::post('popup' , [PagesController::class , 'PopUpForm'])->name('popup');
