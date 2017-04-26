{{-- /resources/views/books/new.blade.php --}}
@extends('layouts.master')

@section('title')
    Edit book: {{ $book->title }}
@endsection

@section('content')
    <h1>Edit</h1>
    <h2>{{ $book->title }}</h2>

    <form method='POST' action='/books/edit'>
        {{ csrf_field() }}

        <p>* Required fields</p>

        <input type='hidden' name='id' value='{{$book->id}}'>

        <label for='title'>* Title</label>
        <input type='text' name='title' id='title' value='{{ old('title', $book->title) }}'>

        <label for='published'>* Published Year</label>
        <input type='text' name='published' id='published' value='{{ old('published', $book->published) }}'>

        <label for='cover'>* URL to a cover image</label>
        <input type='text' name='cover' id='cover' value='{{ old('cover', $book->cover) }}'>

        <label for='purchase_link'>* Published Year</label>
        <input type='text' name='purchase_link' id='purchase_link' value='{{ old('purchase_link', $book->purchase_link) }}'>

        <br><input class='btn btn-primary' type='submit' value='Save changes'><br><br>

    </form>


    @if(count($errors) > 0)
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
