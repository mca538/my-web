<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ucontrol;
use App\Http\Controllers\pcontrol;


Route::post('/logs',[ucontrol::class,'logs']);
Route::post('edit/update',[pcontrol::class,'update']);
Route::post('/ap',[pcontrol::class , 'store' ] );
Route::post('/destroy/{id}',[pcontrol::class,'destroy']);
Route::post('/psearch',[pcontrol::class,'search']);
Route::post('/orderplace',[pcontrol::class,'orderplace']);
Route::post('add_to_cart',[pcontrol::class,'addtocart']);
Route::post('/ordereditprocess/{id}',[pcontrol::class,'updateorder']);
Route::get('/logout',[ucontrol::class , 'logout' ] );
Route::get('removecart/{id}',[pcontrol::class , 'removecart' ] );
Route::get('/edit/{id}',[pcontrol::class,'edit']);
Route::get('/delete/{id}',[pcontrol::class,'deleteview']);
Route::get('/cartadd/{pid}',[pcontrol::class , 'cartadd' ] );
route::get('/cancelorder/{id}/{userid}', [pcontrol::class,'cancelorder']);
Route::post('/login',[ucontrol::class,'store']);
Route::get('/order/{id}/edit', [pcontrol::class,'orderedit']);





Route::group(['middleware'=>['AuthCheck']],function()
{
    Route::get('/',[pcontrol::class , 'front' ] );
    Route::get('/login',[ucontrol::class,'usrlogin']);
    Route::get('/userhome',[pcontrol::class,'prodview']);
    Route::get('reg',[ucontrol::class , 'index' ] );
   Route::get('/adminhome',[ucontrol::class,'adminhome']);
    Route::get('/aindex',[pcontrol::class , 'create' ] );
    



Route::get('/aboutus',[pcontrol::class , 'aboutus' ] );
Route::get('/contactus',[pcontrol::class , 'contactus' ] );


Route::get('/userview',[pcontrol::class , 'usrview' ] );






Route::get('/cartlist',[pcontrol::class , 'cartlist' ] );

Route::get('ordernow',[pcontrol::class , 'ordernow' ] );


Route::get('/myorders',[pcontrol::class,'myorder']);
Route::get('/viewproducts',[pcontrol::class,'viewproducts']);
Route::get('/vieworders',[pcontrol::class , 'vieworders' ] );


Route::get('/front', [pcontrol::class,'front']);




});








