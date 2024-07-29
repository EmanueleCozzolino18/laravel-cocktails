@extends('layouts.app')
@section('main')
<div class="relative">
    <img class="w-100 opa" src="https://i0.wp.com/metropolitanschoolofbartending.com/wp-content/uploads/2024/06/barman-making-alcohol-cocktail-at-bar-counter.webp?fit=800%2C534&ssl=1" alt="">
    <div class="w-50 fix">
        <h1><strong><em class="sapore text-white">Sapori che risvegliano i sensi, solo qui.</em></strong></h1>
        <a class="w-50 btn btn-outline-warning" href="{{ route('cocktails.index') }}">Scopre un nuovo modo con noi</a>
    </div>
</div>
@endsection