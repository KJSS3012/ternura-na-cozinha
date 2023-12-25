@extends('layout.default')

@section('title', "Ternura Na Cozinha")

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row justify-content-between gy-5">
      <div
        class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
        <h2 data-aos="fade-up">Guarde aqui as suas<br>receitas favoritas</h2>
        <p data-aos="fade-up" data-aos-delay="100">Crie memórias culinárias com nossas receitas autênticas. Desfrute da
          riqueza de sabores e aprenda técnicas que elevam suas habilidades na cozinha.</p>
        <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
          <a href="{{route("recipe.create")}}" class="btn-book-a-table">Criar Receita</a>
          <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
            class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch
              Video</span></a>
        </div>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
        <img src="{{asset("assets/img/hero-img.png")}}" class="img-fluid" alt="" data-aos="zoom-out"
          data-aos-delay="300">
      </div>
    </div>
  </div>
</section><!-- End Hero Section -->

<main id="main">

  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Menu</h2>
        <p>Confira nosso <span>lindo Cardápio</span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        @foreach($categories as $category)
        <li class="nav-item">
          <a class="nav-link {{ $category->id == 1 ? 'active show': '' }}" data-bs-toggle="tab"
            data-bs-target="#{{$category->category}}">
            <h4>{{ $category->category }}</h4>
          </a>
        </li>
        @endforeach

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        @foreach($categories as $category)
        <div class="tab-pane fade {{ $category->id == 1 ? 'active show': '' }}" id="{{$category->category}}">
          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>{{$category->category}}</h3>
          </div>

          <div class="row gy-5">
            @foreach($recipes as $recipe)
              @if($recipe->categories_id == $category->id)
                <div class="col-lg-4 menu-item">
                  <a href="{{asset('storage'.'/'.$recipe->image_path)}}" class="glightbox"><img src="{{asset('storage'.'/'.$recipe->image_path)}}" class="menu-img img-fluid" alt=""></a>
                  <h4>{{$recipe->title}}</h4>
                  <p class="ingredients">
                    {{$recipe->ingredients}}
                  </p>
                  <p class="price">
                    $5.95
                  </p>
                </div><!-- Menu Item -->
              @endif
            @endforeach

          </div>
        </div><!-- End Starter Menu Content -->
        @endforeach
      </div>

    </div>
  </section><!-- End Menu Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Sobre</h2>
        <p>Leia sobre <span>nós</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url({{asset("assets/img/about.jpg")}}) ;" data-aos="fade-up" data-aos-delay="150">
          <div class="call-us position-absolute">
            <h4>ligue para</h4>
            <p>+55 84 9 9836 6549</p>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              Preocupados com a volorização da culunária tradicional desenvolvemos o sistema "Ternura na Cozinha" para
              auxiliar os amantes da gastronomia. Temos um sistema:
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> Leve e charmoso para os usuários mais rigosos.</li>
              <li><i class="bi bi-check2-all"></i> facilidade no uso e confortabilidade.</li>
            </ul>
            <p>
              O Ternura na Cozinha é um sistema para aqueles que amam o mundo da culinária e que desejam aproveitar a
              vida da forma mais gostosa possível.
            </p>

            <div class="position-relative mt-4">
              <img src="{{asset("assets/img/about-2.jpg")}}" class="img-fluid" alt="">
              <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox play-btn"></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="why-box">
            <h3>Why Choose Yummy?</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Duis aute irure dolor in reprehenderit
              Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
            </p>
            <div class="text-center">
              <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div><!-- End Why Box -->

        <div class="col-lg-8 d-flex align-items-center">
          <div class="row gy-4">

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-clipboard-data"></i>
                <h4>Corporis voluptates officia eiusmod</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-gem"></i>
                <h4>Ullamco laboris ladore pan</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-inboxes"></i>
                <h4>Labore consequatur incidid dolore</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>
      </div>
    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Chefs Section ======= -->
  <section id="chefs" class="chefs section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Chefs</h2>
        <p>Vejas os <span>Chefs</span> Profissionais</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="chef-member">
            <div class="member-img">
              <img src="{{asset("assets/img/chefs/chefs-1.jpg")}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Kaique José</h4>
              <span>Master Chef && Developer</span>
              <p>Sempre trabalhando duro, botando a mão na massa e no código. O verdadeiro chefe por trás desse sistema
              </p>
            </div>
          </div>
        </div><!-- End Chefs Member -->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="chef-member">
            <div class="member-img">
              <img src="{{asset("assets/img/chefs/chefs-2.jpg")}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Nicolly Morais</h4>
              <span>Dona</span>
              <p>A mãe da ideia de um sistema para gerenciamento de receitas. Sem ela esse projeto não teria saido do
                papel, ou melhor, do livro de receitas.</p>
            </div>
          </div>
        </div><!-- End Chefs Member -->

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="chef-member">
            <div class="member-img">
              <img src="{{asset("assets/img/chefs/chefs-3.jpg")}}" class="img-fluid" alt="">
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4>Charlon Fernandes</h4>
              <span>Auxiliar</span>
              <p>Todo grande chefe possue um grande auxiliar atrás, ninguém toca um restaurante sozinho. Sou aquele que
                dá os toques finais no prato e no pograma</p>
            </div>
          </div>
        </div><!-- End Chefs Member -->

      </div>

    </div>
  </section><!-- End Chefs Section -->
</main><!-- End #main -->
@endsection