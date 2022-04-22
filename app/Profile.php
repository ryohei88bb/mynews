<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
        );
}


/*
課題1
データベースはテーブルで情報の整理を行うことができる。
課題２
どんなデータが必要なのかを事前に確認し、整理しやすいようにする。
課題3
データの情報に不備がないかどうか検証をしてくれる仕組み
*/