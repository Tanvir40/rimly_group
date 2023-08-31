<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\frontEndController;
use App\Http\Controllers\ourbrandsController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamController;

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

Route::get('/login', [loginController::class,"user_login"])->name("login");
Route::post('/loging', [loginController::class,"user_loging"])->name("loging.user_loging");




Route::group(["middleware"=>"auth"], function(){

/*For loginController controller */
    Route::get('/admin', [loginController::class,"admin_user"]);
    Route::get('/logout', [loginController::class,"logout_user"]);



/*For mainController controller */
    Route::get('/aboutus', [mainController::class,"about_us"]);
    Route::post('/about', [mainController::class,"about_insert"])->name("about.about_insert");



    Route::get('/slideradd', [mainController::class,"slider_add"]);
    Route::post('/sliderupload', [mainController::class,"slider_upload"])->name("sliderupload.slider_upload");


    Route::get('/sliderlist', [mainController::class,"slider_list"]);
    Route::get('/sliderdel/{id}', [mainController::class,"slider_del"]);
    Route::get('/sliderup/{id}', [mainController::class,"slider_up"]);
    Route::post('/sliImgUp', [mainController::class,"sli_Img_Up"])->name("sliImgUp.sli_Img_Up");



    Route::get('/websetup', [mainController::class,"webset_up"]);
    Route::post('/websetupinsert', [mainController::class,"websetup_insert"])->name("websetupinsert.websetup_insert");



// tanvir created routes start
    //team controller
    Route::get('/add_team', [TeamController::class,'add_team'])->name('add.teams');
    Route::POST('/insert/team/', [TeamController::class,'insert_team'])->name('insert.team');
    Route::get('/teams', [TeamController::class,'teams'])->name('teams');
    Route::get('/teams/delete/{id}', [TeamController::class,'teams_delete'])->name('teams.delete');
    Route::get('/edit/team/{id}', [TeamController::class,'edit_team'])->name('edit.teams');
    Route::POST('/update/team/', [TeamController::class,'update_team']);

    //contact us controller
    Route::get('/view_contact/', [ContactController::class,'view_contact'])->name('view.contact');
    Route::POST('/update/contact/', [ContactController::class,'update_contact'])->name('update.contact');

    //navbar list
    Route::get('/nav_list', [pageController::class,'nav_list']);
    Route::get('/edit_nav/{id}', [pageController::class,'edit_nav'])->name('edit.nav');
    Route::POST('/update/nav/', [pageController::class,'update_nav'])->name('nav.update');
    Route::get('/nav/delete/{id}', [pageController::class,'nav_delete'])->name('nav.delete');

//SubNavBar list
    Route::get('/subnav_list', [pageController::class,'subnav_list']);
    Route::get('/edit/subnav/{id}', [pageController::class,'edit_subnav'])->name('edit.subnav');
    Route::POST('/update/subnav/', [pageController::class,'update_subnav'])->name('subnav.update');
    Route::get('/subnav/delete/{id}', [pageController::class,'subnav_delete'])->name('subnav.delete');

//<<<<<<< Jiya
//=======
    //our clients
    Route::get('/add_clients', [pageController::class,'add_clients'])->name('add.add_clients');
    Route::POST('/insert_clients', [pageController::class,'insert_clients'])->name('insert.insert_clients');
    Route::get('/clients_list', [pageController::class,'clients_list'])->name('list.clients_list');
    Route::get('/clients_list/delete/{id}', [pageController::class,'clients_list_delete'])->name('delete.clients_list');
//>>>>>>> main
//// tanvir created routes end








    /*For ourbrandsController controller */

    Route::get('/ourBrands', [ourbrandsController::class,"our_Brands"]);
    Route::post('/ourBrnadinsert', [ourbrandsController::class,"ourBrnad_insert"])->name("ourBrnadinsert.ourBrnadinsert");
    Route::get('/brandlist', [ourbrandsController::class,"brand_list"]);
    Route::get('/ourbrandsup/{id}', [ourbrandsController::class,"ourbrands_up"]);
    Route::post('/brandsupdate', [ourbrandsController::class,"brands_update"])->name("brandsupdate.brands_update");
    Route::get('/ourbranddel/{id}', [ourbrandsController::class,"ourbrand_del"]);




    Route::get('/bannersection', [ourbrandsController::class,"banner_section"]);
    Route::post('/bannersectionupdate', [ourbrandsController::class,"banner_section_update"])->name("bannersectionupdate.banner_section_update");




    /*For pageController controller */

    Route::get('/pagecreate', [pageController::class,"page_create"]);
    Route::post('/pageinsert', [pageController::class,"page_insert"])->name("pageinsert.page_insert");
    Route::get('/pagelist', [pageController::class,"page_list"]);
    Route::get('/pageup/{id}', [pageController::class,"page_up"]);
    Route::post('/pageupdate', [pageController::class,"page_update"])->name("pageupdate.page_update");
    Route::get('/pagedel/{id}', [pageController::class,"page_del"]);


    Route::get('/profile', [pageController::class,"profile_user"]);
    Route::post('/profileupdate', [pageController::class,"profile_update"])->name("profileupdate.profile_update");




    /*For front end page....*/
    Route::get('dynamic/{page}',[pageController::class,"front_page"]);





    /*For front end page....*/

    Route::get('/createnavbar',[pageController::class,"create_navbar"]);
    Route::post('/navbarinsert',[pageController::class,"navbar_insert"])->name("navbarinsert.navbar_insert");


    Route::get('/subcreatenavbar',[pageController::class,"subcreate_navbar"]);
    Route::post('/subnavbarinsert',[pageController::class,"subnavbar_insert"])->name("subnavbarinsert.subnavbar_insert");



});



/*For frontEndController controller */
    Route::get('/', [frontEndController::class,"homeContent"]);
    Route::post('/sendmail', [pageController::class,'send_mail']);


