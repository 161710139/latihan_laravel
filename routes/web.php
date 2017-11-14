<?php
//basic routing
Route::get('/'.function () {
    return view('Welcome');
});

Route::get('/about',function (){
    return '<h1> Hallo </h1>'
            .'Selamat Datang di Web App saya<br>'
            .'Laravel Keren'
});

//routing parameters
Route::get('user/{nama}',function ($a) {
    return 'Nama saya adalah <b>'.$a.'</b>';
});

//tugas routing
Route::get('/kantin/{makanan}/{minuman}/{cemilan}',function($makan,$minum,$cemil){
    return 'Saya Makan '.$makan.'<br>'.'Minumnya '.$minum.'<br>'.'Ngemilnya'.$ngemil.'<br>';
})
?>