@extends('layouts.mytemplate')

@section('title', 'Contact page')
@section('css')

<link href="{{ asset('css/contact_style.css') }}" rel="stylesheet">
@endsection
    

@section('content')

    <form action="">
        <input type="text" placeholder="enter your mail"><br>
        <input type="text" placeholder="enter your message" ><br>
        <input type="submit" value="Send" >
    </form>
@endsection