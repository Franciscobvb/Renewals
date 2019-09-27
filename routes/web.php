<?php

Route::get('renewals/', "renewals\RenewalsController@index");
Route::get('renewals/createXML', "renewals\RenewalsController@createXML");
