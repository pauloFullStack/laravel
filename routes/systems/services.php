<?php

/*|---------------------------|
  |     Routes Erp Services   |
  |---------------------------|
 */


Route::get('/services', [
  'uses' => 'ErpServicesController@indexAjax'
]);
