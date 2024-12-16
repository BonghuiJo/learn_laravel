<?php


use App\Http\Middleware\BlogMiddleware;
use App\Http\Middleware\LocalMiddleware;
use App\Models\division;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Block;

Route::get('/', function () {
	return view('rendering');
});

Route::middleware([LocalMiddleware::class])->group(function () {
	Route::get('/page', function () {
		return view('rendering');
	})->name('page');
	Route::get('/blog', function () {
		return view('rendering');
	})->name('blog')->middleware([BlogMiddleware::class]);
	Route::get('/company', function () {
		// Division 데이터를 가져오면서 관련된 하위 데이터 로드
		$divisions = division::with('departments.teams.users')->get();

		return view('company', compact('divisions'));
	})->name('company');
});
