<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VisitController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ServerAdminController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('lang/{lang}', function ($lang) {
//     Session::put('locale', $lang);
//     return redirect()->back();
// })->middleware('language');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch')->middleware('language');

Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [MainController::class, 'home'])->name('mukundpur.home')->middleware('language');
Route::get('/construction', [MainController::class, 'construction'])->name('mukundpur.construction')->middleware('language');

Route::group(['prefix' => 'home', 'middleware' => 'language'], function () {
    Route::get('/contact-us', [MainController::class, 'contact'])->name('mukundpur.contact');
    Route::get('/gallery', [MainController::class, 'fetchAllImages'])->name('mukundpur.gallery');
});

Route::group(['prefix' => 'about', 'middleware' => 'language'], function () {
    Route::get('/director-desk', [AboutController::class, 'director'])->name('mukundpur.director');
    Route::get('/about-zoo', [AboutController::class, 'about'])->name('mukundpur.about');
    Route::get('/vision', [AboutController::class, 'vision'])->name('mukundpur.vision');
    Route::get('/heritage', [AboutController::class, 'heritage'])->name('mukundpur.heritage');
    Route::get('/foundation', [AboutController::class, 'foundation'])->name('mukundpur.foundation');
});

Route::group(['prefix' => 'visit', 'middleware' => 'language'], function () {
    Route::get('/timings', [VisitController::class, 'timings'])->name('mukundpur.timings');
    Route::get('/visitors', [VisitController::class, 'visitors'])->name('mukundpur.visitors');
    Route::get('/ticket', [VisitController::class, 'ticket'])->name('mukundpur.ticket');
    Route::get('/special-attraction', [VisitController::class, 'specialAttraction'])->name('mukundpur.special-attraction');
    Route::get('/dos', [VisitController::class, 'dos'])->name('mukundpur.dos');
});

Route::group(['prefix' => 'management', 'middleware' => 'language'], function () {
    Route::get('/chart', [ManagementController::class, 'chart'])->name('mukundpur.chart');
    Route::get('/human', [ManagementController::class, 'human'])->name('mukundpur.human');
    Route::get('/rescue', [ManagementController::class, 'rescue'])->name('mukundpur.rescue');
});

Route::group(['prefix' => 'animals', 'middleware' => 'language'], function () {
    Route::get('/mammals', [AnimalController::class, 'mammals'])->name('mukundpur.mammals');
    Route::get('/reptiles', [AnimalController::class, 'reptiles'])->name('mukunpur.reptiles');
    Route::get('/birds', [AnimalController::class, 'birds'])->name('mukundpur.birds');
    Route::get('/arrivals-borns', [AnimalController::class, 'arrivalsBorns'])->name('mukundpur.arrivals-borns');
    Route::get('/enrichment', [AnimalController::class, 'enrichment'])->name('mukundpur.enrichment');
    Route::get('/ranging', [AnimalController::class, 'ranging'])->name('mukundpur.ranging');
    Route::get('/adoption', [AnimalController::class, 'adoption'])->name('mukundpur.adoption');
});

Route::group(['prefix' => 'news', 'middleware' => 'language'], function () {
    Route::get('/events-happenings', [MainController::class, 'eventsHappenings'])->name('mukundpur.events-happenings');
    Route::get('/education-programs', [MainController::class, 'educationPrograms'])->name('mukundpur.education');
    Route::get('/newses', [MainController::class, 'newses'])->name('mukundpur.newses');
    Route::get('/news-details/{slug}', [MainController::class, 'news_details'])->name('mukundpur.news-details');
    Route::get('/events', [MainController::class, 'events'])->name('mukundpur.events');
    Route::get('/event-details/{slug}', [MainController::class, 'event_details'])->name('mukundpur.event-details');
    Route::get('/training-programs', [MainController::class, 'trainingPrograms'])->name('mukundpur.training-programs');
});

Auth::routes();

Route::group(['as' => 'serveradmin.', 'prefix' => 'serveradmin', 'middleware' => ['auth', 'isServeradmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');

    // For Tender Quotation
    // Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    // Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    // Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    // Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    // Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    // Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    // Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');

    // For Documents
    // Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    // Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    // Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    // Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    // Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    // Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    // Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
    // Change Admin Password
    Route::get('adminChangePassword/{id}', [SettingsController::class, 'adminChangePassword'])->name('changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', [SettingsController::class, 'adminUpdatePassword'])->name('updateadminpassword');
    // Change Superadmin Password
    Route::get('superAdminChangePassword/{id}', [SettingsController::class, 'superAdminChangePassword'])->name('changesuperadminpassword');
    Route::match(['get', 'put'], 'superAdminUpdatePassword/{id}', [SettingsController::class, 'superAdminUpdatePassword'])->name('updatesuperadminpassword');

    // For Admin List
    Route::get('/adminList', [ServerAdminController::class, 'index'])->name('adminList');
    Route::get('/superAdminList', [ServerAdminController::class, 'superAdminList'])->name('superAdminList');
    Route::get('/role-edit/{id}', [ServerAdminController::class, 'editUserRole'])->name('editUserRole');
    Route::get('/superadmin-role-edit/{id}', [ServerAdminController::class, 'editSuperAdminRole'])->name('editSuperAdminRole');
    Route::match(['get', 'put'], '/role-update/{id}', [ServerAdminController::class, 'updateUserRole'])->name('updateUserRole');
    Route::match(['get', 'put'], '/superadmin-role-update/{id}', [ServerAdminController::class, 'updateSuperAdminRole'])->name('updateSuperAdminRole');
    Route::delete('/role-delete/{id}', [ServerAdminController::class, 'deleteUserRole'])->name('deleteUserRole');
    Route::get('/changenewsstatus', [ServerAdminController::class, 'changeNewsStatus'])->name('changeNewsStatus');
    Route::get('/changeeventstatus', [ServerAdminController::class, 'changeEventStatus'])->name('changeEventStatus');
    Route::get('/changetenderstatus', [ServerAdminController::class, 'changeTenderStatus'])->name('changeTenderStatus');
    Route::get('/changedocumentstatus', [ServerAdminController::class, 'changeDocumentStatus'])->name('changeDocumentStatus');
    Route::get('/changeuserstatus', [ServerAdminController::class, 'changeUserStatus'])->name('changeUserStatus');
    Route::get('/changeimagestatus', [ServerAdminController::class, 'changeImageStatus'])->name('changeImageStatus');
});

Route::group(['as' => 'superadmin.', 'prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');

    // For Tender Quotation
    // Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    // Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    // Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    // Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    // Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    // Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    // Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');

    // For Documents
    // Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    // Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    // Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    // Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    // Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    // Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    // Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
    Route::get('adminChangePassword/{id}', [SettingsController::class, 'adminChangePassword'])->name('changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', [SettingsController::class, 'adminUpdatePassword'])->name('updateadminpassword');

    // For User List
    Route::get('/adminList', [ServerAdminController::class, 'index'])->name('adminList');
    Route::get('/role-edit/{id}', [ServerAdminController::class, 'editUserRole'])->name('editUserRole');
    Route::match(['get', 'put'], '/role-update/{id}', [ServerAdminController::class, 'updateUserRole'])->name('updateUserRole');
    Route::delete('/role-delete/{id}', [ServerAdminController::class, 'deleteUserRole'])->name('deleteUserRole');
    Route::get('/changenewsstatus', [ServerAdminController::class, 'changeNewsStatus'])->name('changeNewsStatus');
    Route::get('/changeeventstatus', [ServerAdminController::class, 'changeEventStatus'])->name('changeEventStatus');
    Route::get('/changetenderstatus', [ServerAdminController::class, 'changeTenderStatus'])->name('changeTenderStatus');
    Route::get('/changedocumentstatus', [ServerAdminController::class, 'changeDocumentStatus'])->name('changeDocumentStatus');
    Route::get('/changeuserstatus', [ServerAdminController::class, 'changeUserStatus'])->name('changeUserStatus');
    Route::get('/changeimagestatus', [ServerAdminController::class, 'changeImageStatus'])->name('changeImageStatus');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history', 'language']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');
    Route::get('pending-news', [NewsController::class, 'pendingNews'])->name('newses.pending');

    // For Events Routes
    Route::get('events', [EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('events.create');
    Route::match(['get', 'post'], 'events/store', [EventController::class, 'store'])->name('events.store');
    Route::get('events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
    Route::match(['get', 'put'], 'events/{id}/update', [EventController::class, 'update'])->name('events.update');
    Route::match(['get', 'delete'], 'events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    Route::delete('deleteEventImage/{id}', [EventController::class, 'deleteEventImage'])->name('events.destroy_image');
    Route::delete('deleteEventImages/{id}', [EventController::class, 'deleteEventImages'])->name('events.destroy_images');
    Route::get('pending-event', [EventController::class, 'pendingEvent'])->name('events.pending');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');
    Route::get('pending-images', [GalleryController::class, 'pendingImages'])->name('images.pending');

    // For Tender Quotation
    // Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    // Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    // Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    // Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    // Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    // Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');
    // Route::get('pending-tenders', [TenderController::class, 'pendingTenders'])->name('tender.pending');

    // For Documents
    // Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    // Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    // Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    // Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    // Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    // Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
    // Route::get('pending-documents', [DocumentController::class, 'pendingDocuments'])->name('document.pending');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('updatePassword');
});
