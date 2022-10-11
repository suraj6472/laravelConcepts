<?php

use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// use Inertia\Inertia; // way 2

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

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'store']);

Route::post('logout', [LoginController::class, 'destroy']);

Route::middleware('auth')->group(function () {


    Route::get('/', function () {
        return Inertia::render('Home');
    });


    Route::get('/users', function () {
        return Inertia::render('User/List', [
            'filters' => Request::only(['search']),
            'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(15)
                ->withQueryString() // preserve query string
                ->through(fn ($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'can' => [
                       'edit' => Auth::user()->can('edit', $user)
                    ]
                ]),
            'can' => [
                'createUser' => Auth::user()->can('create', User::class),

            ]

        ]);
    });

    Route::get('/users/create', function () {
        return Inertia::render('User/Create');
    // })->middleware('can:create,App\Models\User'); /* option 1 */
    })->can('create','App\Models\User');

    Route::POST('/users', function () {
        sleep(3);
        $validated = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create($validated);

        return redirect('/users');
    });


    Route::get('/settings', function () {
        return Inertia::render('Setting');
    });
});
