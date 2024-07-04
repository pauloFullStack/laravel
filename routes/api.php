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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['namespace' => 'Api\Systems\Erp'], function () {

    //SELECTS
    require __DIR__ . '/api/systems/erp/selects.php';

    //SERVICES
    require __DIR__ . '/api/systems/erp/services.php';

    //CUSTOMERS
    require __DIR__ . '/api/systems/erp/customers.php';

    //CUSTOMERS SERVICE
    require __DIR__ . '/api/systems/erp/customers-service.php';

    //EMPLOYEES
    require __DIR__ . '/api/systems/erp/employees.php';
});


Route::group(['namespace' => 'Api\CssExamples'], function () {

    //CRUD
    require __DIR__ . '/api/css-examples/css.php';
});


Route::group(['namespace' => 'Api\Editor'], function () {

    //Crud editor laravel
    require __DIR__ . '/api/editor/laravel.php';

    //Crud editor aws
    require __DIR__ . '/api/editor/aws.php';

    //Crud editor css
    require __DIR__ . '/api/editor/css.php';

    //Crud editor docker
    require __DIR__ . '/api/editor/docker.php';

    //Crud editor git
    require __DIR__ . '/api/editor/git.php';

    //Crud editor html
    require __DIR__ . '/api/editor/html.php';

    //Crud editor js
    require __DIR__ . '/api/editor/js.php';

    //Crud editor mysql
    require __DIR__ . '/api/editor/mysql.php';

    //Crud editor node
    require __DIR__ . '/api/editor/node.php';

    //Crud editor php
    require __DIR__ . '/api/editor/php.php';

    //Crud editor ssh
    require __DIR__ . '/api/editor/ssh.php';

    //Crud editor ubuntu
    require __DIR__ . '/api/editor/ubuntu.php';
});


/*|------------------------|
  |  Routes site phpGold   |
  |------------------------|
*/

Route::get('/api-key-sendinblue', ['uses' => 'ApiKeySendinBlueController@index']);


Route::group(['namespace' => 'Api\SitePhpGold'], function () {

    Route::post('/sendinblue-generic', ['uses' => 'SitePhpGoldController@sendEmail']);
});
