<?php

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
Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function(){
    Route::get('/', 'IndexController@index')->name('index');
    Route::post('index-form-submit', 'IndexController@form')->name('index.form');
    Route::get('news', 'IndexController@news')->name('news');
    Route::get('about', 'IndexController@about')->name('about');
    Route::get('contacts', 'IndexController@contact')->name('contacts');
    Route::get('services', 'IndexController@services')->name('services');
    Route::get('portfolio', 'IndexController@portfolio')->name('portfolio');
    Route::get('services/{slug}', 'IndexController@singleService')->name('single-service');
    Route::get('mall/{slug}', 'MallController@index')->name('single-mall');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('setlocale/{lang}', function ($lang) {

    $referer = Redirect::back()->getTargetUrl();
    $parse_url = parse_url($referer, PHP_URL_PATH);
    $segments = explode('/', $parse_url);
    if (in_array($segments[1], App\Http\Middleware\LocaleMiddleware::$languages)) {

        unset($segments[1]);
    }
    if ($lang != App\Http\Middleware\LocaleMiddleware::$mainLanguage) {
        array_splice($segments, 1, 0, $lang);
    }
    $url = Request::root() . implode("/", $segments);
    if (parse_url($referer, PHP_URL_QUERY)) {
        $url = $url . '?' . parse_url($referer, PHP_URL_QUERY);
    }
    return redirect($url);
})->name('setlocale');
