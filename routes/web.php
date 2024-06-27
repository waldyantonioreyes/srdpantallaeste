<?php

use App\Http\Controllers\loteriatestcontroller;
use App\Http\Controllers\NacionalSorteosController;
use App\Http\Controllers\realsorteosController;
use App\Http\Controllers\resultadosKingLotteryController;
use App\Http\Controllers\resultadosleidsa;
use App\Http\Controllers\resultadosLotedom;
use App\Http\Controllers\resultadosloteka;
use App\Http\Controllers\resultadosPrimera;
use App\Http\Controllers\sorteosangula;
use App\Http\Controllers\UsersnoPermisions;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResultadoController;
use App\Http\Controllers\ApiCrudController;
use app\http\Controllers\ContactController;
use App\Http\Controllers\PantallaController;
use App\Http\Controllers\ParticipantesRifaController;
use App\Http\Controllers\QuinielaKingLotteryNoche;
use App\Http\Controllers\resultadosKingLotterynocheController;
use App\Http\Livewire\Pantalla;
use Faker\Guesser\Name;

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

//rutas de la pagina principal
Route::get('/inicio', function () {
    return view('sitio.index');
})->name('inicio');

Route::get('sorteos', function () {
    return view('sitio.sorteos');
})->name('sorteos');

Route::get('sorteosanteriores', function () {
    return view('sitio.sorteosanteriores');
})->name('sorteosanteriores');

Route::get('noticias', function () {
    return view('sitio.noticias');
})->name('noticias');

Route::get('nosotros', function () {
    return view('sitio.nosotros');
})->name('nosotros');

Route::get('contacto', function () {
    return view('sitio.contacto'); 
})->name('contacto');


Route::get('pantalla-view', function(){

   return view('pantalla.index');

})->name('pantalla-view');

//Importar resultados csv
Route::get('importar-resultados', [ResultadoController::class, 'showImportForm'])->middleware('auth')->middleware('checkUserType');
Route::post('importar-resultados', [ResultadoController::class, 'import']);


//Participantes Rifa
Route::get('participantesrifa', [ParticipantesRifaController::class, 'index'])->name('participantesrifa');

//Resultados sorteos real
Route::get('realsorteos', [realsorteosController::class, 'realsorteos'])->name('realsorteos');

//Resultados Loteria Nacional
Route::get('nacionalsorteos', [NacionalSorteosController::class, 'nacionalsorteos'])->name('nacionalsorteos');

//Lotedom
Route::get('sorteoslotedom', [resultadosLotedom::class, 'sorteoslotedom'])->name('sorteoslotedom');

//Leidsa
Route::get('sorteosleidsa', [resultadosleidsa::class, 'sorteosleidsa'])->name('sorteosleidsa');

//Anguila
//old method
Route::get('sorteosanguila', [sorteosangula::class, 'sorteosanguila'])->name('sorteosanguila');

//Anguila 9am
Route::post('/anguila9am', 'AnguilaLoteriasController@anguila9am')->name('anguila.anguila9am');

//Anguila 10am
Route::post('/anguila10am', 'AnguilaLoteriasController@anguila10am')->name('anguila.anguila10am');

//Anguila 11am
Route::post('/anguila11am', 'AnguilaLoteriasController@anguila11am')->name('anguila.anguila11am');

//Anguila 12pm
Route::post('/anguila12pm', 'AnguilaLoteriasController@anguila12pm')->name('anguila.anguila12pm');

//Anguila 1pm
Route::post('/anguila1pm', 'AnguilaLoteriasController@anguila1pm')->name('anguila.anguila1pm');

//Anguila 2pm
Route::post('/anguila2pm', 'AnguilaLoteriasController@anguila2pm')->name('anguila.anguila2pm');

//Anguila 3pm
Route::post('/anguila3pm', 'AnguilaLoteriasController@anguila3pm')->name('anguila.anguila3pm');

//Anguila 4pm
Route::post('/anguila4pm', 'AnguilaLoteriasController@anguila4pm')->name('anguila.anguila4pm');

//Anguila 5pm
Route::post('/anguila5pm', 'AnguilaLoteriasController@anguila5pm')->name('anguila.anguila5pm');

//Anguila 6pm
Route::post('/anguila6pm', 'AnguilaLoteriasController@anguila6pm')->name('anguila.anguila6pm');

//Anguila 7pm
Route::post('/anguila7pm', 'AnguilaLoteriasController@anguila7pm')->name('anguila.anguila7pm');

