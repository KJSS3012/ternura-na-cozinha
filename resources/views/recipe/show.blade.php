@extends('layout.default')

@section('title', "Cadastre sua receita")

@section('content')
<main id="main">
    <section class="sample-page">
        <div class="container" data-aos="fade-up">
            <section id="book-a-table" class="book-a-table">
                <div class="container" data-aos="fade-up">
                    <div class="section-header">
                        <h2>Monte a sua receita</h2>
                        <p>Crie a sua receita dos <span>Sonhos</span></p>
                    </div>

                    <div class="row g-0">

                        <div class="col-lg-4 reservation-img" style="background-image: url({{asset('storage'.'/'.$recipe->image_path)}});" data-aos="zoom-out" data-aos-delay="200"></div>

                        <div class="col d-flex align-items-center reservation-form-bg">
                            <form action="{{ route("recipe.store") }}" method="POST" enctype="multipart/form-data"role="form" class="php-email-form w-100" data-aos="fade-up" data-aos-delay="100"accept=".png, .jpg, .jpeg">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <input type="text" name="title" class="form-control" id="name"
                                            placeholder="Título" data-rule="minlen:4"
                                            data-msg="Please enter at least 4 chars" value="{{ $recipe->title }}" required>
                                        <div class="validate">
                                            @error('title')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="ingredients" rows="5"
                                        placeholder="Ingredientes" required>{{ $recipe->ingredients }}</textarea>
                                    <div class="validate">
                                        @error('ingredients')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="preparation" rows="5"
                                        placeholder="Preparação" required>{{ $recipe->preparation }}</textarea>
                                    <div class="validate">
                                        @error('preparation')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mt-3 mb-3">
                                    <div class="col">
                                        <select class="form-select col" aria-label="Default select example" name="categories_id" required>
                                            @foreach($categories as $category)
                                                @if($category->id == $recipe->categories_id)
                                                    <option value="{{$recipe->categories_id}}" selected>{{$category->category}}</option>
                                                @else
                                                    <option value="{{$category->id}}">{{$category->category}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-select col" aria-label="Default select example" name="themes_id">
                                            @foreach($themes as $theme)
                                                @if($theme->id == $recipe->themes_id)
                                                    <option value="{{$theme->id}}" selected>{{$theme->theme}}</option>
                                                @else
                                                    <option value="{{$theme->id}}">{{$theme->theme}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input class="form-control" type="file" id="formFile" name="image_path" required>
                                </div>

                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Sua receita foi cadastrada</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Cadastrar</button>
                                    <button type="btn btn-danger">Habilitar Edição</button>
                                </div>
                            </form>
                        </div><!-- End Reservation Form -->

                    </div>
                </div>
            </section><!-- End Book A Table Section -->
        </div>
    </section>
</main>
@endsection