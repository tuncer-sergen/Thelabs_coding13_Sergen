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
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\NewsletterController;

use Illuminate\Http\Request;

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
use App\Models\Commentaire;
use App\Models\Newsletter;
use App\Models\User;
use App\Models\Role;
use App\Models\MailContctHome;

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
Route::resource('menu', MenuController::class)->middleware(['auth','adminWebmaster']);
    // banniere
        // img
Route::resource('banniereImg', BanniereImgController::class)->middleware(['auth','adminWebmaster']);
        // logo
Route::resource('banniereLogoSlogan', BanniereLogoSloganController::class)->middleware(['auth','adminWebmaster']);
    // presentation
Route::resource('presentation', PresentationController::class)->middleware(['auth','adminWebmaster']);
    // Video
Route::resource('video', VideoController::class)->middleware(['auth','adminWebmaster']);
    // testimonial
Route::resource('testimonial', TestimonialController::class)->middleware(['auth','adminWebmaster']);
    // testimonialTitre
Route::resource('testimonialTitre', TestimonialTitreController::class)->middleware(['auth','adminWebmaster']);
    // ServiceHome
Route::resource('/serviceHome', ServiceController::class)->middleware(['auth','adminWebmaster']);
    // ServiceTitreHome
Route::resource('/serviceTitreHome', ServiceTitreController::class)->middleware(['auth','adminWebmaster']);
    // Team
Route::resource('/team', TeamController::class)->middleware(['auth','adminWebmaster']);
    // choix membre principal
Route::post('/choix',[TeamController::class,'choix'])->middleware(['auth','adminWebmaster']);
    // TeamTitre
Route::resource('/teamTitre', TeamTitreController::class)->middleware(['auth','adminWebmaster']);
    // Ready
Route::resource('/ready', ReadyController::class)->middleware(['auth','adminWebmaster']);
    // ContactHome
Route::resource('/contactHome', ContactHomeController::class)->middleware(['auth','adminWebmaster']);

// Service
    // ServicePriméTitre
Route::resource('/servicePrime', ServicePrimeController::class)->middleware(['auth','adminWebmaster']);


// Service
Route::get('/service', function () {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $contact = ContactHome::all();
    $serviceTitre = ServiceTitre::all();
    $service = Service::orderBy('id','desc')->paginate(9);
    $servicePrime = ServicePrime::all();
    $servicePrime1 = Service::orderBy('id','desc')->take(3)->get();
    $servicePrime2 = Service::orderBy('id','desc')->skip(3)->take(3)->get();
    $blog = Blog::orderBy('id','desc')->take(3)->get();

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

    return view('pages.services',compact('contact','banniereLogoSlogan','menu','startService','endService','sliceService','service','serviceTitre','servicePrime1','servicePrime2','servicePrime','startServicePrime','endServicePrime','sliceServicePrime','blog'));
});

// Blog
Route::get('/blog', function () {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $article = Blog::all();
    $tag = Tag::all();
    $cat = Categorie::all();
    $tagRandom = Tag::all()->random(9);
    $catRandom = Categorie::all()->random(6);
    $com = Commentaire::all();

    return view('pages.blog',compact('menu','banniereLogoSlogan','article','tag','cat','tagRandom','catRandom','com'));
});
// Blog Admin
Route::resource('/blogAdmin', BlogController::class)->middleware(['auth','redacteurAdminWebmaster']);
// Blog Tag
Route::resource('/tag', TagController::class)->middleware(['auth','redacteurAdminWebmaster']);
// Blog Categorie
Route::resource('/cat', CategorieController::class)->middleware(['auth','redacteurAdminWebmaster']);
// BlogAdmin confirme
Route::get('/confirmeArticle', function () {
    $datas = Blog::all();
    $tag = Tag::all();
    $cat = Categorie::all();
    return view('admin.blog.articlesConfirmation',compact('datas','tag','cat'));
})->middleware(['auth','adminWebmaster']);
// articles accepter
Route::post('/accepterArticle/{id}',[BlogController::class,'accepter'])->middleware(['auth','adminWebmaster']);


// Blog-post

Route::get('/blog-post/{id}', function ($id) {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $blog = Blog::find($id);
    $tag = Tag::all();
    $cat = Categorie::all();
    $tagRandom = Tag::all()->random(9);
    $catRandom = Categorie::all()->random(6);
    $com = Commentaire::all();
    $nbrCom = Commentaire::where('blog_id',$blog->id)->count();

    return view('pages.blog-post',compact('menu','banniereLogoSlogan','blog','tag','cat','tagRandom','catRandom','com','nbrCom'));

});
// commentaire
Route::resource('/commentaire', CommentaireController::class);

// Contact
Route::get('/contact', function () {
    $menu = Menu::all();
    $banniereLogoSlogan = banniereLogoSlogan::all();
    $contact = ContactHome::all();
    $map = ContactMap::all();
    
    return view('pages.contact',compact('contact','banniereLogoSlogan','menu','map'));
});

// Contact admin
Route::resource('/contactMap', ContactMapController::class)->middleware(['auth','adminWebmaster']);


// mailing
Route::post('/mailHome', [MailContactHomeController::class,'store']);

// newsletter
Route::resource('/newsLetter', NewsletterController::class);

// User Admin
Route::get('/userAdmin', function () {
    $user = User::all();
    $team = Team::all();
    return view('admin.user',compact('user','team'));
})->middleware(['auth','admin']);
Route::get('/userAdmin/{id}/edit', function ($id) {
    $user = User::find($id);
    $role = Role::all();
    return view('admin.user_edit',compact('user','role'));
})->middleware(['auth','admin']);
Route::post('/userAdmin/{id}', function ($id,Request $request) {
    $newEntry = User::find($id);
    $newEntry->role_id = $request->role_id;
    $newEntry->save();
    return redirect('/userAdmin');
})->middleware(['auth','admin']);
// rajout user vers team
Route::post('/userTeam/{id}', function ($id) {
    $userTeam = new Team;
    $userUser = User::find($id);
    $userTeam->imageTeam = $userUser->src;
    $userTeam->nomTeam = $userUser->name;
    $userTeam->prenomTeam = $userUser->prenom;
    $userTeam->posteTeam = $userUser->poste;
    $userTeam->save();
    return redirect()->back();
});
Route::get('/newsletterAdmin', function () {
    $newsletter = Newsletter::all();
    return view('admin.newsletter',compact('newsletter'));
})->middleware(['auth','adminWebmaster']);

// Mail
Route::get('/mailAdmin', function () {
    $mail = MailContctHome::all();
    return view('admin.mail',compact('mail'));
})->middleware(['auth','adminWebmaster']); 

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware(['auth','redacteurAdminWebmaster']);
