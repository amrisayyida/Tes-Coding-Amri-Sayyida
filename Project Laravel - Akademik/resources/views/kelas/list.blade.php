@extends('layout.layout')

@section('content')


    @include('kelas.create_tipekelas')
    
    <hr>
    
    @include('kelas.create_kelas')
    
    {{-- <hr>
    
    @include('kelas.create_siswakelas') --}}

@endsection