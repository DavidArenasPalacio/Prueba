<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController; 
use App\Http\Controllers\ListaChequeoVCTController;
use App\Http\Controllers\ListaChequeoMauiController;
use App\Http\Controllers\ListaChequeoAvionController;
use App\Http\Controllers\ListaChequeoCrashController;
use App\Http\Controllers\ListaChequeoPolarController;
use App\Http\Controllers\ListaChequeoCanopyController;
use App\Http\Controllers\ListaChequeoJunglaController;
use App\Http\Controllers\ListaChequeoMorganController;
use App\Http\Controllers\ListaChequeoUrbanoController;
use App\Http\Controllers\ListaChequeoZigZagController;
use App\Http\Controllers\ListaChequeoKamikazeController;
use App\Http\Controllers\ListaChequeoMiniCrashController;
use App\Http\Controllers\ListaChequeoTrenIguanaController;
use App\Http\Controllers\ListaChequeoTrenMiticoController;
use App\Http\Controllers\ListaChequeoEspacioInfinitoController;
use App\Http\Controllers\ListaChequeoInvasionController;
use App\Http\Controllers\ListaChequeoSimuladorExtremoController;
use App\Http\Controllers\ListaChequeoSimuladorFantasiaController;


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

/* Route::get('/', function () {
    return view('auth.login');
});
 */
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/usuarios', [UsuarioController::class, 'index'])->middleware(['auth'])->name('usuarios.index');
Route::get('/datatable/datos', [UsuarioController::class, 'usuarios'])->middleware(['auth'])->name('datatable.user');

/*  Lista de chequeo Zig Zag */
Route::get('/listaChequeoZigzag', [ListaChequeoZigZagController::class, 'index'])->middleware(['auth'])->name('listaChequeoZigZag.index');
Route::get('/listaChequeoZigzag/create', [ListaChequeoZigZagController::class, 'create'])->middleware(['auth'])->name('listaChequeoZigZag.create');
Route::get('/listaChequeoZigzag/ListarChequeoZigZag', [ListaChequeoZigZagController::class, 'ListarChequeoZigZag'])->middleware(['auth'])->name('datatable.chequeoZigZag');
Route::get('/listaChequeoZigzag/imagenes/{listaChequeoZigzag}', [ListaChequeoZigZagController::class, 'imagen'])->middleware(['auth']);


/******************** Extremo  **********************/
/*  Lista de chequeo VCT */
Route::get('/listaChequeoVCT', [ListaChequeoVCTController::class, 'index'])->middleware(['auth'])->name('listaChequeoVCT.index');
Route::get('/listaChequeoVCT/create', [ListaChequeoVCTController::class, 'create'])->middleware(['auth'])->name('listaChequeoVCT.create');
Route::get('/listaChequeoVCT/datos', [App\Http\Livewire\ListaChequeoVCT\Show::class, 'listarChequeoVCT'])->middleware(['auth'])->name('datatable.chequeoVCT');
Route::get('/listaChequeoVCT/imagenes/{listaChequeoVCT}', [App\Http\Livewire\ListaChequeoVCT\Show::class, 'imagen'])->middleware(['auth']);

/* Lista de chequeo Tren Iguana  */
Route::get('/listaChequeoTrenIguana', [ListaChequeoTrenIguanaController::class, 'index'])->middleware(['auth'])->name('listaChequeoTrenIguana.index');
Route::get('/listaChequeoTrenIguana/create', [ListaChequeoTrenIguanaController::class, 'create'])->middleware(['auth'])->name('listaChequeoTrenIguana.create');
Route::get('/listaChequeoTrenIguana/datos', [App\Http\Livewire\ListaChequeoTrenIguana\Show::class, 'ListarChequeoTrenIguana'])->middleware(['auth'])->name('datatable.listaChequeoTrenIguana');;
Route::get('/listaChequeoTrenIguana/imagenes/{listaChequeoTrenIguana}', [App\Http\Livewire\ListaChequeoTrenIguana\Show::class, 'imagen'])->middleware(['auth']);

