<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactSettingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\FooterContactInfoController;
use App\Http\Controllers\Admin\FooterHelpLinkController;
use App\Http\Controllers\Admin\FooterInfoController;
use App\Http\Controllers\Admin\FooterSocialLinkController;
use App\Http\Controllers\Admin\FooterUsefulLinksController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SeoSettginController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillsItemController;
use App\Http\Controllers\Admin\SkillsSectionSettingController;
use App\Http\Controllers\Admin\TyperController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TermsAndConditionController;
use App\Models\GeneralSetting;
use App\Models\Message;
use App\Models\TermsAndCondition;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/terms', function () {
    $terms = TermsAndCondition::first();
    return view('frontend.terms.index', compact('terms'));
});

Route::get('/portfolio-details', function () {
    $setting = GeneralSetting::frist();
    return view('frontend.portfolio-details', compact('setting'));
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('portfolio-details/{id}', [HomeController::class, 'showPortfolio'])->name('show-portfolio');
Route::post('contact', [HomeController::class, 'contact'])->name('contact');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('hero', HeroController::class);
    Route::resource('typer-title', TyperController::class);

    Route::resource('services', ServiceController::class);

    Route::get('resume/download', [AboutController::class, 'resumeDonwnload'])->name('resume.download');
    Route::resource('about', AboutController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('portfolio-item', PortfolioItemController::class);

    Route::resource('portfolio-section-setting', PortfolioSectionSettingController::class);

    Route::resource('skills-section-setting', SkillsSectionSettingController::class);
    Route::resource('skills-item', SkillsItemController::class);

    Route::resource('experience', ExperienceController::class);

    Route::resource('contact-section-setting', ContactSettingController::class);

    Route::resource('footer-social', FooterSocialLinkController::class);

    Route::resource('footer-info', FooterInfoController::class);
    Route::resource('footer-contact-info', FooterContactInfoController::class);
    Route::resource('footer-useful-link', FooterUsefulLinksController::class);
    Route::resource('footer-help-link', FooterHelpLinkController::class);

    Route::get('settings', SettingController::class)->name('setting.index');
    Route::resource('general-setting', GeneralSettingController::class);

    Route::resource('seo-setting', SeoSettginController::class);

    /** Adatkezelési tájékoztató */
    Route::get('terms-and-conditions', [TermsAndConditionController::class, 'index'])->name('terms-and-conditions.index');
    Route::put('terms-and-conditions/update', [TermsAndConditionController::class, 'update'])->name('terms-and-conditions.update');

    Route::resource('messages', MessageController::class);
});
