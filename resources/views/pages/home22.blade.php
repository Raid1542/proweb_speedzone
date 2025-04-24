@extends('layouts.app22')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card22', [
        'imgsrc' => 'images/Kota_Manchester.jpg',
        'title' => 'Kota Manchester',
        'description' => 'Kota Mahester merupakan salah satu kota di Inggris yang sangat saku dengan sepak bola.'
    ])
@endsection        