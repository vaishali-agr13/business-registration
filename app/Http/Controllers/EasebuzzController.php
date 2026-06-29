<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EasebuzzController extends Controller
{
    // 1. Payment Initiate Karne Ka Method
    public function initiatePayment(Request $request)
    {
        // Validation (Aap isko apne mutabik change kar sakte hain)
        $txnid = 'TXN' . time() . rand(100, 999); // Unique Transaction ID
        $amount = number_format(10.00, 2, '.', ''); // Example Amount (Must be 2 decimal places string)
        $firstname = 'John Doe';
        $email = 'john@example.com';
        $phone = '9876543210';
        $productinfo = 'Laptop Purchase';
        
        // Success aur Failure URLs jahan payment ke baad redirect hoga
        $surl = route('easebuzz.success');
        $furl = route('easebuzz.failure');

        $key = config('easebuzz.merchant_key');
        $salt = config('easebuzz.merchant_salt');

        // Hash Sequence Formula: key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5||||||salt
        $hashString = $key . '|' . $txnid . '|' . $amount . '|' . $productinfo . '|' . $firstname . '|' . $email . '|||||||||||' . $salt;
        $hash = strtolower(hash('sha512', $hashString));

        // Easebuzz ko bheje jaane wala data
        $postData = [
            'key' => $key,
            'txnid' => $txnid,
            'amount' => $amount,
            'firstname' => $firstname,
            'email' => $email,
            'phone' => $phone,
            'productinfo' => $productinfo,
            'surl' => $surl,
            'furl' => $furl,
            'hash' => $hash,
            'udf1' => '', 'udf2' => '', 'udf3' => '', 'udf4' => '', 'udf5' => ''
        ];

        // Easebuzz API ko call karna (Access URL lene ke liye)
        $baseUrl = rtrim(config('easebuzz.base_url'), '/');
        $response = Http::asForm()->post($baseUrl . '/payment/initiateLink', $postData);

        if ($response->successful()) {
          
            $result = $response->json();
            
            if (isset($result['status']) && $result['status'] == 1) {
                // Agar status 1 hai toh access key mil gayi hai, redirect karein payment page par
                $accessKey = $result['data'];
                $paymentUrl = config('easebuzz.base_url') . '/pay/' . $accessKey;
                
                return redirect()->away($paymentUrl);
            } else {
                return back()->with('error', 'Easebuzz Initiation Failed: ' . ($result['data'] ?? 'Unknown Error'));
            }
        }

        return back()->with('error', 'Server error, please try again.');
    }

    // 2. Success Response Handle Karna
    public function paymentSuccess(Request $request)
    {
        // Easebuzz POST request me data bhejta hai
        $response_data = $request->all();
        return response()->json([
        'message' => 'Laravel received success response successfully!',
        'data' => $response_data
    ]);
        Log::info('Easebuzz Success Response: ', $response_data);

        // Verification (Aapko reverse hash check karna chahiye security ke liye)
        // Reverse Hash Formula: salt|status||||||udf5|udf4|udf3|udf2|udf1|email|firstname|productinfo|amount|txnid|key
        
        if ($response_data['status'] === 'success') {
            // Payment successful hai! Apne database me order status 'Paid' update karein.
            return view('payment-status', ['status' => 'Success', 'data' => $response_data]);
        }

        return redirect()->route('easebuzz.failure');
    }

    // 3. Failure Response Handle Karna
    public function paymentFailure(Request $request)
    {
        $response_data = $request->all();

        return response()->json([
        'message' => 'Laravel received failure response successfully!',
        'data' => $response_data
    ]);
        Log::info('Easebuzz Failure Response: ', $response_data);

        return view('payment-status', ['status' => 'Failed', 'data' => $response_data]);
    }
}