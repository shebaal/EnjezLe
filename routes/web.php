<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});




// Dashboard ^_^

// Sidebar
Route::get('/admin', [homeController::class, 'home'])->name('admin');
Route::get('/admin/section', [sectionController::class, 'section'])->name('section');
Route::get('/admin/skills', [skillsController::class, 'index'])->name('skills');
Route::get('/admin/projects', [projectController::class, 'index'])->name('projects');


// section CRUD
Route::get('/admin/create_section', [sectionController::class, 'create'])->name('create_section');
Route::post('/admin/add_section', [sectionController::class, 'store'])->name('add_section');
Route::post('/admin/del_section/{id}', [sectionController::class, 'destroy'])->name('delete_section');
Route::get('/admin/edit_section/{id}', [sectionController::class, 'edit'])->name('edit_section');
Route::post('/admin/update_section/{id}', [sectionController::class, 'update'])->name('update_section');
Route::get('/admin/status-update_section/{id}', [sectionController::class, 'status_update'])->name('status_update');


// skills CRUD
Route::get('/admin/create_skills', [skillsController::class, 'create'])->name('create_skills');
Route::post('/admin/add_skills', [skillsController::class, 'store'])->name('add_skills');
Route::post('/admin/del_skills/{id}', [skillsController::class, 'destroy'])->name('delete_skills');
Route::get('/admin/edit_skills/{id}', [skillsController::class, 'edit'])->name('edit_skills');
Route::post('/admin/update_skills/{id}', [skillsController::class, 'update'])->name('update_skills');
Route::get('/admin/status-update_skills/{id}', [skillsController::class, 'status_update'])->name('status_update');