<?php

namespace App\Http\Controllers;

use App\Models\Model\Cart;
use Illuminate\Http\Request;
use App\Models\Model\Restaurant;
use App\Http\Resources\Cart\CartResource;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Exception;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Restaurant $restaurant)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant, Cart $cart)
    {
        $this->CartUserCheck($cart);
        return new CartResource($cart);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant, Cart $cart)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Model\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant, Cart $cart)
    {
        // $this->CartUserCheck($cart);
        // if ($cart->total_price==0) {
        //     $cart->delete();
        //     return response(null,Response::HTTP_NO_CONTENT);
        // }
        
    }

    public function CartUserCheck($cart) {
 
        if (Auth::id() !== $cart->user_id) {
            
            throw new Exception("Not Cart Owner!",1);
        }
    }

}
