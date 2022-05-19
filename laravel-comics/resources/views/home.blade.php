@extends('layout.layout')

    @include('partials.header')

    <main>
        <div class="container">
            <div class="current">CURRENT SERIES</div>
            @foreach($lista as $index => $comic)
            @include("partials.card", ['comic'=>$comic, 'index'=>$index])
            @endforeach
        </div>
        <button>LOAD MORE</button>
    </main>

    @include('partials.topFooter')

    @include('partials.footer')
