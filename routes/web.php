<?php



Route::get('/', function () {
  //devolve uma pagina chamada welcome
  // essa pagina esta em:  resources / view, por padrao
  // essam pagina que retorna pode ser mudada
    // return view('welcome');
  return view('saudacao');
});
