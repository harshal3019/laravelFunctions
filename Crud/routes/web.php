<?php

use App\Http\Controllers\BastmanController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ClientValidationController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MulitStepFormController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QueryCrudController;
use App\Http\Controllers\ServerClientValidation;
use App\Http\Controllers\SuperHeroController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserEventController;
use App\PaymentGateway\payment;
use App\TimeTesting\Time;
use App\Models\Bastman;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Query Builder Crud Operations
|--------------------------------------------------------------------------
|
| Here we are using resource controller and query biuilder to make crud operation
| in this project .
*/
Route::get('/show_student',[QueryCrudController::class,'show_student']);
Route::post('/add',[QueryCrudController::class,'store'])->name('student.create');
Route::get('/list',[QueryCrudController::class,'listing'])->name('student.list');
Route::get('/student/view/{id}',[QueryCrudController::class,'studentById'])->name('student.view');
Route::get('/delete/{id}',[QueryCrudController::class,'delete'])->name('student.delete');
Route::get('/edit/{id}',[QueryCrudController::class,'edit'])->name('student.edit');
Route::post('update/',[QueryCrudController::class,'update'])->name('student.update');


/*
|--------------------------------------------------------------------------
| Join In Laravel
|--------------------------------------------------------------------------
|
| Inner Join Left Join and Right JOin
| INNER JOIN RESULT:-[{"name":"Harshal","student_name":"Harshal Mahajan","student_rno":111},{"name":"Harshal","student_name":"Utkarsh Wani","student_rno":96},
|    {"name":"Ankit","student_name":"Ravi Mahajan","student_rno":94}]
|
|
|
*/
Route::get('/innerjoin',[QueryCrudController::class,'innerJoinClause'])->name('inner.join');
Route::get('/leftjoin',[QueryCrudController::class,'leftJoinClause'])->name('left.join');
Route::get('/rightJoin',[QueryCrudController::class,'rightJoinClause'])->name('right.join');


/*
|-------------------------------------------------------------------------------
|Relationship in laravel
|-------------------------------------------------------------------------------
|
|
*/
Route::get('/add_records',[UserController::class,'insertRecords'])->name('insert.records');


/*
|-------------------------------------------------------------------------------
|Export Data to Excel and Csv and PDF
|-------------------------------------------------------------------------------
|
|
*/
Route::get('/add-employee',[EmployeeController::class,'addEmployee']);
Route::get('/export-excel',[EmployeeController::class,'exportIntoExcel']);
Route::get('/export-csv',[EmployeeController::class,'exportIntoCSV']);

Route::get('/get-all-records',[EmpController::class,'getAllEmployee']);
Route::get('/export-pdf/{id}',[EmpController::class,'downloadPDF'])->name('export.pdf');
Route::get('/new',[EmpController::class,'newassign']);



/*
|-------------------------------------------------------------------------------
|Batsman CRUD OPERATION WITH IMAGE CRUD ,PDF,EXCEL
|-------------------------------------------------------------------------------
|
|
*/
Route::get('/add-bastman',[BastmanController::class,'addBastman']);
Route::post('/add-bastman',[BastmanController::class,'store'])->name('create.bastman');
Route::get('/batsmanlist',[BastmanController::class,'list'])->name('bastman.list');
Route::get('/edit-bastman/{id}',[BastmanController::class,'edit'])->name('bastman.edit');
Route::post('updatebastman/{id}',[BastmanController::class,'update']);
Route::delete('delete-bastman/{id}',[BastmanController::class,'destroy'])->name('batsman.delete');
Route::get('/export-pdf/{id}',[BastmanController::class,'downloadPDF'])->name('export.pdf');
Route::get('/exportpdf-all',[BastmanController::class,'downloadAllPDF'])->name('export.all');
Route::get('/export-excel/',[BastmanController::class,'exportIntoExcel'])->name('export.excel');
Route::get('/export-csv',[BastmanController::class,'exportIntoCSV'])->name('export.csv');



/*
|-------------------------------------------------------------------------------
|Ajax crud operations
|-------------------------------------------------------------------------------
|The prepend() method inserts specified content at the beginning of the selected elements.
| $("button").click(function(){
  $("p").prepend("<b>Prepended text</b>");
});
*/
Route::get('/teacher-ajax',[TeacherController::class,'index']);
Route::post('/addTeacher',[TeacherController::class,'addTeacher'])->name('teacher.add');
Route::delete('/delete-teacher/{id}',[TeacherController::class,'deleteTeacher'])->name('teacher.delete');



/*
|-------------------------------------------------------------------------------
|AutoComplete in Laravel
|-------------------------------------------------------------------------------
|for search use bootstrap typeahead
*/
Route::get('/add-product',[ProductController::class,'addProduct']);
Route::get('/search',[ProductController::class,'searchProduct']);
Route::get('/autocompleted',[ProductController::class,'autocomplete'])->name('product.autocomplete');


/*
|-------------------------------------------------------------------------------
|Resize Image Using Intervention Image
|Intervention Image is an open source PHP image handling and manipulation library
|-------------------------------------------------------------------------------
|
*/

Route::get('/resize-image',[ImageController::class,'resizeImage']);
Route::post('/resizeImage',[ImageController::class,'resizeImageSubmit'])->name('image.resize');


/*
|-------------------------------------------------------------------------------
|Yajra Datatables:-
| Datatables provides us quick search, pagination, ordering, sorting and etc.
| Datatables is basically jQuery plugins that allows 
| you to add advanced interaction controls to your HTML tables data
|-------------------------------------------------------------------------------
*/
Route::get('/superhero',[SuperHeroController::class,'index']);

/*
|-------------------------------------------------------------------------------
|CLient Validationn
|-------------------------------------------------------------------------------
*/
Route::get('/register',[ClientValidationController::class,'index']);
Route::post('/regsiter-submit',[ClientValidationController::class,'registerSubmit'])->name('register.create');


/*
|------------------------------------------------------------------------------
|
|Client And Server Side Validations
|--------------------------------------------------------------------------------
*/
Route::get('/register-form',[ServerClientValidation::class,'index']);
Route::post('/reg-submit',[ServerClientValidation::class,'register'])->name('registration.check');


/*
|-------------------------------------------------------------------------------
|
|High CHart and Bar charts
|-------------------------------------------------------------------------
*/
Route::get('/high-charts',[ChartController::class,'index']);
Route::get('/bar-chart',[ChartController::class,'BarChart']);



Route::get('/multi-form',[MulitStepFormController::class,'index']);


/*
|------------------------------------------------------------------------------
|Events and Listner :-
|--------------------------------------------------------------------------------
*/
Route::get('/user/event',[UserEventController::class,'eventTarget']);
Route::get('/employee/event',[UserEventController::class,'eventTarg']);
Route::get('/current/time',[UserEventController::class,'currentTime'])->name('current.time');


/*
|------------------------------------------------------------------------------
|Facade :-
|--------------------------------------------------------------------------------
*/
Route::get('/payment',function(){
return payment::process();
});

Route::get('/Time',function(){
  return Time::process();
});