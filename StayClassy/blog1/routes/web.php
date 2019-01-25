<?php

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


Route::get('/login','UserController@userlogin')->name('user.userlogin');
Route::post('/login','UserController@uservarify')->name('user.uservarify');
Route::get('/','UserController@index')->name('user.index');

Route::get('/Home/quality','UserController@quality')->name('user.quality');
Route::get('/Home/policy','UserController@policy')->name('user.policy');
Route::get('/Home/shipping','UserController@shipping')->name('user.shipping');
Route::get('/Home/about','UserController@about')->name('user.about');
Route::get('/Home/customerservice','UserController@customerservice')->name('user.customerservice');
Route::get('/Home/contact','UserController@contact')->name('user.contact');

Route::get('/sign','UserController@signup')->name('user.sign');
Route::post('/sign','UserController@store')->name('user.store');
Route::get('/orderdetails','UserController@orderdetails')->name('user.orderdetails');


Route::get('/category/{name}','UserController@category')->name('user.category');
Route::get('/type/{name}','UserController@type')->name('user.type');
Route::get('/newarrival','UserController@newarrival')->name('user.newarrival');
Route::get('/Offers','UserController@offers')->name('user.offers');
Route::get('/Duffel/{name}','UserController@duffel')->name('user.duffel');

Route::get('/details/{id}','UserController@details')->name('user.details');
Route::post('/details/{id}','UserController@cart')->name('user.cart');
// Route::get('/invoiceinfo/{id}','UserController@invoiceInfo')->name('user.invoiceinfo');
Route::get('/search','UserController@search')->name('user.search');
Route::get('/send','MailController@index')->name('Mail.index');
Route::post('/send','MailController@mail')->name('Mail.mail');


Route::group(['middleware' => ['userSess']], function () {

	Route::get('/account','UserController@account')->name('user.account');

	Route::get('/user/logout','UserController@logout')->name('user.logout');

    Route::get('/checkout','UserController@checkout')->name('user.checkout');
	Route::post('/checkout','UserController@orderstore')->name('user.orderstore');

	Route::get('/invoice/{id}','UserController@invoice')->name('user.invoice');
	Route::get('/download/{id}','PdfController@pdf')->name('user.pdf');
	
	Route::get("/cartshow",'UserController@cartshow')->name('user.cartshow');
	Route::get('/ajax/addCart', 'AjaxController@addCart')->name('ajax.addCart');

	// Route::get('/transection','TransectionController@index')->name('Transection.index');
	Route::get('/test','PdfController@test');
	

	// Route::post("/cartshow",'UserController@orderstore')->name('user.orderstore');
	Route::get("/cartupdate/edit/{id}",'UserController@cartedit')->name('user.cartedit');
	Route::post("/cartupdate/edit/{id}",'UserController@cartupdate')->name('user.cartupdate');
	Route::get("/cartshow/remove/{id}",'UserController@cartremove')->name('user.cartremove');
});

// Route::get('/travelling','UserController@travelling')->name('user.travel');
// Route::get('/office','UserController@office')->name('user.office');
// Route::get('/gents','UserController@gents')->name('user.gents');



//Admin section

Route::get('/admin','AdminController@login')->name('admin.login');
Route::post('/admin','AdminController@varify')->name('admin.varify');

