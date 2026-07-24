@extends('layout.site')

@section('content')

<!-- SOBRE -->
@include('site.sobre.sobre')

<!-- LINHA TEMPO -->
@include('site.sobre.linha-tempo')

<!-- DEPOIMENTOS -->
@include('site.sobre.depoimento')

<!-- TELEFONE -->
@include('site.sobre.tel-sobre')

<!-- EQUIPE -->
@include('site.sobre.equipe')

@endsection