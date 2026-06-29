<?php

use Illuminate\Support\Facades\Route; // Safe side ke liye facade import kiya
use App\Http\Controllers\BusinessRegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EasebuzzController;

// ----------------------------------------------------
// Easebuzz Payment Gateway Routes (Fully Open)
// ----------------------------------------------------
Route::get('/pay-now', [EasebuzzController::class, 'initiatePayment'])->name('easebuzz.pay');
Route::post('/payment/success', [EasebuzzController::class, 'paymentSuccess'])->name('easebuzz.success');
Route::post('/payment/failure', [EasebuzzController::class, 'paymentFailure'])->name('easebuzz.failure');


// ----------------------------------------------------
// Public Frontend Routes
// ----------------------------------------------------
Route::get('/', [BusinessRegistrationController::class, 'landingView']);

Route::get('/thank-you/{id}', function ($id) {
    return view('business.thank_you', compact('id'));
})->name('thank.you');        

Route::get('/about-us', function () {
    return view('about_us');
});  

Route::get('/blog', [BlogController::class, 'showBlog']);

Route::get('/projects', function () {
    return view('projects');
});  

Route::get('/contact', function () {
    return view('contact');
});
             
Route::get('/privacy-policy', function () {
    return view('privacy_policy');
}); 

Route::get('/terms-and-conditions', function () {
    return view('terms_condition');
}); 

Route::get('/register-business', [BusinessRegistrationController::class, 'index']);
Route::get('/pricing/{slug}', [BusinessRegistrationController::class, 'pricing']);
Route::post('/register-business', [BusinessRegistrationController::class, 'storeStep1'])->name('business.step1');

Route::get('/step2/{id}', [BusinessRegistrationController::class, 'step2']);
Route::post('/step2/{id}', [BusinessRegistrationController::class, 'storeStep2']);

Route::get('/book-appointment', [AppointmentController::class, 'createByUser']);
Route::post('/book-appointment', [AppointmentController::class, 'storeByUser'])->name('book-appointment');

Route::get('/employee/dashboard', function () {
     return view('employee.dashboard');
})->middleware('auth');


// ----------------------------------------------------
// Admin Authentication Routes
// ----------------------------------------------------
Route::get('backend/admin/login', [AdminController::class, 'login'])->name('admin.login.view');
// MISTAKE FIXED HERE: Changed name from 'login' to 'admin.login'
Route::post('backend/admin/login', [AdminController::class, 'authenticate'])->name('admin.login'); 


// ----------------------------------------------------
// Protected Admin Dashboard Routes (Auth Required)
// ----------------------------------------------------
Route::middleware('auth')->group(function() {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/registrations', [AdminController::class, 'registrations']);
    Route::get('/admin/registrations/{registration}', [BusinessRegistrationController::class, 'show'])->name('registrations.show');
    Route::get('/admin/view/{id}', [AdminController::class, 'view']);
    Route::get('/admin/download/{file}', [AdminController::class, 'download']);

    // Appointments
    Route::get('/admin/book-appointment', [AppointmentController::class, 'create']);
    Route::post('/admin/book-appointment', [AppointmentController::class, 'store']);
    Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/admin/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');
    Route::post('/admin/appointments/{id}/update', [AppointmentController::class, 'update'])->name('appointments.update');
    Route::post('/admin/appointments/{id}/delete', [AppointmentController::class, 'destroy'])->name('appointments.delete');
    Route::get('/admin/appointment/status/{id}', [AppointmentController::class, 'toggleStatus'])->name('appointment.toggleStatus');

    // Business Reg inside Admin
    Route::get('/admin/register-business', [BusinessRegistrationController::class, 'admin_registartion']);
    Route::post('/admin/register-business', [BusinessRegistrationController::class, 'admin_register_business']);
    
    // Logout
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Blogs Management
    Route::get('/admin/blogs', [BlogController::class, 'index'])->name('blogs.index');
    Route::get('/admin/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
    Route::post('/admin/blogs', [BlogController::class, 'store'])->name('blogs.store');
    Route::get('/admin/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
    Route::get('/admin/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
    Route::put('/admin/blogs/{id}', [BlogController::class, 'update'])->name('blogs.update');
    Route::delete('/admin/blogs/{id}', [BlogController::class, 'destroy'])->name('blogs.destroy');        
});