/*Lista  de chequeo simulador extremo*/
Route::get('/listaChequeoSimuladorExtremo', [ListaChequeoSimuladorExtremoController::class, 'index'])->middleware(['auth'])->name('listaChequeoSimuladorExtremo.index');
Route::get('/listaChequeoSimuladorExtremo/create', [ListaChequeoSimuladorExtremoController::class, 'create'])->middleware(['auth'])->name('listaChequeoSimuladorExtremo.create');
Route::get('/listaChequeoSimuladorExtremo/datos', [App\Http\Livewire\listaChequeoSimuladorExtremo\Show::class, 'listaChequeoSimuladorExtremo'])->middleware(['auth'])->name('datatable.listaChequeoSimuladorExtremo');
Route::get('/listaChequeoSimuladorExtremo/imagenes/{listaChequeoSimuladorExtremo}', [App\Http\Livewire\ListaChequeoSimuladorExtremo\Show::class, 'imagen'])->middleware(['auth']);

/*Lista de chequeo Maui */
Route::get('/listaChequeoMaui', [ListaChequeoMauiController::class, 'index'])->middleware(['auth'])->name('listaChequeoMaui.index');
Route::get('/listaChequeoMaui/create', [ListaChequeoMauiController::class, 'create'])->middleware(['auth'])->name('listaChequeoMaui.create');
Route::get('/listaChequeoMaui/datos', [App\Http\Livewire\ListaChequeoMaui\Show::class, 'listaChequeoMaui'])->middleware(['auth'])->name('datatable.listaChequeoMaui');
Route::get('/listaChequeoMaui/imagenes/{listaChequeoMaui}', [App\Http\Livewire\ListaChequeoMaui\Show::class, 'imagen'])->middleware(['auth']);

/*Lista de Chequeo Kamikaze */
Route::get('/listaChequeoKamikaze', [ListaChequeoKamikazeController::class, 'index'])->middleware(['auth'])->name('listaChequeoKamikaze.index');
Route::get('/listaChequeoKamikaze/create', [ListaChequeoKamikazeController::class, 'create'])->middleware(['auth'])->name('listaChequeoKamikaze.create');
Route::get('/listaChequeoKamikaze/datos', [App\Http\Livewire\ListaChequeoKamikaze\Show::class, 'listaChequeoKamikaze'])->middleware(['auth'])->name('datatable.listaChequeoKamikaze');
Route::get('/listaChequeoKamikaze/imagenes/{listaChequeoKamikaze}', [App\Http\Livewire\ListaChequeoKamikaze\Show::class, 'imagen'])->middleware(['auth']);

/*Lista de Chequeo Crash */
Route::get('/listaChequeoCrash', [ListaChequeoCrashController::class, 'index'])->middleware(['auth'])->name('listaChequeoCrash.index');
Route::get('/listaChequeoCrash/create', [ListaChequeoCrashController::class, 'create'])->middleware(['auth'])->name('listaChequeoCrash.create');
Route::get('/listaChequeoCrash/datos', [App\Http\Livewire\ListaChequeoCrash\Show::class, 'listaChequeoCrash'])->middleware(['auth'])->name('datatable.listaChequeoCrash');
Route::get('/listaChequeoCrash/imagenes/{listaChequeoCrash}', [App\Http\Livewire\ListaChequeoCrash\Show::class, 'imagen'])->middleware(['auth']);

/*Lista de Chequeo Avion */
Route::get('/listaChequeoAvion', [ListaChequeoAvionController::class, 'index'])->middleware(['auth'])->name('listaChequeoAvion.index');
Route::get('/listaChequeoAvion/create', [ListaChequeoAvionController::class, 'create'])->middleware(['auth'])->name('listaChequeoAvion.create');
Route::get('/listaChequeoAvion/datos', [App\Http\Livewire\ListaChequeoAvion\Show::class, 'listaChequeoAvion'])->middleware(['auth'])->name('datatable.listaChequeoAvion');
Route::get('/listaChequeoAvion/imagenes/{listaChequeoAvion}', [App\Http\Livewire\ListaChequeoAvion\Show::class, 'imagen'])->middleware(['auth']);

/******************** Fin Extremo  **********************/

