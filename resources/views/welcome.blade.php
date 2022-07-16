@extends('layouts.app')
@section('title', 'Inicio')
@section('content')
<!-- Header Start -->
<div class="container-fluid bg-primary px-0 px-md-5 mb-5">
    <div class="row align-items-center px-3">
        <div class="col-lg-6 text-center text-lg-left">
            <h4 class="text-white mb-4 mt-5 mt-lg-0">Iglesia evangélica de avivamiento pentecostes</h4>
            <h1 class="display-4 font-weight-bold text-white">
                Manantial de vida #37
            </h1>
            <p class="text-white mb-4">
                Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed
                sit. Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed
                ipsum at ipsum nonumy amet. Clita lorem dolore sed stet et est justo
                dolore.
            </p>
            <a href="" class="btn btn-secondary mt-1 py-3 px-5">Leer más</a>
        </div>
        <div class="col-lg-6 text-center text-lg-right py-5">
            <img class="img-fluid mt-5" src="{{ asset('img/grey.jpeg') }}" alt="" />
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <img class="img-fluid rounded mb-5 mb-lg-0" src="img/pastores.jfif" width="300px" height="300px"
                    alt="" />
            </div>
            <div class="col-lg-8">
                <p class="section-title pr-5">
                    <span class="pr-2">Quienes Somos</span>
                </p>
                <h1 class="mb-4">Manantial de vida #37</h1>
                <p>
                    Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
                    dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
                    Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                    dolor
                </p>
                <div class="row pt-2 pb-4">
                    <div class="col-6 col-md-4">
                        <img class="img-fluid rounded" src="img/about-2.jpg" alt="" />
                    </div>
                    <div class="col-6 col-md-8">
                        <ul class="list-inline m-0">
                            <li class="py-2 border-top border-bottom">
                                <i class="fa fa-check text-primary mr-3"></i>Labore eos amet
                                dolor amet diam
                            </li>
                            <li class="py-2 border-bottom">
                                <i class="fa fa-check text-primary mr-3"></i>Etsea et sit
                                dolor amet ipsum
                            </li>
                            <li class="py-2 border-bottom">
                                <i class="fa fa-check text-primary mr-3"></i>Diam dolor diam
                                elitripsum vero.
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Class Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Anuncios</span>
            </p>
            <h1 class="mb-4">Anuncios de la semana</h1>
        </div>
        <div class="row">

            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                    <div class="card-body text-center">
                        <h4 class="card-title">Clases de Niños</h4>
                        <p class="card-text">
                            Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                            ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                        </p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Fecha</strong>
                            </div>
                            <div class="col-6 py-1">Lunes 11/07</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Hora</strong>
                            </div>
                            <div class="col-6 py-1">7 PM - 8 PM</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Lugar</strong>
                            </div>
                            <div class="col-6 py-1">Templo</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Invitados</strong>
                            </div>
                            <div class="col-6 py-1">Todos</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                    <div class="card-body text-center">
                        <h4 class="card-title">Clases de Niños</h4>
                        <p class="card-text">
                            Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                            ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                        </p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Fecha</strong>
                            </div>
                            <div class="col-6 py-1">Lunes 11/07</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Hora</strong>
                            </div>
                            <div class="col-6 py-1">7 PM - 8 PM</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Lugar</strong>
                            </div>
                            <div class="col-6 py-1">Templo</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Invitados</strong>
                            </div>
                            <div class="col-6 py-1">Todos</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                    <div class="card-body text-center">
                        <h4 class="card-title">Clases de Niños</h4>
                        <p class="card-text">
                            Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                            ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                        </p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Fecha</strong>
                            </div>
                            <div class="col-6 py-1">Lunes 11/07</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Hora</strong>
                            </div>
                            <div class="col-6 py-1">7 PM - 8 PM</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Lugar</strong>
                            </div>
                            <div class="col-6 py-1">Templo</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Invitados</strong>
                            </div>
                            <div class="col-6 py-1">Todos</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                    <div class="card-body text-center">
                        <h4 class="card-title">Clases de Niños</h4>
                        <p class="card-text">
                            Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                            ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                        </p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Fecha</strong>
                            </div>
                            <div class="col-6 py-1">Lunes 11/07</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Hora</strong>
                            </div>
                            <div class="col-6 py-1">7 PM - 8 PM</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Lugar</strong>
                            </div>
                            <div class="col-6 py-1">Templo</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Invitados</strong>
                            </div>
                            <div class="col-6 py-1">Todos</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                    <div class="card-body text-center">
                        <h4 class="card-title">Clases de Niños</h4>
                        <p class="card-text">
                            Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                            ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                        </p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Fecha</strong>
                            </div>
                            <div class="col-6 py-1">Lunes 11/07</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Hora</strong>
                            </div>
                            <div class="col-6 py-1">7 PM - 8 PM</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Lugar</strong>
                            </div>
                            <div class="col-6 py-1">Templo</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Invitados</strong>
                            </div>
                            <div class="col-6 py-1">Todos</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-5">
                <div class="card border-0 bg-light shadow-sm pb-2">
                    <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
                    <div class="card-body text-center">
                        <h4 class="card-title">Clases de Niños</h4>
                        <p class="card-text">
                            Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                            ipsum duo et no et, ipsum ipsum erat duo amet clita duo
                        </p>
                    </div>
                    <div class="card-footer bg-transparent py-4 px-5">
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Fecha</strong>
                            </div>
                            <div class="col-6 py-1">Lunes 11/07</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Hora</strong>
                            </div>
                            <div class="col-6 py-1">7 PM - 8 PM</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Lugar</strong>
                            </div>
                            <div class="col-6 py-1">Templo</div>
                        </div>
                        <div class="row">
                            <div class="col-6 py-1 text-right border-right">
                                <strong>Invitados</strong>
                            </div>
                            <div class="col-6 py-1">Todos</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Class End -->

