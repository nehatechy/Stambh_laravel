<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Front\BlogController as FrontBlogController;
use App\Http\Controllers\Front\HomeController as FrontHomeController;
use App\Http\Controllers\Front\ProjectController as FrontProjectController;
use App\Http\Controllers\Front\CareerController as FrontCareerController;
use App\Http\Controllers\Front\ContactController as FrontContactController;
use App\Http\Controllers\Front\ServiceController as FrontServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\CareerApplicationController;
use App\Http\Controllers\Admin\ContactInquiryController;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontHomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('front.about');
})->name('about');
Route::get('/thank-you', function () {
    return view('front.thank-you');
})->name('thank-you');
Route::get('/blogs', [FrontBlogController::class, 'index'])->name('blogs');

Route::get('/contact', function () {
    return view('front.contact');
})->name('contact');

// Service Pages
Route::get('/structural-audit-jaipur', [FrontServiceController::class, 'structuralAudit'])->name('services.structural-audit');
Route::get('/industrial-structural-engineering', [FrontServiceController::class, 'industrialStructural'])->name('services.industrial-structural');
Route::get('/peb-structural-design', [FrontServiceController::class, 'pebDesign'])->name('services.peb-design');
Route::get('/dpr-preparation-services', [FrontServiceController::class, 'dprPreparation'])->name('services.dpr-preparation');
Route::get('/bim-modelling-services', [FrontServiceController::class, 'bimModelling'])->name('services.bim-modelling');
Route::post('/services/inquiry', [FrontServiceController::class, 'submitInquiry'])->name('services.inquiry.submit');

Route::get('/blog', [FrontBlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [FrontBlogController::class, 'show'])->name('blog.show');
Route::get('/projects', [FrontProjectController::class, 'list'])->name('projects.list');
Route::get('/projects/{slug}', [FrontProjectController::class, 'detail'])->name('projects.detail');
Route::get('/careers', [FrontCareerController::class, 'list'])->name('careers.list');
Route::post('/careers/apply', [FrontCareerController::class, 'apply'])->name('careers.apply');
Route::middleware('auth')->get('/dashboard', function () {
    return redirect()->route('admin.dashboard');
})->name('dashboard');

// Add your other frontend routes here (blog list/detail, projects list/detail, career)


// Breeze Profile Routes (optional)
// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Projects
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::patch('/projects/{project}/status', [ProjectController::class, 'updateStatus'])->name('projects.updateStatus');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

    // Blog
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{post}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{post}', [BlogController::class, 'destroy'])->name('blog.destroy');

    // Career
    Route::get('/career', [CareerController::class, 'index'])->name('career.index');
    Route::get('/career-applications', [CareerApplicationController::class, 'index'])->name('career-applications.index');
    Route::get('/career-applications/{application}', [CareerApplicationController::class, 'show'])->name('career-applications.show');
    Route::delete('/career-applications/{application}', [CareerApplicationController::class, 'destroy'])->name('career-applications.destroy');
    Route::get('/career/create', [CareerController::class, 'create'])->name('career.create');
    Route::post('/career', [CareerController::class, 'store'])->name('career.store');
    Route::get('/career/{job}/edit', [CareerController::class, 'edit'])->name('career.edit');
    Route::put('/career/{job}', [CareerController::class, 'update'])->name('career.update');
    Route::delete('/career/{job}', [CareerController::class, 'destroy'])->name('career.destroy');

    // Contact Inquiries
    Route::get('/contact-inquiries', [ContactInquiryController::class, 'index'])->name('contact-inquiries.index');
    Route::get('/contact-inquiries/{contactInquiry}', [ContactInquiryController::class, 'show'])->name('contact-inquiries.show');
    Route::delete('/contact-inquiries/{contactInquiry}', [ContactInquiryController::class, 'destroy'])->name('contact-inquiries.destroy');

});

Route::post('/contact', [App\Http\Controllers\Front\ContactController::class, 'submit'])->name('contact.submit');


/*
|--------------------------------------------------------------------------
| Auth Routes (Login/Register/Logout - provided by Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';