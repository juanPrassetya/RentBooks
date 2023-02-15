<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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


// group   guest ( bisa di buka walaupun belum login )
Route::middleware('guest')->group(function(){
    Route::get('/', function () {
        return view('renbook');
    });

    Route::get('login', [AuthController::class, 'masuk'])->name('login');
    Route::post('login', [AuthController::class, 'auth']);
    Route::get('login', function () {
        return view('masuk');
    });
});
// group auth ( gab bisa di buka kalo belum login / registr)
Route::middleware('auth')->group(function(){

    Route::get('profile', [UserController::class, 'profile'])->middleware(['only_client']);
    Route::get('dashboard', [AdminController::class, 'index'])->middleware(['only_admin']);
    //(ini yang ada di file admin(sidebar))
    Route::get('book', [AdminController::class, 'book']);
    Route::get('pageadmin', [AdminController::class, 'pageadmin']);
    //category book
    Route::get('categories', [AdminController::class, 'categories']);
    Route::get('categories-add', [AdminController::class, 'categoriesAdd']);
    Route::post('categories-add', [AdminController::class, 'categoryStore']);
    Route::get('categories-edit/{slug}', [AdminController::class, 'categoriesEdit']);
    Route::put('categories-edit/{slug}', [AdminController::class, 'categoriesUpdate']);
    Route::get('category-delete/{slug}',[AdminController::class,'categoryDestroy']);
    //books
    Route::get('books',[AdminController::class, 'books']);
    Route::get('books-add',[AdminController::class, 'booksAdd']);
    Route::get('books-edit/{slug}',[AdminController::class,'booksEdit']);
    Route::put('books-edit/{slug}', [AdminController::class, 'booksUpdate']);
    Route::get('books-delete/{slug}',[AdminController::class,'booksDestroy']);
    Route::post('books-add',[AdminController::class, 'booksStore']);
    //users
    Route::get('user', [AdminController::class, 'user']);
    Route::get('users-registered', [AdminController::class, 'usersRegistered']);
    Route::get('users-detail/{slug}', [AdminController::class, 'usersDetail']);
    Route::get('users-approve/{slug}', [AdminController::class, 'usersApprove']);
    //hapus data
    Route::get('users-ben/{slug}', [AdminController::class, 'usersBen']);
    //tampilin data yang kehapus
    Route::get('users-benned', [AdminController::class, 'usersBenned']);
    //refresh users
    Route::get('users-restore/{slug}', [AdminController::class, 'usersRestore']);
    //logout
    Route::get('logout',[AuthController::class, 'logout']);

});


Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'regis']);


Route::get('login', function () {
    return view('masuk');
});