//Anguila 8pm
Route::post('/anguila8pm', 'AnguilaLoteriasController@anguila8pm')->name('anguila.anguila8pm');


//Anguila 9pm
Route::post('/anguila9pm', 'AnguilaLoteriasController@anguila9pm')->name('anguila.anguila9pm');



//Anguila Cuarteta

//Anguila 9am
Route::post('/anguilac9am', 'AnguilaLoteriasController@anguilac9am')->name('anguila.anguilac9am');

//Anguila 10am
Route::post('/anguilac10am', 'AnguilaLoteriasController@anguilac10am')->name('anguila.anguilac10am');

//Anguila 11am
Route::post('/anguilac11am', 'AnguilaLoteriasController@anguilac11am')->name('anguila.anguilac11am');

//Anguila 12pm
Route::post('/anguilac12pm', 'AnguilaLoteriasController@anguilac12pm')->name('anguila.anguilac12pm');

//Anguila 1pm
Route::post('/anguilac1pm', 'AnguilaLoteriasController@anguilac1pm')->name('anguila.anguilac1pm');

//Anguila 2pm
Route::post('/anguilac2pm', 'AnguilaLoteriasController@anguilac2pm')->name('anguila.anguilac2pm');

//Anguila 3pm
Route::post('/anguilac3pm', 'AnguilaLoteriasController@anguilac3pm')->name('anguila.anguilac3pm');

//Anguila 4pm
Route::post('/anguilac4pm', 'AnguilaLoteriasController@anguilac4pm')->name('anguila.anguilac4pm');

//Anguila 5pm
Route::post('/anguilac5pm', 'AnguilaLoteriasController@anguilac5pm')->name('anguila.anguilac5pm');

//Anguila 6pm
Route::post('/anguilac6pm', 'AnguilaLoteriasController@anguilac6pm')->name('anguila.anguilac6pm');

//Anguila 7pm
Route::post('/anguilac7pm', 'AnguilaLoteriasController@anguilac7pm')->name('anguila.anguilac7pm');

//Anguila 8pm
Route::post('/anguilac8pm', 'AnguilaLoteriasController@anguilac8pm')->name('anguila.anguilac8pm');

//Anguila 9pm
Route::post('/anguilac9pm', 'AnguilaLoteriasController@anguilac9pm')->name('anguila.anguilac9pm');


//Primera
Route::get('resultadosprimera', [resultadosPrimera::class, 'resultadosPrimera'])->name('resultadosprimera');

//Loteka
Route::get('resultadosloteka', [resultadosloteka::class, 'resultadosLoteka'])->name('resultadosloteka');


//King Lottery 1
Route::get('resultadosKingLottery', [resultadosKingLotteryController::class, 'resultadosKingLottery'])->name('resultadosKingLottery');

//King Lottery 2
Route::get('resultadosKingLotterynoche', [resultadosKingLotterynocheController::class, 'resultadosKingLotterynoche'])->name('resultadosKingLotterynoche');


//Users No Permision
Route::get('usersnopermisions', [UsersnoPermisions::class, 'index'])->name('usersnopermisions');









Route::get('componentes', function () {
    return view('componentes.index');
});

//Fin Rutas Pagina principal

//Rutas del Dashboard//
//Route::get('resultados', function () {
//return view('admin.resultados');
//})->name('resultados');


Route::resource('resultados', 'ResultadosController')->middleware('auth')->middleware('checkUserType');


Route::post('/actualizar-estatus', 'EstatusController@update')->name('estatus.update');

Route::post('/actualizar-estatusanguilla', 'EstatusAnguilla@update')->name('estatusanguilla.update');


Route::resource('resultadosanteriores', 'ResultadosAnterioresController')->middleware('auth')->middleware('checkUserType');


//Controlle resultados anteriores sitio principal
Route::resource('resultadosloteriasanteriores', 'ResultadosLoteriasAnteriores');

//Controller Noticias
Route::resource('noticias', 'NoticiasController');

//Controller Noticias
Route::resource('noticiasactualidad', 'NoticiasSitio');


Route::get('/get-results', 'ResultadosLoteriasAnteriore@getResults');

//Controllers resource loterias insert
Route::resource('real12pm', 'ResultReal12pmController');
Route::resource('real1pm', 'ResultReal1pmController');

//Loteria Nacional
Route::resource('nacional230pm', 'ResultNacional230pmController');
Route::resource('nacional850pm', 'ResultNacional850pmController');
Route::resource('juegamas', 'ResulJuegaMasController');