<!-- Team Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Mienbros</span>
            </p>
            <h1 class="mb-4">Directiva</h1>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                    <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <h4>Jhoel Hernandez</h4>
                <i>Pastor</i>
            </div>

            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <h4>Andreina de Hernandez</h4>
                <i>Pastoras</i>
            </div>

            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                    <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <h4>Veronika</h4>
                <i>Administradora</i>
            </div>

            <div class="col-md-6 col-lg-3 text-center team mb-5">
                <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
                    <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
                    <div
                        class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px"
                            href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
                <h4>Marielis lopez</h4>
                <i>Directiva de damas</i>
            </div>

        </div>
    </div>
</div>
<!-- Team End -->

<!-- Blog Start -->
<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Noticias</span>
            </p>
            <h1 class="mb-4">Ultimas noticias</h1>
        </div>
        <div class="row pb-3">

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm mb-2">
                    <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
                    <div class="card-body bg-light text-center p-4">
                        <h4 class="">Bautizo de pastores</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, beatae
                            quia vel, placeat sed dicta, necessitatibus quis quisquam
                        </p>
                        <a href="" class="btn btn-primary px-4 mx-auto my-2">Leer más</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm mb-2">
                    <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
                    <div class="card-body bg-light text-center p-4">
                        <h4 class="">Bautizo de pastores</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, beatae
                            quia vel, placeat sed dicta, necessitatibus quis quisquam
                        </p>
                        <a href="" class="btn btn-primary px-4 mx-auto my-2">Leer más</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card border-0 shadow-sm mb-2">
                    <img class="card-img-top mb-2" src="img/blog-1.jpg" alt="" />
                    <div class="card-body bg-light text-center p-4">
                        <h4 class="">Bautizo de pastores</h4>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem, beatae
                            quia vel, placeat sed dicta, necessitatibus quis quisquam
                        </p>
                        <a href="" class="btn btn-primary px-4 mx-auto my-2">Leer más</a>
                    </div>
                </div>a
            </div>

        </div>
    </div>
</div>
<!-- Blog End -->
@endsection