/******************** Expedición  **********************/
/*Lista de Chequeo Jungla */
Route::get('/listaChequeoJungla', [ListaChequeoJunglaController::class, 'index'])->middleware(['auth'])->name('listaChequeoJungla.index');
Route::get('/listaChequeoJungla/create', [ListaChequeoJunglaController::class, 'create'])->middleware(['auth'])->name('listaChequeoJungla.create');
Route::get('/listaChequeoJungla/datos', [App\Http\Livewire\ListaChequeoJungla\Show::class, 'listaChequeoJungla'])->middleware(['auth'])->name('datatable.listaChequeoJungla');
Route::get('/listaChequeoJungla/imagenes/{listaChequeoJungla}', [App\Http\Livewire\ListaChequeoJungla\Show::class, 'imagen'])->middleware(['auth']);

/*Lista de Chequeo Canopy */
Route::get('/listaChequeoCanopy', [ListaChequeoCanopyController::class, 'index'])->middleware(['auth'])->name('listaChequeoCanopy.index');
Route::get('/listaChequeoCanopy/create', [ListaChequeoCanopyController::class, 'create'])->middleware(['auth'])->name('listaChequeoCanopy.create'); 
Route::get('/listaChequeoCanopy/datos', [App\Http\Livewire\ListaChequeoCanopy\Show::class, 'listaChequeoCanopy'])->middleware(['auth'])->name('datatable.listaChequeoCanopy');
Route::get('/listaChequeoCanopy/imagenes/{listaChequeoCanopy}', [App\Http\Livewire\ListaChequeoCanopy\Show::class, 'imagen'])->middleware(['auth']);
/******************** Fin Expedición  *********************/

/*******************  Aventura  ***************/
/*Lista Chequeo Polar */
Route::get('/listaChequeoPolar', [ListaChequeoPolarController::class, 'index'])->middleware(['auth'])->name('listaChequeoPolar.index');
Route::get('/listaChequeoPolar/create', [ListaChequeoPolarController::class, 'create'])->middleware(['auth'])->name('listaChequeoPolar.create'); 
Route::get('/listaChequeoPolar/datos', [App\Http\Livewire\ListaChequeoPolar\Show::class, 'listaChequeoPolar'])->middleware(['auth'])->name('datatable.listaChequeoPolar');
Route::get('/listaChequeoPolar/imagenes/{listaChequeoPolar}', [App\Http\Livewire\ListaChequeoPolar\Show::class, 'imagen'])->middleware(['auth']);

/*Lista Chequeo espacio infinito */
Route::get('/listaChequeoEspacioInfinito', [ListaChequeoEspacioInfinitoController::class, 'index'])->middleware(['auth'])->name('listaChequeoEspacioInfinito.index');
Route::get('/listaChequeoEspacioInfinito/create', [ListaChequeoEspacioInfinitoController::class, 'create'])->middleware(['auth'])->name('listaChequeoEspacioInfinito.create'); 
Route::get('/listaChequeoEspacioInfinito/datos', [App\Http\Livewire\ListaChequeoEspacioInfinito\Show::class, 'listaChequeoEspacioInfinito'])->middleware(['auth'])->name('datatable.listaChequeoEspacioInfinito');
Route::get('/listaChequeoEspacioInfinito/imagenes/{listaChequeoEspacioInfinito}', [App\Http\Livewire\ListaChequeoEspacioInfinito\Show::class, 'imagen'])->middleware(['auth']);
/******************* Fin  Aventura  ***************/

/*******************  Fantasía  ***************/
/* Lista Chequeo Urbano */
Route::get('/listaChequeoUrbano', [ListaChequeoUrbanoController::class, 'index'])->middleware(['auth'])->name('listaChequeoUrbano.index');
Route::get('/listaChequeoUrbano/create', [ListaChequeoUrbanoController::class, 'create'])->middleware(['auth'])->name('listaChequeoUrbano.create'); 
Route::get('/listaChequeoUrbano/datos', [App\Http\Livewire\ListaChequeoUrbano\Show::class, 'listarChequeoUrbano'])->middleware(['auth'])->name('datatable.listaChequeoUrbano');
Route::get('/listaChequeoUrbano/imagenes/{listaChequeoUrbano}', [App\Http\Livewire\ListaChequeoUrbano\Show::class, 'imagen'])->middleware(['auth']);

