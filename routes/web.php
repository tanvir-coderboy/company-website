<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoreValueController;
use App\Http\Controllers\Admin\FaqCategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PortfolioCategoryController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SectionTitleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceItemController;
use App\Http\Controllers\Admin\ServiceOneController;
use App\Http\Controllers\Admin\ServiceThreeController;
use App\Http\Controllers\Admin\ServiceTwoController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WelcomeController;
use App\Http\Controllers\Admin\WhyChooseController;
use App\Http\Controllers\Admin\WorkingAreaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;


Route::get('auth/{provider}', [WebsiteController::class, 'redirect'])->name('social.redirect');
Route::get('auth/{provider}/callback', [WebsiteController::class, 'callback'])->name('social.callback');


Route::get('/cmd', function () {
    Artisan::call('storage:link');
    Artisan::call('optimize:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return 'Done';
});



Route::get('/', [WebsiteController::class, 'home'])->name('index');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('/portfolio', [WebsiteController::class, 'portfolio'])->name('portfolio');
Route::get('/faq', [WebsiteController::class, 'faq'])->name('faq');
Route::get('/service/{title}', [WebsiteController::class, 'serviceSingle'])->name('service-single');
Route::get('/about-us', [WebsiteController::class, 'aboutUs'])->name('about-us');

Route::get('{slug}',[WebsiteController::class,'page'])->name('page');



Auth::routes(['verify' => true]);


Route::middleware(['auth', 'no.admin', 'verified'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('settings', [HomeController::class, 'settings'])->name('user.settings');
    Route::get('profile', [HomeController::class, 'profile'])->name('user.profile');
    Route::get('profile/edit', [HomeController::class, 'profileEdit'])->name('user.profile.edit');
    Route::put('/profile/update', [HomeController::class, 'update'])->name('user.profile.update');
    Route::get('password/edit', [HomeController::class, 'passwordEdit'])->name('user.password.edit');
    Route::post('/password-update', [HomeController::class, 'updatePassword'])->name('user.password.update');
});



// Admin Auth
Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');


Route::prefix('admin')
    // ->middleware(['auth:admin', 'admin.only', 'role:super-admin'])
    ->middleware(['auth:admin', 'admin.only', 'admin.has.role'])
    ->name('admin.')
    ->group(function () {


        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        Route::get('/profile/settings', [AdminProfileController::class, 'settings'])->name('profile.settings');
        Route::put('/profile/settings', [AdminProfileController::class, 'updateSettings'])->name('profile.settings.update');

        Route::get('/change-password', [AdminProfileController::class, 'changePassword'])->name('change.password');
        Route::put('/change-password', [AdminProfileController::class, 'updatePassword'])->name('change.password.update');


        Route::resource('settings', SettingController::class);
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);

        // Banner
        Route::resource('banners', BannerController::class);
        // About
        Route::resource('abouts', AboutUsController::class);
        // Blog
        Route::resource('blogs', BlogController::class);
        Route::post('blogs/status-update', [BlogController::class, 'updateStatus'])->name('blogs.status.update');

        // Contact
        Route::resource('contacts', ContactController::class);
        Route::post('contacts/status-update', [ContactController::class, 'updateStatus'])->name('contacts.status.update');


        // CoreValue
        Route::resource('cores', CoreValueController::class);
         Route::post('cores/status-update', [CoreValueController::class, 'updateStatus'])->name('cores.status.update');


        // FAQ
        Route::resource('faq-categories', FaqCategoryController::class);
        Route::post('faq-categories/status-update', [FaqCategoryController::class, 'updateStatus'])->name('faq-categories.status.update');

        Route::resource('faqs', FaqController::class);
        Route::post('faqs/status-update', [FaqController::class, 'updateStatus'])->name('faqs.status.update');


        // Pages
        Route::resource('pages', PageController::class);
        Route::post('pages/status-update', [PageController::class, 'updateStatus'])->name('pages.status.update');

        // Portfolio
        Route::resource('portfolio-categories', PortfolioCategoryController::class);
        Route::post('portfolio-categories/status-update', [PortfolioCategoryController::class, 'updateStatus'])->name('portfolio-categories.status.update');

        Route::resource('portfolios', PortfolioController::class);
        Route::post('portfolios/status-update', [PortfolioController::class, 'updateStatus'])->name('portfolios.status.update');


        // SectionTitle
        Route::resource('section-title', SectionTitleController::class);

        // Welcome
        Route::resource('welcomes', WelcomeController::class);
        // Why Choose
        Route::resource('whychooses', WhyChooseController::class);

        Route::post('whychooses/status-update', [WhyChooseController::class, 'updateStatus'])->name('whychooses.status.update');


        // Service
        Route::resource('services', ServiceController::class);
        Route::post('services/status-update', [ServiceController::class, 'updateStatus'])->name('services.status.update');

        Route::resource('service-items', ServiceItemController::class);
        Route::post('service-items/status-update', [ServiceItemController::class, 'updateStatus'])->name('service-items.status.update');


        // Team
        Route::resource('teams', TeamController::class);
        Route::post('teams/status-update', [TeamController::class, 'updateStatus'])->name('teams.status.update');
        // Testimonial
        Route::resource('testimonials', TestimonialController::class);
        Route::post('testimonials/status-update', [TestimonialController::class, 'updateStatus'])->name('testimonials.status.update');


        // Service Work//
        Route::resource('serviceone', ServiceOneController::class,);
        Route::post('serviceone/status-update', [ServiceOneController::class, 'updateStatus'])->name('serviceone.status.update');

        Route::resource('servicetwo', ServiceTwoController::class,);
        Route::post('servicetwo/status-update', [ServiceTwoController::class, 'updateStatus'])->name('servicetwo.status.update');

        Route::resource('servicethree', ServiceThreeController::class,);
        Route::post('servicethree/status-update', [ServiceThreeController::class, 'updateStatus'])->name('servicethree.status.update');

        Route::resource('workingarea', WorkingAreaController::class,);
        Route::post('workingarea/status-update', [WorkingAreaController::class, 'updateStatus'])->name('workingarea.status.update');


    });


// php artisan migrate:refresh --path=database/migrations/2025_05_12_061213_create_dps_members_table.php
