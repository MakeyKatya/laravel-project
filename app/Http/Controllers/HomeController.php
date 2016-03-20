<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Message;

class HomeController extends Controller
{
    public function index (){
        /*$data = [
            'title'=>'Гостевая книга на Ларавел',
            'pagetitle'=>'<i style="color:orange">Редaктирование</i>'
        ];*/
        $data = ['title'=>'Гостевая книга',
            'messages' => Message::latest()->paginate(1),
            'count' => Message::count()
            /*'users'=>[
                ['name'=>'Vasya'],
                ['name'=>'Igor'],
                ['name'=>'Dima'],
            ]*/
        ];
        /*$messages = Message::all();
        dd($messages);*/
        return view('pages.messages.index',$data);
            //->with($data);
    }
    public function edit ($id){

        $data = [
            'title'=>'Редоктирование: Гостевая книга',
            'pagetitle'=>'Редоктирование: Гостевая книга'
        ];
        return view('pages.messages.edit',$data);
    }
}
