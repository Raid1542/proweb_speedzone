@extends('layouts16.app16')

@section('title', 'Home')
@section('page_tiltle', 'Selamat datang di Berita Batam')

@section('content')
<h1 class="text-2x1 font-bold mb-4">Selamat Pagi</h1>
<p class="mb-4">Berikut adalah berita update di hari ini</p>

@include('components16.card', [
    'imgsrc' => 'images/gonggong.jpeg',
    'title' => 'Gonggong goreng Tepung mak Limah',
    'desc' => 'Kuliner ini adalah makanan kahas Kepulauan Riau.'

])
@enddescription