/* Lista Chequeo  Tren Mitico*/
Route::get('/listaChequeoTrenMitico', [ListaChequeoTrenMiticoController::class, 'index'])->middleware(['auth'])->name('listaChequeoTrenMitico.index');
Route::get('/listaChequeoTrenMitico/create', [ListaChequeoTrenMiticoController::class, 'create'])->middleware(['auth'])->name('listaChequeoTrenMitico.create'); 
Route::get('/listaChequeoTrenMitico/datos',  [App\Http\Livewire\ListaChequeoTrenMitico\Show::class, 'listarChequeoTrenMitico'])->middleware(['auth'])->name('datatable.listaChequeoTrenMitico');
Route::get('/listaChequeoTrenMitico/imagenes/{listaChequeoTrenMitico}', [App\Http\Livewire\ListaChequeoTrenMitico\Show::class, 'imagen'])->middleware(['auth']);

/* Lista Chequeo Simulador Fantasia */
Route::get('/listaChequeoSimuladorFantasia', [ListaChequeoSimuladorFantasiaController::class, 'index'])->middleware(['auth'])->name('listaChequeoSimuladorFantasia.index');
Route::get('/listaChequeoSimuladorFantasia/create', [ListaChequeoSimuladorFantasiaController::class, 'create'])->middleware(['auth'])->name('listaChequeoSimuladorFantasia.create');
Route::get('/listaChequeoSimuladorFantasia/datos',  [App\Http\Livewire\ListaChequeoSimuladorFantasia\Show::class, 'listarChequeoSimuladorFantasia'])->middleware(['auth'])->name('datatable.listaChequeoSimuladorFantasia');
Route::get('/listaChequeoSimuladorFantasia/imagenes/{listaChequeoSimuladorFantasia}', [App\Http\Livewire\ListaChequeoSimuladorFantasia\Show::class, 'imagen'])->middleware(['auth']);

/* Lista Chequeo Morgan */
Route::get('/listaChequeoMorgan', [ListaChequeoMorganController::class, 'index'])->middleware(['auth'])->name('listaChequeoMorgan.index');
Route::get('/listaChequeoMorgan/create', [ListaChequeoMorganController::class, 'create'])->middleware(['auth'])->name('listaChequeoMorgan.create');
Route::get('/listaChequeoMorgan/datos',  [App\Http\Livewire\ListaChequeoMorgan\Show::class, 'listarChequeoMorgan'])->middleware(['auth'])->name('datatable.listarChequeoMorgan');
Route::get('/listaChequeoMorgan/imagenes/{listaChequeoMorgan}', [App\Http\Livewire\ListaChequeoMorgan\Show::class, 'imagen'])->middleware(['auth']);

/* Lista chequeo Mini Crash */
Route::get('/listaChequeoMiniCrash', [ListaChequeoMiniCrashController::class, 'index'])->middleware(['auth'])->name('listaChequeoMiniCrash.index');
Route::get('/listaChequeoMiniCrash/create', [ListaChequeoMiniCrashController::class, 'create'])->middleware(['auth'])->name('listaChequeoMiniCrash.create');
Route::get('/listaChequeoMiniCrash/datos',  [App\Http\Livewire\ListaChequeoMiniCrash\Show::class, 'listarChequeoMiniCrash'])->middleware(['auth'])->name('datatable.listarChequeoMiniCrash');
Route::get('/listaChequeoMiniCrash/imagenes/{listaChequeoMiniCrash}', [App\Http\Livewire\ListaChequeoMiniCrash\Show::class, 'imagen'])->middleware(['auth']);

/* Lista chequeo Invasión */
Route::get('/listaChequeoInvasion', [ListaChequeoInvasionController::class, 'index'])->middleware(['auth'])->name('listaChequeoInvasion.index');
Route::get('/listaChequeoInvasion/create', [ListaChequeoInvasionController::class, 'create'])->middleware(['auth'])->name('listaChequeoInvasion.create');
Route::get('/listaChequeoInvasion/datos',  [App\Http\Livewire\ListaChequeoInvasion\Show::class, 'listarChequeoInvasion'])->middleware(['auth'])->name('datatable.listaChequeoInvasion');
Route::get('/listaChequeoInvasion/imagenes/{listaChequeoInvasion}', [App\Http\Livewire\ListaChequeoInvasion\Show::class, 'imagen'])->middleware(['auth']);


/******************* Fin  Fantasía  ***************/


require __DIR__.'/auth.php';