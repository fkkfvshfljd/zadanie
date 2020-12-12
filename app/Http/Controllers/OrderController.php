<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    public function submit(OrderRequest $req){
        $order = new Order();
        $order->name = $req->input('name');
        $order->phone = $req->input('phone');
        $order->email = $req->input('email');
        $order->subject = $req->input('subject');

        $order->save();

        return redirect()->route('home')->with('success', 'Заявка было отпрвлено!');

    }

    public function allData(){
        return view('orders', ['data'=> Order::all()]);
    }
}
