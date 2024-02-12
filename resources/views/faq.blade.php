<!-- resources/views/faq.blade.php -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Foire aux questions (FAQ)</h1>
        <hr>

        @foreach($faqs as $faq)
            <div class="mb-4">
                <h4>{{ $faq['question'] }}</h4>
                <p>{{ $faq['reponse'] }}</p>
            </div>
        @endforeach
    </div>
@endsection
