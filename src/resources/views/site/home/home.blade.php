@extends('layout.site')

@section('content')

<!-- BANNER -->
@include('site.home.banner')

<!-- SOBRE -->
@include('site.home.sobre')

<!-- SERVIÇOS -->
@include('site.home.servicos')

<!-- CASOS -->
@include('site.home.casos')

<!-- DEPOIMENTOS -->
@include('site.home.depoimento')

<!-- TEL - FAQ -->
@include('site.home.tel-faq')

<!-- EQUIPE -->
@include('site.home.equipe')

<!-- CONTATO -->

@include('site.home.contato')


@endsection