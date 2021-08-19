@extends('layouts.mytemplate')

@section('title', 'Create a new flower')

@section('content')

    <h3>Add a new flower</h3>

    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        
        <input type="text" name="name" placeholder="Name">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror<br>

        <input type="number" name="price" placeholder="Price"><br>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror<br>

        <input type="submit" value="Add flower">
    </form>


@endsection