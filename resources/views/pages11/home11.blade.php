@extends('layouts11.app11')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2x1 font-bold mb-4">Selamat pagi</h1>
    <p class="mb-4">Berikut adalah berita update hari ini</p>

    @include('components11.card11', [
        'imgsrc' => 'images/yohan.jpg',
        'title' => 'Yohan anak mamah',
        'desc' => 'Yohan merupakan pemuda berbakat yang menyayangi ibunya'
        ])

@endsection