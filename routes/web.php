<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BanniereImgController;
use App\Http\Controllers\BanniereLogoSloganController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialTitreController;
use App\Http\Controllers\ServiceTitreController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamTitreController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ReadyController;

use App\Models\Menu;
use App\Models\banniereImg;
use App\Models\banniereLogoSlogan;
use App\Models\Presentation;
use App\Models\Video;
use App\Models\TestimonialTitre;
use App\Models\Testimonial;
use App\Models\ServiceTitre;
use App\Models\Service;
use App\Models\Team;
use App\Models\TeamTitre;
use App\Models\Ready;

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

Route::get('/', function () {
    $menu = Menu::all();
    $banniereImg =  banniereImg::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $presentation = Presentation::all();
    $video = Video::all();
    $testimonialTitre = TestimonialTitre::all();
    $testimonial = Testimonial::orderBy('id','desc')->get();
    $serviceTitre = ServiceTitre::all();
    $service = Service::orderBy('id','desc')->get();
    $serviceRandom = Service::all()->random(3);
    $teamTitre = TeamTitre::all();
    $team = Team::all();
    $ready = Ready::all();

    // couleur dans titre Presentation
    $select = $presentation[0]->titre;
    $start = Str::before($select, '(');
    $end = Str::after($select, ')');
    $slice = Str::between($select, '(', ')');
    // couleur dans titre Service
    $selectService = $serviceTitre[0]->titre;
    $startService = Str::before($selectService, '(');
    $endService = Str::after($selectService, ')');
    $sliceService = Str::between($selectService, '(', ')');
        // couleur dans titre Team
    $selectTeam = $teamTitre[0]->titre;
    $startTeam = Str::before($selectTeam, '(');
    $endTeam = Str::after($selectTeam, ')');
    $sliceTeam = Str::between($selectTeam, '(', ')');
    
    return view('pages.home',compact('menu','banniereImg','banniereLogoSlogan','presentation','video','testimonialTitre','testimonial','start','end','slice','startService','endService','sliceService','service','serviceRandom','teamTitre','startTeam','endTeam','sliceTeam','team','ready'));
});
// home
    // menu
Route::resource('menu', MenuController::class);
    // banniere
        // img
Route::resource('banniereImg', BanniereImgController::class);
        // logo
Route::resource('banniereLogoSlogan', BanniereLogoSloganController::class);
    // presentation
Route::resource('presentation', PresentationController::class);
    // Video
Route::resource('video', VideoController::class);
    // testimonial
Route::resource('testimonial', TestimonialController::class);
    // testimonialTitre
Route::resource('testimonialTitre', TestimonialTitreController::class);
    // ServiceHome
Route::resource('/serviceHome', ServiceController::class);
    // ServiceTitreHome
Route::resource('/serviceTitreHome', ServiceTitreController::class);
    // Team
Route::resource('/team', TeamController::class);
    // TeamTitre
Route::resource('/teamTitre', TeamTitreController::class);
    // Ready
Route::resource('/ready', ReadyController::class);

// Service
Route::get('/service', function () {
    return view('pages.services');
});

// Contact
Route::get('/contact', function () {
    return view('pages.contact');
});


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
