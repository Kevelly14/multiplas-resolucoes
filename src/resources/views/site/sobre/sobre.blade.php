@extends('layout.site')

@section('content')

<!-- SOBRE -->
@include('site.sobre.sobre-cont')

<!-- LINHA TEMPO -->
@include('site.sobre.linha-tempo')

<!-- DEPOIMENTOS -->
@include('site.home.depoimento')

<!-- TELEFONE -->
@include('site.sobre.sobre-tel')

<!-- EQUIPE -->
@include('site.home.equipe')

@endsection