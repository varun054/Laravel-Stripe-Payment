<?php 


Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe','uses' => 'MoneySetupController@payWithStripe'));
 
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'MoneySetupController@postPaymentWithStripe'));

?>