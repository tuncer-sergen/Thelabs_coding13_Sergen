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
use App\Http\Controllers\ContactHomeController;
use App\Http\Controllers\MailContactHomeController;
use App\Http\Controllers\ServicePrimeController;
use App\Http\Controllers\ContactMapController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CategorieController;

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
use App\Models\ContactHome;
use App\Models\ServicePrime;
use App\Models\ChoixTeam;
use App\Models\ContactMap;
use App\Models\Blog;
use App\Models\Tag;
use App\Models\Categorie;

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
    $service = Service::orderBy('id','desc')->paginate(9);
    

    $serviceRandom = Service::all()->random(3);
    $teamTitre = TeamTitre::all();
    $team = Team::all();
    $choix = ChoixTeam::all();
    $teamRandom1 = Team::all()->except($choix[0]->choix->id)->random(1);
    $teamRandom2 = Team::all()->except([$choix[0]->choix->id,$teamRandom1[0]->id])->random(1);
    
    $ready = Ready::all();
    $contact = ContactHome::all();
    
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
    
    return view('pages.home',compact('menu','banniereImg','banniereLogoSlogan','presentation','video','testimonialTitre','testimonial','start','end','slice','startService','endService','sliceService','service','serviceRandom','teamTitre','startTeam','endTeam','sliceTeam','team','ready','contact','serviceTitre','teamRandom1','teamRandom2','choix'));
});
// Home
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
    // choix membre principal
Route::post('/choix',[TeamController::class,'choix']);
    // TeamTitre
Route::resource('/teamTitre', TeamTitreController::class);
    // Ready
Route::resource('/ready', ReadyController::class);
    // ContactHome
Route::resource('/contactHome', ContactHomeController::class);

// Service
    // ServicePriméTitre
Route::resource('/servicePrime', ServicePrimeController::class);


// Service
Route::get('/service', function () {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $contact = ContactHome::all();
    $serviceTitre = ServiceTitre::all();
    $service = Service::orderBy('id','desc')->get();
    $servicePrime = ServicePrime::all();
    $servicePrime1 = Service::orderBy('id','desc')->take(3)->get();
    $servicePrime2 = Service::orderBy('id','desc')->skip(3)->take(3)->get();

    // couleur dans titre Service
    $selectService = $serviceTitre[0]->titre;
    $startService = Str::before($selectService, '(');
    $endService = Str::after($selectService, ')');
    $sliceService = Str::between($selectService, '(', ')');
    // couleur dans titre Service Primé
    $selectServicePrime = $servicePrime[0]->titreServicePrime;
    $startServicePrime = Str::before($selectServicePrime, '(');
    $endServicePrime = Str::after($selectServicePrime, ')');
    $sliceServicePrime = Str::between($selectServicePrime, '(', ')');

    return view('pages.services',compact('contact','banniereLogoSlogan','menu','startService','endService','sliceService','service','serviceTitre','servicePrime1','servicePrime2','servicePrime','startServicePrime','endServicePrime','sliceServicePrime'));
});

// Blog
Route::get('/blog', function () {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $article = Blog::all();
    return view('pages.blog',compact('menu','banniereLogoSlogan','article'));
});
// Blog Admin
Route::resource('/blogAdmin', BlogController::class);
// Blog Tag
Route::resource('/tag', TagController::class);
// Blog Categorie
Route::resource('/cat', CategorieController::class);

// Blog-post
Route::get('/blog-post', function () {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    return view('pages.blog-post',compact('menu','banniereLogoSlogan'));
});

// Contact
Route::get('/contact', function () {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $contact = ContactHome::all();
    $map = ContactMap::all();
    
    return view('pages.contact',compact('contact','banniereLogoSlogan','menu','map'));
});

// Contact admin
Route::resource('/contactMap', ContactMapController::class);

// mailing
Route::post('/mailHome', [MailContactHomeController::class,'store']);

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
