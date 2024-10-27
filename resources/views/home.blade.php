@extends('layout.main_layout')
@section('content')
    <div class="text-center">
        @foreach($libguasPessoa as $pessoa => $linguas)

{{--            <x-card-pessoa :nome-pessoa="$pessoa" :linguas-pessoa="$linguas" />--}}
            <x-card-pessoa :$pessoa :$linguas />

        @endforeach
    </div>
@endsection
