<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('incomplete_user')->except(['edit', 'update']);
    }
    
    public function index()
    {
        return view('profile.index', [
            'user' => auth()->user()->load(['city', 'country', 'state', 'image', 'card'])
        ]);
    }
    
    public function edit()
    {
        $user = auth()->user()->load(['city', 'country', 'state', 'image',]);
        $state = State::all();
        $country = Country::where('state_id', $user->state->id ?? '')->get();
        $city = City::where('country_id', $user->country->id ?? '')->get();

        // dd($user->cards);
        $stripe = Card::where([
            ['card_title' , 'Stripe'],
            ['user_id' , auth()->id()],
        ])->first();

        $paypal = Card::where([
            ['card_title' , 'Paypal'],
            ['user_id' , auth()->id()],
        ])->first();

        return view('profile.edit', [
            'user' => $user,
            'city' => $city,
            'country' => $country,
            'state' => $state,
            'stripe' => $stripe,
            'paypal' => $paypal,
        ]);
    }

    public function update()
    {
        // $data = Arr::whereNotNull(request()->all());
        
        $validator = Validator::make(request()->all(), [
            'firstname' => 'sometimes|required',
            'lastname' => 'sometimes|required',
            'phone' => 'sometimes|required|min:10',
            'house' => 'sometimes|required',
            'address' => 'sometimes|required',
            'postal' => 'sometimes|required',
            'city_id' => 'sometimes|required|exists:cities,id',
            'country_id' => 'sometimes|required|exists:countries,id',
            'stripe_number' => 'sometimes|required|numeric',
            'stripe_name' => 'sometimes|required',
            'stripe_expiration' => 'sometimes|required',
            'stripe_cvc' => 'sometimes|required',
            'stripe_default' => 'sometimes|required|boolean',
            'paypal_number' => 'sometimes|required|numeric',
            'paypal_name' => 'sometimes|required',
            'paypal_expiration' => 'sometimes|required',
            'paypal_cvc' => 'sometimes|required',
            'paypal_default' => 'sometimes|required|boolean',
        ]);
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $res = $validator->validated();

        $user = User::find(auth()->id());

        if(Arr::exists($res, 'firstname')) {
            $user->firstname = $res['firstname'];
        }
        if(Arr::exists($res, 'lastname')) {
            $user->lastname = $res['lastname'];
        }
        if(Arr::exists($res, 'phone')) {
            $user->phone = $res['phone'];
        }
        if(Arr::exists($res, 'house')) {
            $user->house = $res['house'];
        }
        if(Arr::exists($res, 'address')) {
            $user->address = $res['address'];
        }
        if(Arr::exists($res, 'postal')) {
            $user->postal = $res['postal'];
        }
        if(Arr::exists($res, 'city_id')) {
            $user->city_id = $res['city_id'];
        }
        if(Arr::exists($res, 'country_id')) {
            $user->country_id = $res['country_id'];
        }
        if(Arr::exists($res, 'state_id')) {
            $user->state_id = $res['state_id'];
        }

        
        if(Arr::exists($res, 'stripe_number')) {

            $old_card = Card::where([
                ['user_id', auth()->id()],
                ['card_title', 'Stripe'],
            ])->first();

            if($old_card == null) {
                
                $card = new Card();
                $card->user_id = auth()->id();
                $card->card_title = 'Stripe';
                $card->card_number = $res['stripe_number'];
                $card->card_name = $res['stripe_name'];
                $card->card_expiration = $res['stripe_expiration'];
                $card->card_cvc = $res['stripe_cvc'];
                $card->save();

            } else {

                $old_card->card_number = $res['stripe_number'];
                $old_card->card_name = $res['stripe_name'];
                $old_card->card_expiration = $res['stripe_expiration'];
                $old_card->card_cvc = $res['stripe_cvc'];
                $old_card->save();

            }

            if(Arr::exists($res, 'stripe_default')) {
                if($res['stripe_default']) {
                    $user->card_id = $card->id ?? $old_card->id;
                }
            }
        }


        if(Arr::exists($res, 'paypal_number')) {

            $old_card = Card::where([
                ['user_id', auth()->id()],
                ['card_title', 'Paypal'],
            ])->first();
            
            if($old_card == null) {
            
                $card = new Card();
                $card->user_id = auth()->id();
                $card->card_title = 'Paypal';
                $card->card_number = $res['paypal_number'];
                $card->card_name = $res['paypal_name'];
                $card->card_expiration = $res['paypal_expiration'];
                $card->card_cvc = $res['paypal_cvc'];
                $card->save();
            } else {

                $old_card->card_number = $res['paypal_number'];
                $old_card->card_name = $res['paypal_name'];
                $old_card->card_expiration = $res['paypal_expiration'];
                $old_card->card_cvc = $res['paypal_cvc'];
                $old_card->save();

            }

            if(Arr::exists($res, 'paypal_default')) {

                if($res['paypal_default']) {
                    $user->card_id = $card->id ?? $old_card->id;
                }
            }
        }

        $user->save();
                
        return to_route('profilePage');
    }
}
