<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return "<h1> welcome Day1 laravel </h1>";
});


// Route::get('/students', function () {
//     $students =[
//         ['id' =>1, 'name' => 'Youssef' , 'salary' => 20000 ],
//         ['id' =>2, 'name' => 'Ahmed' , 'salary' => 10000 ],
//         ['id' =>3, 'name' => 'ALI' , 'salary' => 25000 ],
//         ['id' =>4, 'name' => 'Menna' , 'salary' => 40000 ],
//         ['id' =>5, 'name' => 'Nada' , 'salary' => 35000 ],
//     ];

//     return $students;
// });


// Route::get('/students/{id}', function ($id) {
//     $students =[
//         ['id' =>1, 'name' => 'Youssef' , 'salary' => 20000 ],
//         ['id' =>2, 'name' => 'Ahmed' , 'salary' => 10000 ],
//         ['id' =>3, 'name' => 'ALI' , 'salary' => 25000 ],
//         ['id' =>4, 'name' => 'Menna' , 'salary' => 40000 ],
//         ['id' =>5, 'name' => 'Nada' , 'salary' => 35000 ],
//     ];
    
//     if ($id < count($students)){
//         return $students[$id-1];
//     }
//     // return $students[$id-1];

//     return abort(404);
// }) -> where('id' , '[0-9]+'); #cond on route parameter

// Route::get("/user/{id}", function ($id){

//     dump(url()-> current());
//     dump($id); //string 
//     dump(1=='1');
//     dump($id === 1);
//     return url()-> current();
// });


// #define route that returns with view directly
// Route::view("/dashboard", "dashboard");  #return html 

// Route::get("/homepage", function(){
//     $students =[
//         ['id' =>1, 'name' => 'Youssef' , 'salary' => 20000 ],
//         ['id' =>2, 'name' => 'Ahmed' , 'salary' => 10000 ],
//         ['id' =>3, 'name' => 'ALI' , 'salary' => 25000 ],
//         ['id' =>4, 'name' => 'Menna' , 'salary' => 40000 ],
//         ['id' =>5, 'name' => 'Nada' , 'salary' => 35000 ],
//     ];

//     return view("homePage" , ["students"=> $students]);

// });


// Route::get("/home", function(){
//     $students =[
//         ['id' =>1, 'name' => 'Youssef' , 'salary' => 20000 ],
//         ['id' =>2, 'name' => 'Ahmed' , 'salary' => 10000 ],
//         ['id' =>3, 'name' => 'ALI' , 'salary' => 25000 ],
//         ['id' =>4, 'name' => 'Menna' , 'salary' => 40000 ],
//         ['id' =>5, 'name' => 'Nada' , 'salary' => 35000 ],
//     ];
//     return view("home" , ["students"=> $students , "name" => "nermeen"]);

// });


// Route::get("/iti", function(){
//     return view("itiDashboard");
// });


use App\Http\Controllers\StudentController;

Route::get("/students", [StudentController::class, 'index'])->name("students.index");
Route::get("/students/create", [StudentController::class, 'create'])->name("students.create");
Route::get("/students/{id}", [StudentController::class, 'show'])->name("students.show")-> where('id' , '[0-9]+'); 
Route::get("/students/{id}/edit", [StudentController::class, 'edit'])->name("students.edit")-> where('id' , '[0-9]+');
Route::post("/students", [StudentController::class, 'store'])->name("students.store");



// Route::get("/posts", [StudentController::class, 'index'])->name("posts.index");
// Route::get("/posts/{id}", [StudentController::class, 'show'])->name("posts.show");
// Route::get("/posts/{id}", [StudentController::class, 'edit'])->name("posts.edit");
// Route::put("/posts/{id}", [StudentController::class, 'update'])->name("posts.update");
// Route::delete("/posts/{id}", [StudentController::class, 'destory'])->name("posts.destory");



// Route::get("/comments", [StudentController::class, 'index'])->name("comments.index");

