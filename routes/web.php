<?php

Route::get('renewals/{associateid}', "renewals\RenewalsController@index");
Route::post('renewals/charge', function (\Illuminate\Http\Request $request) {
   
    $_token = $request->input('_token');
    $billingContact = $request->input('billingContact');
    $street = $request->input('street');
    $city = $request->input('city');
    $state = $request->input('state');
    $zipCode = $request->input('zipCode');
    $cardNumber = Request::input('cardNumber');
    $securityCode = $request->input('securityCode');
    $expireMonth = $request->input('expireMonth');
    $expireYear = $request->input('expireYear');

    $token    = $request->input('token');
    $total    = 79;
    $key      = config('worldpay.sandbox.client');
    $worldPay = new Alvee\WorldPay\lib\Worldpay($key);
    
    $billing_address = array(
        'address1'    => "$street",
        'address2'    => '',
        'address3'    => '',
        'postalCode'  => (int)($zipCode),
        'city'        => $city,
        'state'       => $state,
        'countryCode' => 'US',
    );
    
    try {
        $response = $worldPay->createOrder(array(
            'token'             => $token,
            'amount'            => (int)($total . "00"),
            'currencyCode'      => 'USD',
            'name'              => "$billingContact",
            'billingAddress'    => $billing_address,
            'orderDescription'  => 'Renewal',
            'customerOrderCode' => '01100001'
        ));
        if ($response['paymentStatus'] === 'SUCCESS') {
            $worldpayOrderCode = $response['orderCode'];

            // Start sending a mail to confirm the payment of renewal
            $data = array(
                'name' => "$billingContact",
            );
            Mail::send('renewals.emails.email', $data, function ($message) {
                $message->from('fmelchor@nikkenlatam.com', 'My Nikken');
                $message->to('franciscoshark385@gmail.com')->subject('My Nikken membership renewal');
            });
            // End sending a mail to confirm the payment of renewal

            return \Response::json($response);
        } else {
            // The card has been declined
            throw new \Alvee\WorldPay\lib\WorldpayException(print_r($response, true));
        }
    } catch (Alvee\WorldPay\lib\WorldpayException $e) {
        echo 'Error code: ' . $e->getCustomCode() . '
                HTTP status code:' . $e->getHttpStatusCode() . '
                Error description: ' . $e->getDescription() . '
                Error message: ' . $e->getMessage();

        // The card has been declined
    } catch (\Exception $e) {
        // The card has been declined
        echo 'Error message: ' . $e->getMessage();
    }
});