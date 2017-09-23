<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Saxoman\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Saxoman\Calculator\CalculatorController@subtract');
