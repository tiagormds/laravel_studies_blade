@extends('layout.main_layout')
@section('content')
{{--    <div class="text-center">--}}
{{--        @foreach($libguasPessoa as $pessoa => $linguas)--}}

{{--            <x-card-pessoa :nome-pessoa="$pessoa" :linguas-pessoa="$linguas" />--}}
{{--            <x-card-pessoa :$pessoa :$linguas />--}}

{{--        @endforeach--}}
{{--    </div>--}}

    {{-- componentes e slots  --}}

{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--            <h4 class="text-info">Como funciona um Slot</h4>--}}
{{--            <x-other-card>--}}
{{--                <h1 class="text-danger">Este é o slot</h1>--}}
{{--            </x-other-card>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--<x-multi-slot xmlns:x-slot="http://www.w3.org/1999/xlink">--}}
{{--    <x-slot:title>Este é o titulo</x-slot>--}}
{{--    <x-slot:content>Este é o conteúdo</x-slot>--}}
{{--    <x-slot:footer>--}}
{{--        <ul>--}}
{{--            <li>Item1</li>--}}
{{--            <li>Item2</li>--}}
{{--            <li>Item3</li>--}}
{{--        </ul>--}}
{{--    </x-slot>--}}
{{--</x-multi-slot>--}}


<h4>Componente Anônimo</h4>
    <x-alert-card>Primeira mensagem</x-alert-card>
    <x-alert-card>Segunda mensagem</x-alert-card>
    <x-alert-card>Terceira mensagem</x-alert-card>
@endsection
