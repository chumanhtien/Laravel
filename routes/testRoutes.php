
<?php 
use Illuminate\Support\Facades\Route;
// Basic Route
Route::get('/testhome', function () {
    return view('welcome2');
});

// Required Parameters
Route::get('/usertest/{id}', function ($id) {
    echo "$id";
});

//Optional Parameters
Route::get('user/{name?}', function ($name = 'TutorialsPoint') { return $name;});


?>