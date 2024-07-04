<?php


// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;



/*|------------------------|
  |  Routes site phpGold   |
  |------------------------|
*/

Route::get('/site-phpgold', ['uses' => 'SitePhpGoldController@index']);


/*|----------------------|
  |  Routes curriculum   |
  |----------------------|
*/

Route::get('/curriculum', ['uses' => 'CurriculumController@index']);

/*|------------------|
  |  Routes source   |
  |------------------|
*/

//==== dashboard ====//
Route::get('/', ['uses' => 'DashboardController@index']);

//==== dashboard redirect ====//
Route::get('/dashboard', [
  'as' => 'home.list',
  'uses' => 'DashboardController@index'
]);

Route::group(['prefix' => '/systems', 'namespace' => 'Systems'], function () {

  //==== systems ====//
  Route::get('/', [
    'as' => 'home.systems.list',
    'uses' => 'SystemsController@index'
  ]);
});


/*|------------------|
  |  Routes editor   |
  |------------------|
*/

Route::group(['prefix' => '/editor', 'namespace' => 'Editor'], function () {

  //==== Editor ====//
  Route::get('/', [
    'uses' => 'EditController@index'
  ]);

  //laravel
  require __DIR__ . '/editor/editor-laravel.php';

  //php
  require __DIR__ . '/editor/editor-php.php';

  //git
  require __DIR__ . '/editor/editor-git.php';

  //mysql
  require __DIR__ . '/editor/editor-mysql.php';

  //js
  require __DIR__ . '/editor/editor-js.php';

  //aws
  require __DIR__ . '/editor/editor-aws.php';

  //css
  require __DIR__ . '/editor/editor-css.php';

  //docker
  require __DIR__ . '/editor/editor-docker.php';

  //html
  require __DIR__ . '/editor/editor-html.php';

  //node
  require __DIR__ . '/editor/editor-node.php';

  //ssh
  require __DIR__ . '/editor/editor-ssh.php';

  //ubuntu
  require __DIR__ . '/editor/editor-ubuntu.php';
});



/*|-------------------|
  |  Routes studies   |
  |-------------------|
*/

Route::group(['prefix' => '/studies', 'namespace' => 'Studies'], function () {

  //==== studies ====//
  Route::get('/', [
    'as' => 'home.studies.list',
    'uses' => 'StudiesController@index'
  ]);

  //laravel
  require __DIR__ . '/studies/studies-laravel.php';

  //php
  require __DIR__ . '/studies/studies-php.php';

  //git
  require __DIR__ . '/studies/studies-git.php';

  //mysql
  require __DIR__ . '/studies/studies-mysql.php';

  //js
  require __DIR__ . '/studies/studies-js.php';

  //aws
  require __DIR__ . '/studies/studies-aws.php';

  //css
  require __DIR__ . '/studies/studies-css.php';

  //docker
  require __DIR__ . '/studies/studies-docker.php';

  //html
  require __DIR__ . '/studies/studies-html.php';

  //node
  require __DIR__ . '/studies/studies-node.php';

  //ssh
  require __DIR__ . '/studies/studies-ssh.php';

  //ubuntu
  require __DIR__ . '/studies/studies-ubuntu.php';
});


/*|-------------------|
  |  Routes systems   |
  |-------------------|
*/

//sistema erp
require __DIR__ . '/systems/erp.php';


/*|------------------------|
  |  Routes Examples CSS   |
  |------------------------|
*/

//examples css
require __DIR__ . '/css-examples/css.php';



/*|------------------------|
  |  Routes Portfolios     |
  |------------------------|
*/

//examples css
require __DIR__ . '/portfolios/portfolios.php';


/*|--------------------------|
  |  Routes reset password   |
  |--------------------------|
*/

Route::get('/systems/create-password/{id}/{email}', [
  'as' => 'create.password.index',
  'uses' => 'CreatePasswordController@index'
]);

Route::post('/systems/create-password-post', [
  'as' => 'create.password.post',
  'uses' => 'CreatePasswordController@createPasswordUser'
]);

Route::post('/systems/reset-password-post', [
  'as' => 'reset.password.post',
  'uses' => 'CreatePasswordController@resetPasswordUser'
]);

Auth::routes();

//Habilitar rota register
//comando para sutir efeito na atualização de rotas
//sudo docker exec -it phpgold-app php artisan optimize
// Route::get('/register', [
//   'uses' => 'RegisterController@index'
// ]);

Route::get('/register', [
  'as' => 'home.register',
  'uses' => 'DashboardController@index',
]);
