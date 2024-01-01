@extends('layout.default')

@section('title', "Ternura Na Cozinha")

@section('content')

<div class="container">


    <h2 class="mt-5 mb-4" style="margin-top: 10% !important;">Resultados da Pesquisa de "{{$search}}"</h2>

    @forelse($recipes as $recipe)
        <div class="card mb-3">
            <div class="card-body">
                <a href="{{route("recipe.show",["recipe"=>$recipe->id])}}"><h3 class="card-title">{{ $recipe->title }}</h3></a>
                <p class="card-text">{{ $recipe->ingredients }}</p>
                <!-- Adicione outros campos da coleção, se necessário -->
            </div>
        </div>
    @empty
        <p>Nenhum resultado encontrado.</p>
    @endforelse
</div>

@endsection

