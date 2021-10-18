<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationshipController;
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

Route::get('one-to-one', [RelationshipController::class, 'oneToOneRelation'])->name('one-to-one');
Route::get('one-to-many', [RelationshipController::class, 'oneToManyRelation'])->name('one-to-many');
Route::get('many-to-many', [RelationshipController::class, 'manyToManyRelation'])->name('many-to-many');

Route::get('one-to-one-polymorphic', [RelationshipController::class, 'oneToOneRelationPolymorphic'])->name('one-to-one-polymorphic');
Route::get('one-to-many-polymorphic', [RelationshipController::class, 'oneToManyRelationPolymorphic'])->name('one-to-many-polymorphic');
Route::get('many-to-many-polymorphic', [RelationshipController::class, 'manyToManyRelationPolymorphic'])->name('many-to-many-polymorphic');

Route::get('has-one-of-many', [RelationshipController::class, 'hasOneOfMany'])->name('has-one-of-many');
Route::get('has-one-many-through', [RelationshipController::class, 'hasOneManyThrought'])->name('has-one-many-through');
