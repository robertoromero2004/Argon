<?php

use App\Http\Controllers\Example\AnimalController;
use App\Http\Controllers\Example\CategoryController;
use App\Http\Controllers\Example\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CarrerController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Products\ProductList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\VehicleTypeController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MovementController;
use App\Http\Controllers\MovementReportController;
use App\Http\Controllers\MovementTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {


//?employee
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{id}', [EmployeeController::class, 'show'])->name('employees.show');
Route::get('/employees/{id}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{id}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{id}', [EmployeeController::class, 'destroy'])->name('employees.destroy');


//?movement
Route::get('/movements', [MovementController::class, 'index'])->name('movements.index');
Route::get('/movements/create', [MovementController::class, 'create'])->name('movements.create');
Route::post('/movements', [MovementController::class, 'store'])->name('movements.store');
Route::get('/movements/{id}', [MovementController::class, 'show'])->name('movements.show');
Route::get('/movements/{id}/edit', [MovementController::class, 'edit'])->name('movements.edit');
Route::put('/movements/{id}', [MovementController::class, 'update'])->name('movements.update');
Route::delete('/movements/{id}', [MovementController::class, 'destroy'])->name('movements.destroy');

//?movement_report
Route::get('/movement_reports', [MovementReportController::class, 'index'])->name('movement-reports.index');
Route::get('/movement_reports/create', [MovementReportController::class, 'create'])->name('movement-reports.create');
Route::post('/movement_reports', [MovementReportController::class, 'store'])->name('movement-reports.store');
Route::get('/movement_reports/{id}', [MovementReportController::class, 'show'])->name('movement-reports.show');
Route::get('/movement_reports/{id}/edit', [MovementReportController::class, 'edit'])->name('movement-reports.edit');
Route::put('/movement_reports/{id}', [MovementReportController::class, 'update'])->name('movement-reports.update');
Route::delete('/movement_reports/{id}', [MovementReportController::class, 'destroy'])->name('movement-reports.destroy');

//?movement_type   
Route::get('/movement-types', [MovementTypeController::class, 'index'])->name('movement-types.index');
Route::get('/movement_types/create', [MovementTypeController::class, 'create'])->name('movement-types.create');
Route::post('/movement_types', [MovementTypeController::class, 'store'])->name('movement-types.store');
Route::get('/movement_types/{id}', [MovementTypeController::class, 'show'])->name('movement-types.show');
Route::get('/movement_types/{id}/edit', [MovementTypeController::class, 'edit'])->name('movement-types.edit');
Route::put('/movement_types/{id}', [MovementTypeController::class, 'update'])->name('movement-types.update');
Route::delete('/movement_types/{id}', [MovementTypeController::class, 'destroy'])->name('movement-types.destroy');

//?product_type
Route::get('/product-types', [ProductTypeController::class, 'index'])->name('product-types.index');
Route::get('/product_types/create', [ProductTypeController::class, 'create'])->name('product-types.create');
Route::post('/product_types', [ProductTypeController::class, 'store'])->name('product-types.store');
Route::get('/product_types/{id}', [ProductTypeController::class, 'show'])->name('product-types.show');
Route::get('/product_types/{id}/edit', [ProductTypeController::class, 'edit'])->name('product-types.edit');
Route::put('/product_types/{id}', [ProductTypeController::class, 'update'])->name('product-types.update');
Route::delete('/product_types/{id}', [ProductTypeController::class, 'destroy'])->name('product-types.destroy'); 

//?product
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, ' edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

//?supplier
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
Route::post('/suppliers', [SupplierController::class, 'store'])->name('suppliers.store');
Route::get('/suppliers/{id}', [SupplierController::class, 'show'])->name('suppliers.show');
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::put('/suppliers/{id}', [SupplierController::class, 'update'])->name('suppliers.update');
Route::delete('/suppliers/{id}', [SupplierController::class, 'destroy'])->name('suppliers.destroy');

//?vehicle
Route::get('/vehicles', [VehicleController::class, 'index'])->name('vehicles.index');
Route::get('/vehicles/create', [VehicleController::class, 'create'])->name('vehicles.create');
Route::post('/vehicles', [VehicleController::class, 'store'])->name('vehicles.store');
Route::get('/vehicles/{id}', [VehicleController::class, 'show'])->name('vehicles.show');
Route::get('/vehicles/{id}/edit', [VehicleController::class, 'edit'])->name('vehicles.edit');
Route::put('/vehicles/{id}', [VehicleController::class, 'update'])->name('vehicles.update');
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy'])->name('vehicles.destroy');

//?vehicle_type
Route::get('/vehicle_types', [VehicleTypeController::class, 'index'])->name('vehicle-types.index');
Route::get('/vehicle_types/create', [VehicleTypeController::class, 'create'])->name('vehicle-types.create');
Route::post('/vehicle_types', [VehicleTypeController::class, 'store'])->name('vehicle-types.store');
Route::get('/vehicle_types/{id}', [VehicleTypeController::class, 'show'])->name('vehicle-types.show');
Route::get('/vehicle_types/{id}/edit', [VehicleTypeController::class, 'edit'])->name('vehicle-types.edit');
Route::put('/vehicle_types/{id}', [VehicleTypeController::class, 'update'])->name('vehicle-types.update');
Route::delete('/vehicle_types/{id}', [VehicleTypeController::class, 'destroy'])->name('vehicle-types.destroy');


//?warehouse
Route::get('/warehouses', [WarehouseController::class, 'index'])->name('warehouses.index');
Route::get('/warehouses/create', [WarehouseController::class, 'create'])->name('warehouses.create');
Route::post('/warehouses', [WarehouseController::class, 'store'])->name('warehouses.store');
Route::get('/warehouses/{id}', [WarehouseController::class, 'show'])->name('warehouses.show');
Route::get('/warehouses/{id}/edit', [WarehouseController::class, 'edit'])->name('warehouses.edit');
Route::put('/warehouses/{id}', [WarehouseController::class, 'update'])->name('warehouses.update');
Route::delete('/warehouses/{id}', [WarehouseController::class, 'destroy'])->name('warehouses.destroy');

route::resource('/products', ProductController::class);
route::resource('/suppliers', SupplierController::class);
route::resource('/vehicles', VehicleController::class);
route::resource('/vehicle-types', VehicleTypeController::class);
route::resource('/warehouses', WarehouseController::class);
route::resource('/movement-types', MovementTypeController::class);
route::resource('/movement-reports', MovementReportController::class);
route::resource('/employees', EmployeeController::class);
route::resource('/product-types', ProductTypeController::class);
route::resource('/movements', MovementController::class);



    Route::prefix('/profile')->group(function () {
        Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    //rutas de ejemplo sin controlador con prefijo
    Route::prefix('/ejemplo')->group(function () {
        Route::get('/index', fn() => view('examples.ejemplo.index'))->name('ejemplo.index');
        Route::get('/create', fn() => view('examples.ejemplo.create'))->name('ejemplo.create');
        Route::get('/edit', fn() => view('examples.ejemplo.edit'))->name('ejemplo.edit');
        Route::get('/show', fn() => view('examples.ejemplo.show'))->name('ejemplo.show');
    });

    //rutas con controlador y prefix
    Route::prefix('/categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::put('/{category}', [CategoryController::class, 'update'])->name('categories.update');
        Route::delete('/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
        Route::get('/{category}', [CategoryController::class, 'show'])->name('categories.show');
    });

    Route::prefix('/posts')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('posts.index');
        Route::get('/create', [PostController::class, 'create'])->name('posts.create');
        Route::post('/', [PostController::class, 'store'])->name('posts.store');
        Route::get('/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
        Route::put('/{post}', [PostController::class, 'update'])->name('posts.update');
        Route::delete('/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
        Route::get('/{post}', [PostController::class, 'show'])->name('posts.show');
    });

    Route::prefix('/animals')->group(function () {
        Route::get('/', [AnimalController::class, 'index'])->name('animals.index');
        Route::get('/create', [AnimalController::class, 'create'])->name('animals.create');
        Route::post('/', [AnimalController::class, 'store'])->name('animals.store');
        Route::get('/{animal}/edit', [AnimalController::class, 'edit'])->name('animals.edit');
        Route::put('/{animal}', [AnimalController::class, 'update'])->name('animals.update');
        Route::delete('/{animal}', [AnimalController::class, 'destroy'])->name('animals.destroy');
        Route::get('/{animal}', [AnimalController::class, 'show'])->name('animals.show');
    });
    

    //rutas de posts de tipo resource
    Route::resource('/students', StudentController::class);
    Route::resource('/carrers', CarrerController::class);

    // Route::resource('/categories', CategoryController::class);
    // Route::resource('/animals', AnimalController::class);
});

require __DIR__ . '/auth.php';
