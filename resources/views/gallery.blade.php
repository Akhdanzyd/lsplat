@extends('layouts/bootstrap')

@section('title', 'APPM - Aplikasi Pelayanan Pengaduan Masyarakat')

@section('content')
<div class="d-flex flex-column justify-content-center align-items-center">
    @foreach ($aspirasi as $Pengaduan )    
    <div class="row row-cols-auto">
        <div class="col">
            <img src="{{ asset('storage/'.$Pengaduan->foto)}}" alt="image" style="max-width: 200px">
        </div>
        <div class="col">
            <img src="{{ asset('images/pegasia.jpg')}}" alt="image" style="max-width: 200px">
        </div>
        <div class="col">
            <img src="{{ asset('images/pegasia.jpg')}}" alt="image" style="max-width: 200px">
        </div>
    </div>
    @endforeach
</div>
@endsection