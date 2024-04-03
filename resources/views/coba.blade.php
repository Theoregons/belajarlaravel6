@extends('template')
@section('main')
    <h1>Ini halaman coba </h1>
    {{-- <?php for ($i=1; $i <= 5 ; $i++) { ?>
        <h1>Ini perulangan</h1>
    <?php } ?> --}}

    @for ($i = 1; $i <= 10; $i++)
        @if ($i % 2)
            <h1>Ini Menggunakan Blade </h1>
        @endif
    @endfor

    @php
        $no = 5;
        echo $no;
    @endphp

    <img src="{{ asset('img/img.jpg') }}" width="25%" alt="">
@endsection
