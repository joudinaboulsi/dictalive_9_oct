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
/*
|--------------------------------------------------------------------------
 Cms Pages
|--------------------------------------------------------------------------

|
*/

/*******  Home Page Starting */
Route::get('/homepage','HomePageController@index')->name('homeCms');
Route::post('/homepage-store','HomePageController@store')->name('homeStore');
/*******  Home Page Ending */
/** Start Seo Pages */
Route::get('/seo','SeoPageController@index')->name('seoCms');
Route::get('/seo-edit-{id}','SeoPageController@edit')->name('seoEdit');
Route::post('/seo-update-{id}','SeoPageController@update')->name('seoUpdate');
/** End Seo Pages */

/*******  Home Page Starting */
Route::get('/slider','SliderTextController@index')->name('sliderCms');

Route::post('/slider-store','SliderTextController@store')->name('sliderStore');

/*******  Home Page Ending */


/*******  About Page Starting */
Route::get('/nous_connaitre','AboutController@index')->name('nousConnaitreCms');
Route::post('/nous_connaitre-store','AboutController@store')->name('nousConnaitreStore');
/*******  About Page Ending */

/*******  Service Centre de frappe Page Starting */
Route::get('/centre-deFrappe','ServiceCentreController@index')->name('centreDeFrappeCms');
Route::post('/centre-deFrappe-store','ServiceCentreController@store')->name('centreDeFrappeStore');
/*******  Service Centre de frappe Page Ending */

/*******  Service Centre de Appels Page Starting */
Route::get('/centre-d-appels','CentreAppelsController@index')->name('centreDappelsCms');
Route::post('/centre-d-appels-store','CentreAppelsController@store')->name('centreDappelsStore');
/*******  Service Centre de Appels Page Ending */


/*******  Service E-va Page Starting */
Route::get('/eva','EvaController@index')->name('evaCms');
Route::post('/eva-store','EvaController@store')->name('evaStore');
/*******  Service E-va Page Ending */

/*******  Service Centre E-reputation Page Starting */
Route::get('/reputation','ReputationController@index')->name('reputationsCms');
Route::post('/reputationstore','ReputationController@store')->name('reputationStore');
/*******  Service Centre E-reputation Page Ending */

/*******  Service Centre Dictasupport Page Starting */
Route::get('/dictaSupport','DictasupportController@index')->name('dictasupportCms');
Route::post('/dictaSupport-store','DictasupportController@store')->name('dictasupportStore');
/*******  Service Centre Dictasupport Page Ending */






/*******  Blog Page Starting */
Route::get('/blog-page','BlogController@index')->name('blogCms');
Route::post('/blog-store','BlogController@store')->name('blogStore');
/*******  Blog Page Ending */




/*******  Blog Deatil Page Starting */
Route::get('/blog-detail','BlogDetailController@index')->name('blogDetailCms');
Route::get('/blog-detail-create','BlogDetailController@create')->name('blogCreate');
Route::post('/blog-detail-store','BlogDetailController@store')->name('blogDetailStore');
Route::get('/blog-detail-edit-{id}','BlogDetailController@edit')->name('blogDetailEdit');
Route::post('/blog-detail-update-{i}','BlogDetailController@update')->name('blogDetailUpdate');
Route::delete('/blog-detail-delete-{i}','BlogDetailController@delete')->name('blogDetailDelete');

/*******  Blog Deatil Page Ending */




/*******  Footer  Pages Starting */
Route::get('/politique','FooterPageController@politique')->name('politiqueCms');
Route::post('/politique-store','FooterPageController@save_politiques')->name('politiqueStore');
/*******  Footer Pages Ending */




/*******  Footer  Pages Starting */
Route::get('/cookies','FooterPageController@cookies')->name('cookiesCms');
Route::post('/cookies-store','FooterPageController@save_cookies')->name('cookiesStore');
/*******  Footer Pages Ending */



/*******  Footer  Pages Starting */
Route::get('/mentions','FooterPageController@mentions_legales')->name('mentionslegalesCms');
Route::post('/mentions-store','FooterPageController@save_mentions_legales')->name('mentionsStore');
/*******  Footer Pages Ending */


/*******  Faq section Starting */
Route::get('/faq','FaqController@index')->name('faqCms');
Route::get('/faq-create','FaqController@create')->name('faqCreate');
Route::post('/faq-store','FaqController@store')->name('faqStore');
Route::get('/faq-edit-{id}','FaqController@edit')->name('faqEdit');
Route::post('/faq-update-{id}','FaqController@update')->name('faqUpdate');
Route::delete('/faq-delete-{id}','FaqController@delete')->name('faqDelete');

/*******  Faq section Ending */

/*******  Faq Page Starting */
Route::get('/faq-content','TitlePageController@index')->name('faqContentCms');
Route::post('/faq-content-store','TitlePageController@store')->name('faqContentStore');
/*******  Faq Page Starting */

/*******  Related Page Starting */
Route::get('/related-content','TitlePageController@related_blog')->name('relatedContentCms');
Route::post('/related-content-store','TitlePageController@store_blog')->name('relatedContentStore');
/*******  Related Page Starting */





/*******  Contact Page Starting */
Route::get('/contact-cms','ContactController@index')->name('contactCms');
Route::post('/contact-store','ContactController@store')->name('contactStore');
/*******  Contact Page Ending */

/*******  Option VAlues Form Starting */
Route::get('/options','OptionFormController@index')->name('optionContactCms');
Route::get('/option-create','OptionFormController@create')->name('optionContactCreate');
Route::post('/option-store','OptionFormController@store')->name('optionContactStore');
Route::get('/option-edit-{id}','OptionFormController@edit')->name('optionContactEdit');
Route::post('/option-update-{id}','OptionFormController@update')->name('optionContactUpdate');
Route::delete('/option-delete-{id}','OptionFormController@delete')->name('optionContactDelete');
/*******  Option VAlues Form Ending */









/*******  settings Page Starting */
Route::get('/settings','SettingsController@index')->name('settingsCms');
Route::post('/settings-store','SettingsController@store')->name('settingsStore');
/*******  settings Page Ending */





Route::get('/home', 'SeoPageController@index')->name('home');

Route::get('/', 'PageController@home')->name('home_path');
Route::get('/nous-connaitre', 'PageController@about')->name('about');
Route::get('/centre-de-frappe', 'PageController@centredefrappe')->name('centredefrappe');
Route::get('/centre-dappels', 'PageController@centredappels')->name('centredappels');
Route::get('/e-va', 'PageController@eva')->name('e-va');
Route::get('/e-reputation', 'PageController@reputation')->name('reputation');
Route::get('/dictasupport', 'PageController@dictasupport')->name('dictasupport');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/blog-details-{id}', 'PageController@blogdetails')->name('blogDetail_path');
Route::get('/footer-pages', 'PageController@footerpages')->name('footerpages');

Route::post('/contact', 'PageController@getContactForm')->name('contact_path');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