Route::group(['middleware' => ['adminSess']], function () {
	
	Route::get('/admin/signup','AdminController@adminsignup')->name('admin.adminsignup');
	Route::post('/admin/signup','AdminController@store')->name('admin.adminsignup');
	Route::get('/admin/logout','AdminController@adminlogout')->name('admin.adminlogout');

	Route::get('/admin-index','AdminController@index')->name('admin.index');
	Route::get('/admin/layout','AdminController@layout');
	Route::get('/admin/manage/user','AdminController@manageuser')->name('admin.manageuser');
	Route::get('/admin/manage/user/remove/{id}','AdminController@destroy')->name('admin.destroy');

	Route::get('/product','ProductController@index')->name('product.index');
	Route::get('/ajax/catFilter', 'AjaxController@catFilter')->name('ajax.catFilter');
	Route::get('/ajax/typeFilter', 'AjaxController@typeFilter')->name('ajax.typeFilter');

	Route::get('/productadd','ProductController@create')->name('product.create');
	Route::post('/productadd','ProductController@store')->name('product.store');
	Route::post('/productadd','ProductController@store')->name('product.store');

	Route::get('/productupdate/{id}','ProductController@productedit')->name('product.productedit');
	Route::post('/productupdate/{id}','ProductController@productupdate')->name('product.updateproduct');
	Route::get('/productdelete/{id}','ProductController@productdelete')->name('product.delete');
	Route::get('/productquantity/{id}','ProductController@quantity')->name('Product.quantity');
	Route::post('/productquantity/{id}','ProductController@quantityupdate')->name('Product.quantityupdate');

	Route::get('/transection','TransectionController@index')->name('Transection.index');
	Route::post('/transection','TransectionController@transactionHistory')->name('Product.transactionHistory');
	Route::get('/transection/download','PdfController@report')->name('Pdf.report');

	Route::get('/order','OrderController@index')->name('order.index');
	Route::get('/order/pending','OrderController@pending')->name('order.pending');
	Route::get('/order/delivered','OrderController@delivered')->name('order.delivered');
	Route::get('/order/returned','OrderController@returned')->name('order.returned');
	Route::get('/order/canceled','OrderController@canceled')->name('order.canceled');
	Route::get('/order/details/{id}','OrderController@orderdetails')->name('order.orderdetails');
	Route::get('order/delivered/{id}','OrderController@statusdelivered')->name('order.statusdelivered');
	Route::get('order/cancel/{id}','OrderController@statuscanceled')->name('order.statuscanceled');
	Route::get('order/return/{id}','OrderController@statusreturned')->name('order.statusreturned');

	Route::get('/stuffadd','StuffController@create')->name('stuff.create');
	Route::post('/stuffadd','StuffController@store')->name('stuff.store');

	Route::get('/stuff','StuffController@stufflist')->name('stuff.stufflist');

	Route::get('/stuff/edit','StuffController@edit')->name('stuff.edit');
	Route::post('/stuff/edit','StuffController@update')->name('stuff.update');
	Route::get('/stuff/remove/{id}','StuffController@destroy')->name('stuff.destroy');

	Route::get('/slider','LayoutController@slider')->name('layout.slider');
	Route::post('/slider','LayoutController@sliderstore')->name('layout.sliderstore');
	Route::get('/slider/{id}','LayoutController@slideredit')->name('layout.slideredit');
	Route::post('/slider/{id}','LayoutController@sliderupdate')->name('layout.sliderupdate');

	Route::get('/left','LayoutController@left')->name('layout.left');
	Route::post('/left','LayoutController@leftstore')->name('layout.left');
	Route::get('/left/{id}','LayoutController@leftedit')->name('layout.leftedit');
	Route::post('/left/{id}','LayoutController@leftupdate')->name('layout.leftupdate');

	Route::get('/right','LayoutController@right')->name('layout.right');
	Route::post('/right','LayoutController@rightstore')->name('layout.rightstore');
	Route::get('/right/{id}','LayoutController@rightedit')->name('layout.rightedit');
	Route::post('/right/{id}','LayoutController@rightupdate')->name('layout.rightupdate');

	Route::get('/social','FooterController@create')->name('footer.create');
	Route::post('/social','FooterController@store')->name('footer.store');
	Route::get('/social/edit/{id}','FooterController@edit')->name('footer.edit');
	Route::post('/social/edit/{id}','FooterController@update')->name('footer.update');

	Route::get('/quality','FooterController@qualitycreate')->name('footer.qualitycreate');
	Route::post('/quality','FooterController@qualitystore')->name('footer.qualitystore');

	Route::get('/quality/edit/{id}','FooterController@qualityedit')->name('footer.qualityedit');
	Route::post('/quality/edit/{id}','FooterController@qualityupdate')->name('footer.qualityupdate');

	Route::get('/return-policy','FooterController@returnpolicycreate')->name('footer.returnpolicycreate');
	Route::post('/return-policy','FooterController@returnpolicystore')->name('footer.returnpolicystore');

	Route::get('/return-policy/edit/{id}','FooterController@returnpolicyedit')->name('footer.returnpolicyedit');
	Route::post('/return-policy/edit/{id}','FooterController@returnpolicyupdate')->name('footer.returnpolicyupdate');

	Route::get('/shipping','FooterController@shippingcreate')->name('footer.shippingcreate');
	Route::post('/shipping','FooterController@shippingstore')->name('footer.shippingstore');

	Route::get('/shipping/edit/{id}','FooterController@shippingedit')->name('footer.shippingedit');
	Route::post('/shipping/edit/{id}','FooterController@shippingupdate')->name('footer.shippingupdate');

	Route::get('/customer-service','FooterController@customercreate')->name('footer.customercreate');
	Route::post('/customer-service','FooterController@customerstore')->name('footer.customerstore');

	Route::get('/customer-service/edit/{id}','FooterController@customeredit')->name('footer.customeredit');
	Route::post('/customer-service/edit/{id}','FooterController@customerupdate')->name('footer.customerupdate');

	Route::get('/contact','FooterController@contactcreate')->name('footer.contactcreate');
	Route::post('/contact','FooterController@contactstore')->name('footer.contactstore');

	Route::get('/contact/edit/{id}','FooterController@contactedit')->name('footer.contactedit');
	Route::post('/contact/edit/{id}','FooterController@contactupdate')->name('footer.contactupdate');

	Route::get('/policy','FooterController@policycreate')->name('footer.policycreate');
	Route::post('/policy','FooterController@policystore')->name('footer.policystore');

	Route::get('/policy/edit/{id}','FooterController@policyedit')->name('footer.policyedit');
	Route::post('/policy/edit/{id}','FooterController@policyupdate')->name('footer.policyupdate');

	Route::get('/about','FooterController@aboutcreate')->name('footer.aboutcreate');
	Route::post('/about','FooterController@aboutstore')->name('footer.aboutstore');

	Route::get('/about/edit/{id}','FooterController@aboutedit')->name('footer.aboutedit');
	Route::post('/about/edit/{id}','FooterController@aboutupdate')->name('footer.aboutupdate');

});