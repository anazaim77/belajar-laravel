@extends('layouts/MainLayout')

@section('title', 'home')

@section('container')
    <h1>Home, {{ $name }}</h1>
    @switch($name)
    @case("fajar")
        <h3>anda adalah fajar</h3>
        @break
    @default
        <h3>anda bukan fajar</h3>
            
    @endswitch

    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
        </tr>
    @foreach ($buahan as $buah)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $buah }}</td>
            </tr>
    @endforeach
    </table>
@endsection
    