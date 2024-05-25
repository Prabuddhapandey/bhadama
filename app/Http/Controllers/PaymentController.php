<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;
use Stripe\Stripe;
use Validator;

use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
  
    private $_data=[];

    public function verifyPayment(Request $request)
    {
        $amount=$request->amount;
        $token= $request->token;
        $args = http_build_query(array(
            'token' => $requesr->token,
            'amount'  => 10000
          ));
          
          $url = "https://khalti.com/api/v2/payment/verify/";
          
          # Make the call using API.
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS,$args);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          
          $headers = ['Authorization: Key test_secret_key_000656d9c78448c1bbb604d1f8f856b9'];
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          
          // Response
          $response = curl_exec($ch);
          $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          curl_close($ch);

        
       
            toast('payment Created Successfully', 'success');
            return back()->with('success','paymennt created sucessfully');
  
         
}

public function storePayment(Request $request)
{
    // $response = $request->response;
    // store the data to database here
    return response()->noContent();
}


    public function stripePayment()
    {
       $userId = Auth::id();
       $this->_data['data'] = Booking::leftJoin('list_cars','list_cars.id','bookings.car_id')
                           ->select(
                        'price'
                           )->where('user_id',$userId)->where('status','=','pending')->pluck('price')->sum();

        $this->_data['mail'] = auth()->user()->email;
                        
        return view('Frontend.stripe_form',$this->_data);
    }

    public function postStripePayment(Request $request)
{
    $validator = Validator::make($request->all(), [
        'card_no' => 'required',
        'ccExpiryMonth' => 'required',
        'ccExpiryYear' => 'required',
        'cvvNumber' => 'required',
        'amount' => 'required',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $user= $request['email'];
    $booking = Booking::where('email', $user)->first();
    $booking->status = "paid";
    $booking->save();

    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    try {
        $token = 'tok_visa'; // Mock token for demonstration purposes
        $amount = $request->amount; // Amount in cents
        $email = $request->email;

        // Create a new Stripe customer
        $customer = \Stripe\Customer::create([
            'email' => $email,
            'source' => $token,
        ]);

        // Create a new Stripe charge
        $charge = \Stripe\Charge::create([
            'customer' => $customer->id,
            'amount' => $amount,
            'currency' => 'USD',
            'description' => 'Add in wallet',
        ]);

       

        return response()->json(['success' => 'Payment was successful']);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}
}