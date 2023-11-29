<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserupdateController;
use App\Http\Controllers\ChartController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Tbl_patientsController;

use function Laravel\Prompts\password;

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


// MAKE A HASH PASSWORD //
// Route::get('/test', function (){
//     $password = "123";
//     echo Hash::make($password);
// });

// =============================================================================================================================================== //
// LOGIN PAGE //
Route::get('/', function () {
        return view("pages.login.login-user");
})->name('loginpage')->middleware('ifLoggedIn');

Route::post("authenticate", [LoginController::class, "login"])->name("login");
// ================================================================================================================
// ADMIN //
    // Route::middleware(['ifLoggedOut', 'manageAdminAccess'])->group(function () {
    
        
        
        Route::view('dashboard', 'pages.admin.dashboard', 
                    [
                        'name'=>'Clarkiee',
                        'pagetitle'=>'Dashboard'
                    ]
        )->name('dashboard');

        Route::view('patient_record', 'pages.admin.patientR', 
                    [
                        'name'=>'Clarkiee',
                        'pagetitle'=>'Patients_record'
                    ]
        )->name('patient_record');

        Route::view('consultation_record', 'pages.admin.consultationSchedules', 
                    [
                        'name'=>'Clarkiee',
                        'pagetitle'=>'Consultation_record'
                    ]
        )->name('consultation_record');

        Route::view('notification', 'pages.admin.notification', 
                    [
                        'name'=>'Clarkiee',
                        'pagetitle'=>'Notification'
                    ]
        )->name('notification');

        // Route::view('Reports', 'pages.admin.reports', 
            //             [
            //                 'name'=>'Clarkiee',
            //                 'pagetitle'=>'Reports'
            //             ]
        // )->name('reports');
        
        Route::view('transaction', 'pages.admin.transaction', 
                    [
                        'name'=>'Clarkiee',
                        'pagetitle'=>'Reports'
                    ]
        )->name('transaction');

        // HOME //
            Route::post("barcode", [LoginController::class, "home"])->name("home");
            
            Route::view('/homepage', 'pages.homepage', 
                    [
                        'name'=>'Clarkiee',
                        'pagetitle'=>'Homepage'
                    ]
            )->name('homepage');

        // MEDISCAN CONTROLLERS//
            Route::post('/save-user', [UserController::class, 'saveUser'])->name('saveUser');

            Route::post('/update-user', [UserController::class, 'updateUser'])->name('updateUser');

            Route::get('/get-user', [UserController::class, 'getUser'])->name('getUser');

            Route::get('/transaction', [TransactionController::class, 'getTransaction'])->name('getTransaction');

            Route::get('/users', [UserupdateController::class, 'getUserupdate'])->name('getUserupdate');    

            Route::get('/reports', [TransactionController::class, 'getReports'])->name('getReports');

            Route::get('/delete-user', [UserController::class, 'deleteUser'])->name('deleteUser');

        // });

// ================================================================================================================

Route::post("authenticate_user", [LoginController::class, "login_user"])->name("login_user");
// =================================================================================================================
// USER
    // Route::middleware(['ifLoggedOut', 'manageUserAccess'])->group(function () {

    
    Route::view('user_consultation_record', 'pages.user.consultation-records', )->name('user_consultation_record');

    Route::view('user_consultation', 'pages.user.consultation', )->name('user_consultation');

    Route::view('user_notification', 'pages.user.notification', )->name('user_notification');

    // });

// ==================================================================================================================
// LOGOUT CONTROLL TO REDIRECT IN LOGIN PAGE //
Route::get('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->flush();
    return redirect()->route('loginpage');
});


