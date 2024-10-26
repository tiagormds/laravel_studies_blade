@extends('layout.main_layout')
@section('content')
    <h3>Este texto faz parte da view</h3>


    {{-- redenrizar o component --}}
    <x-my-component message="Mensagem passada para dentro do componente" />

    {{-- redenrizar component que existe dentro de subpasta --}}
    <x-admin.admin-card :name="$myName" teste="Olá mundo!" />

    <h3>Este texto faz parte da view</h3>

    <p>{{ $myName }}</span></p>
@endsection
