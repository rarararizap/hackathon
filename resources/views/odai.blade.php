@extends('layouts.app')

@section('content')
    <ul>
    @foreach ($odais as $odai)
    
        <li>
            <img src="{{ $odai->filename }}" alt="odais">  
        </li>
    @endforeach
    </ul>

@endsection