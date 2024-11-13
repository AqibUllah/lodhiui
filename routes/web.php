<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('notifyMe',function (\Illuminate\Http\Request $request) {
    if(sizeof(\App\Models\User::where('email','=',$request->email)->get()) > 0){
        return redirect()->route('home')->with(['warning' => 'You already subscribed']);
    }
    \App\Models\User::create([
        'email' => $request->email,
        'name' => \Illuminate\Support\Str::substr($request->email,'0','10'),
        'password'  => 'password'
    ]);
    return redirect()->route('home')->with(['success' => 'Thank you for subscribing.']);
})->name('notify.me');