//King Lottery
Route::resource('king1230pm', 'ResultKingLottery1230pmController');
Route::resource('king730pm', 'ResultKingLottery730pmController');
Route::resource('quinielaking', 'QuinielaKingLotteryController');
Route::resource('quinielaking730', 'QuinielaKingLotteryNoche');
Route::resource('lotopoolking1230', 'LotoPoolKing1230Controller');
Route::resource('lotopoolking730', 'LotoPoolKing730Controller');


//Anguilla 

Route::resource('anguilla', 'AnguillaLotteryController');
Route::resource('cuarteta', 'CuartetaController');



//Leidsa
Route::resource('leidsa', 'LeidsaController');
Route::resource('pegatres', 'PegatresController');
Route::resource('lotopool', 'LotopoolController');
Route::resource('superkino', 'SuperKinoController');
Route::resource('superlotomas', 'SuperLotoMasController');

//Lotedom
Route::resource('lotedom', 'LoteDomController');
Route::resource('quemaitomayor', 'QuemaitoMayorController');
Route::resource('superpalelotedom', 'SuperPaleLotedomController');
Route::resource('agarra4', 'Agarra4LotedomController');
Route::resource('quinielalotedom', 'QuinielaLotedomController');




//La Primera
Route::resource('primera12pm', 'Primera12PMController');
Route::resource('primera8pm', 'Primera8PMController');
Route::resource('loto5mas', 'Loto5MasController');

//Loteka
Route::resource('loteka755pm', 'loteka755pmController');
Route::resource('lotoloteka', 'LottoLotekaController');
Route::resource('megachance', 'MegaChangeController');
Route::resource('repartidera', 'RepartideraMegachanceController');
Route::resource('quinielaloteka', 'QuinielaLotekaController');
Route::resource('toca3', 'Toca3Controller');

//La Suerte Dominicana
Route::resource('lasuerte1230pm', 'lasuerte1230pmController');
Route::resource('lasuerte6pm', 'lasuerte6pmController');

//New York Lottery
Route::resource('newyork230pm', 'NewYork230pmController');
Route::resource('newyork1030pm', 'NewYork1030pmmController');

//Florida Lottery
Route::resource('florida130pm', 'Florida130pmController');
Route::resource('florida940pm', 'Florida940pmController');

//Sorteos Alternos

//Loto Pool Real
Route::resource('lotopoolreal', 'LotoPoolRealController');

//Pega 4 Real
Route::resource('pega4real', 'Pega4realController');

//Super Pale Real
Route::resource('superpalereal', 'SuperPaleRealController');

//Loto Real 
Route::resource('real', 'lotorealController');

//Nueva Yol real
Route::resource('nuevayolreal', 'NuevaYolRealController');

//Nueva Yol real
Route::resource('tufechareal', 'TuFechaRealController');

// Loto real Nuevo 
Route::resource('lotosorteoreal', 'LotosorteorealController');

// Billete nacional nuevo
Route::resource('billetesnacional', 'BilletesnacionalController');

//Control de Usuarios
Route::resource('usuarios', 'UsuariosController');

//Control de Apis
Route::resource('apis', 'ApiCrudController');

//Control de Rifas
Route::resource('trivias', 'RifasController');


Route::resource('tokenlottery', 'TokenLotteryController')->middleware('auth')->middleware('checkUserType');
 


Route::resource('/', 'InicioController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('checkUserType');


Route::post('/contacto', 'ContactController@send');
// nueva con livewire
// Route::resource('pantalla', 'PantallaController');
Route::get('pantalla/{pantalla}', 'PantallaController@show');
//Route Hooks - Do not delete//
	Route::view('remittances', 'livewire.remittances.index')->middleware('auth')->middleware('checkUserType');
	Route::view('fuels', 'livewire.fuels.index')->middleware('auth')->middleware('checkUserType');
	Route::view('images', 'livewire.images.index')->middleware('auth');
	// Route::view('users', 'livewire.users.index')->middleware('auth');
	Route::view('users', 'livewire.users.index')->name('user');
	
	// // Route::view('userscreens', 'livewire.userscreens.index')->middleware('auth');
    // Route::view('userscreens', 'livewire.userscreens.index');
	Route::view('configurations', 'livewire.configurations.index')->name('configurations')->middleware('auth');
    // Route::view('configurations', 'livewire.configurations.index');