   <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\PinjamBarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;

// Route for the home page
Route::get('/', function () {
   return view('home');
});

Route::resource('suplier', SupplierController::class);

Route::resource('barang', BarangController::class);

Route::resource('barangmasuk', BarangMasukController::class);

Route::resource('barangkeluar', BarangKeluarController::class);

Route::resource('pinjambarang', PinjamBarangController::class);

Route::resource('user', UserController::class);

Route::resource('stok', StokController::class);

?>
