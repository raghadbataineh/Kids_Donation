<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Omnipay\Omnipay;
use App\Models\Payment;
use App\Models\User;
use App\Models\Campaign;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class PaymentController extends Controller
{
    private $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request)
    {
        $totalAmount = 0;
        $donatedCampaignsnames = "";

        if (session('campaignData')) {
            $campaignData = session('campaignData');
            $campaignArray = array();
            foreach ($campaignData as $campaignID) {
                $camp = Campaign::find($campaignID);

                if ($camp && $request->input($campaignID) != 0) {
                    $campaignArray[$campaignID] = [
                        'id' => $campaignID,
                        'title' => $camp->title,
                        'payedAmount' => $request->input($campaignID) // Assuming $request->$campaignID is meant to retrieve a form input value
                    ];
                    $totalAmount+=$request->input($campaignID);
                    $donatedCampaignsnames .= $camp->title . ", ";
                }
            }
            session(['campaignDataCollected' => $campaignArray]);
            session()->forget('campaignData');
        }

        session(['UserId' => $request->UserId]);
        session(['type' => $request->type]);
        if($donatedCampaignsnames) {
            session(['kit' => $donatedCampaignsnames]);
        }
        else {
            session(['kit' => $request->kit]);
        }
        session(['UserPhone' => $request->phone]);
        session(['UserAdress' => $request->adress]);
        session(['UserMessage' => $request->message]);
        session(['campaign_id' => $request->campaign_id]);

        if($totalAmount) {
            session(['amount' => $totalAmount]);
        }
        else {
            session(['amount' => $request->amount]);
        }

        try {

            if($totalAmount) {
                $response = $this->gateway->purchase(
                    array(
                        'amount' => $totalAmount,
                        'currency' => env('PAYPAL_CURRENCY'),
                        'returnUrl' => url('success'),
                        'cancelUrl' => url('error')
                    )
                )->send();
            }

            else {
                $response = $this->gateway->purchase(
                    array(
                        'amount' => $request->amount,
                        'currency' => env('PAYPAL_CURRENCY'),
                        'returnUrl' => url('success'),
                        'cancelUrl' => url('error')
                    )
                )->send();
            }

            if ($response->isRedirect()) {
                $response->redirect();
            } else {
                session()->forget('UserId');
                session()->forget('kit');
                session()->forget('UserPhone');
                session()->forget('UserAdress');
                session()->forget('UserMessage');
                session()->forget('type');
                session()->forget('amount');
                session()->forget('campaign_id');

                // return $response->getMessage();
                return redirect()->route('go-donate', ['kit' => session('kitID')])->with('error', $response->getMessage());

            }

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function success(request $request)
    {

        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(
                array(
                    'payer_id' => $request->input('PayerID'),
                    'transactionReference' => $request->input('paymentId'),
                )
            );

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();

                $payment = new Payment();

                $payment->user_id = session('UserId');
                $payment->donater_kit = session('kit');
                $payment->donater_phone = session('UserPhone');
                $payment->donater_address = session('UserAdress');
                $payment->donater_message = session('UserMessage');
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRENCY');

                $payment->save();

                if (session('type') == 'campaign') {
                    $campaignId = session('campaign_id'); // Assuming you have a session variable for campaign_id
                    $amountToAdd = session('amount'); // Assuming you have a session variable for amount

                    // Find the campaign by campaign_id
                    $campaign = Campaign::find($campaignId);

                    if ($campaign) {
                        // Update the raised_money column
                        $campaign->raised_money += $amountToAdd;
                        $campaign->save();
                    }

                    if(session('campaignDataCollected')) {
                        $campaignsCollected = session('campaignDataCollected');
                        foreach($campaignsCollected as $campaignData) {
                            $campaign = Campaign::find($campaignData['id']);
                            $campaign->raised_money += $campaignData['payedAmount'];
                            $campaign->save();
                        }
                        session()->forget('campaignDataCollected');
                    }

                }

                // Send an email to the donater to thank him
                $details = [
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'address' => $request->input('address'),
                    'notes' => $request->input('note'),
                ];

                $user_id = session('UserId');
                $user = User::find($user_id);
                if ($user) {
                    $emailContent = "Thanks for your donation"; // Customize the content for payment
                    Mail::to($user->email)->send(new ContactMail($details, $emailContent));
                }

                session()->forget('UserId');
                session()->forget('kit');
                session()->forget('UserPhone');
                session()->forget('UserAdress');
                session()->forget('UserMessage');
                session()->forget('type');
                session()->forget('amount');
                session()->forget('campaign_id');

                // return redirect()->route('go-donate', ['kit' => session('kitID')])->with('success', 'Payment is Successful.');
                return redirect()->route('go-home')->with('success', 'Payment is Successful, thank you ❤️');

            } else {
                // return $response->getMessage();
                // return redirect()->route('go-donate')->with('error', $response->getMessage());
                return redirect()->route('go-home')->with('error', $response->getMessage());
            }
        } else {
            // return 'Payment is declined !!';
            return redirect()->route('go-home')->with('error', 'Payment is declined !!');

        }
    }

    public function error()
    {
        // return 'User declined the payment !!';
        return redirect()->route('go-home')->with('error', 'User declined the payment !!');
    }


    public function index()
    {
        $paymentsWithUsers = Payment::with('user')->get();


        return view('dashboard/payments/index', compact('paymentsWithUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {

    }


    public function edit($id)
    {
        // $kits = Kit::findOrFail($id);

        // return view('dashboard.kits.edit', compact('kits'));
    }


    public function update()
    {


    }

    public function destroy($id)
    {

        // Kit::destroy($id);
        // return back()->with('success', ' deleted successfully.');
    }
}
