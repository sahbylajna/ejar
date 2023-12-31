<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::namespace('App\Http\Controllers\Api')->group(function () {



Route::get('countries','CitiesController@countries')
         ->name('countries');
Route::group([
    'prefix' => 'cities',
], function () {
    Route::get('/', 'CitiesController@index')
         ->name('cities.city.index');
    Route::get('/create','CitiesController@create')
         ->name('cities.city.create');
    Route::get('/show/{city}','CitiesController@show')
         ->name('cities.city.show')->where('id', '[0-9]+');
    Route::get('/{city}/edit','CitiesController@edit')
         ->name('cities.city.edit')->where('id', '[0-9]+');
    Route::post('/', 'CitiesController@store')
         ->name('cities.city.store');
    Route::put('city/{city}', 'CitiesController@update')
         ->name('cities.city.update')->where('id', '[0-9]+');
    Route::delete('/city/{city}','CitiesController@destroy')
         ->name('cities.city.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'villes',
], function () {
    Route::get('/', 'VillesController@index')
         ->name('villes.ville.index');
    Route::get('/create','VillesController@create')
         ->name('villes.ville.create');
    Route::get('/show/{ville}','VillesController@show')
         ->name('villes.ville.show')->where('id', '[0-9]+');
    Route::get('/{ville}/edit','VillesController@edit')
         ->name('villes.ville.edit')->where('id', '[0-9]+');
    Route::post('/', 'VillesController@store')
         ->name('villes.ville.store');
    Route::put('ville/{ville}', 'VillesController@update')
         ->name('villes.ville.update')->where('id', '[0-9]+');
    Route::delete('/ville/{ville}','VillesController@destroy')
         ->name('villes.ville.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'sliders',
], function () {
    Route::get('/', 'SlidersController@index')
         ->name('sliders.slider.index');
    Route::get('/create','SlidersController@create')
         ->name('sliders.slider.create');
    Route::get('/show/{slider}','SlidersController@show')
         ->name('sliders.slider.show')->where('id', '[0-9]+');
    Route::get('/{slider}/edit','SlidersController@edit')
         ->name('sliders.slider.edit')->where('id', '[0-9]+');
    Route::post('/', 'SlidersController@store')
         ->name('sliders.slider.store');
    Route::put('slider/{slider}', 'SlidersController@update')
         ->name('sliders.slider.update')->where('id', '[0-9]+');
    Route::delete('/slider/{slider}','SlidersController@destroy')
         ->name('sliders.slider.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'categories',
], function () {
    Route::get('/', 'CategoriesController@index')
         ->name('categories.category.index');
    Route::get('/create','CategoriesController@create')
         ->name('categories.category.create');
    Route::get('/show/{category}','CategoriesController@show')
         ->name('categories.category.show')->where('id', '[0-9]+');
    Route::get('/{category}/edit','CategoriesController@edit')
         ->name('categories.category.edit')->where('id', '[0-9]+');
    Route::post('/', 'CategoriesController@store')
         ->name('categories.category.store');
    Route::put('category/{category}', 'CategoriesController@update')
         ->name('categories.category.update')->where('id', '[0-9]+');
    Route::delete('/category/{category}','CategoriesController@destroy')
         ->name('categories.category.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'users',
], function () {
    Route::get('/', 'UsersController@index')
         ->name('users.user.index');
    Route::get('/create','UsersController@create')
         ->name('users.user.create');
    Route::get('/show/{user}','UsersController@show')
         ->name('users.user.show');
    Route::get('/{user}/edit','UsersController@edit')
         ->name('users.user.edit');
    Route::post('/', 'UsersController@store')
         ->name('users.user.store');
    Route::put('user/{user}', 'UsersController@update')
         ->name('users.user.update');
    Route::delete('/user/{user}','UsersController@destroy')
         ->name('users.user.destroy');
});

 Route::get('settings', 'SettingsController@index');
 Route::post('validation', 'loginController@validateclient');
  Route::post('clientauth', 'loginController@clientauth');
 Route::group([
    'prefix' => 'produits',
], function () {

Route::post('/store', 'ProduitsController@store')->name('produits.produit.store');
 Route::get('/', 'ProduitsController@index')
         ->name('produits.produit.index');

    Route::get('/create/{produit}','ProduitsController@create')
         ->name('produits.produit.create')->where('id', '[0-9]+');
    Route::get('/show/{produit}','ProduitsController@show')
         ->name('produits.produit.show')->where('id', '[0-9]+');
    Route::get('/{produit}/edit','ProduitsController@edit')
         ->name('produits.produit.edit')->where('id', '[0-9]+');

    Route::put('produit/{produit}', 'ProduitsController@update')
         ->name('produits.produit.update')->where('id', '[0-9]+');
    Route::delete('/produit/{produit}','ProduitsController@destroy')
         ->name('produits.produit.destroy')->where('id', '[0-9]+');

         Route::get('/vuweb/{produit}','ProduitsController@vuweb')
         ->name('produits.produit.vuweb')->where('id', '[0-9]+');


         Route::get('/clique_whatsapp/{produit}','ProduitsController@clique_whatsapp')
         ->name('produits.produit.clique_whatsapp')->where('id', '[0-9]+');
         Route::get('/vupost/{produit}','ProduitsController@vupost')
         ->name('produits.produit.vupost')->where('id', '[0-9]+');
         Route::get('/vufb/{produit}','ProduitsController@vufb')
         ->name('produits.produit.vufb')->where('id', '[0-9]+');
         Route::get('/vuinsta/{produit}','ProduitsController@vuinsta')
         ->name('produits.produit.vuinsta')->where('id', '[0-9]+');


});


 Route::get('/fulter', 'ProduitsController@fulter')
         ->name('fulter');


     Route::get('/addphoto', 'ProduitsController@addphoto')
         ->name('addphoto');
         Route::get('/produituser', 'ProduitsController@indexuser')
         ->name('produituser');

 Route::get('/produitbydestanse', 'ProduitsController@produitbydestanse')
         ->name('produitbydestanse');
          Route::get('/map', 'ProduitsController@map')
         ->name('map');

   Route::get('/favorites', 'FavoritesController@index')
         ->name('favorites.favorite.index');
         Route::post('/favorites', 'FavoritesController@store')
         ->name('favorites.favorite.store');
   Route::get('/favoritedestroy','FavoritesController@destroy');

   // Route::get('notifications', 'notificationController@index')
   //       ->name('notifications.index');

 });




 Route::get('command', function () {



    \Artisan::call('cache:clear');
    echo \Artisan::output();
    \Artisan::call('config:clear');
    echo \Artisan::output();
    \Artisan::call('route:clear');
    echo \Artisan::output();
    \Artisan::call('route:cache');
    echo \Artisan::output();
    \Artisan::call('config:cache');
    echo \Artisan::output();
    \Artisan::call('view:clear');


    echo \Artisan::output();
    \Artisan::call('migrate');


    echo \Artisan::output();


});
use Illuminate\Support\Facades\Http;
use App\Models\City;
use GuzzleHttp\Client as ClientHTTP;
use App\Models\countries;
Route::get('test', function () {
    $username = 'botble';


    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://api.countrystatecity.in/v1/countries',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_HTTPHEADER => array(
        'X-CSCAPI-KEY: API_KEY'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    $countriesObjects = countries::where('stat','1')->get();
    foreach ($countriesObjects as $key => $value) {
        $countryCode =  $value->iso; // Country code for Qatar

        $url = "http://api.geonames.org/searchJSON?country=$countryCode&maxRows=1000&username=$username";

        $response = file_get_contents($url);
        $data = json_decode($response, true);
dd($data);
        $cities = [];
        foreach ($data['geonames'] as $city) {

            $newcity = new City();
            $newcity->name = $city['name'];
            $newcity->name_ar = $city['name'];
            $newcity->countre_id = $value->id;
            $newcity->save();
        }

    }



    // try{
    //     $client2 = new ClientHTTP();
    //     $res = $client2->request('GET', 'https://countriesnow.space/api/v0.1/countries/cities', [
    //         'headers' => [
    //             'Content-Type' => 'application/json',
    //         ],

    //         GuzzleHttp\RequestOptions::JSON => [
    //             'country' => 'qatar',
    //         ],

    //         'json' => json_encode(
    //             [
    //                 'country' => 'qatar',
    //             ]
    //             ),

    //     ]);
    //     dd($res->getBody());
    // }catch(Exception $exception) {
    // dd($exception->getMessage());
    // }


});
