@extends('layouts.master')
@section('title')
INICIO
@endsection
@section('content')
<aside id="fh5co-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(images/img_bg_5.jpeg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Posgrados y Educación Continua</h1>
                                <h2>Desarrolla tu máximo potencial, continúa preparándote.</h2>
                                <p><a class="btn btn-primary btn-lg" href="{{ url('register') }}">Comienza hoy!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_6.jpeg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Desarrollo Profesional y Vinculación Laboral</h1>
                                <h2>¡Regístrate y aprovecha los beneficios de la nueva bolsa de trabajo SISEEPV!</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="{{ url('register') }}">Comienza hoy!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(images/img_bg_7.jpg);">
                <div class="overlay-gradient"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center slider-text">
                            <div class="slider-text-inner">
                                <h1>Proyectos Vinculados y Banco de Proyectos</h1>
                                <h2>Espacio de ideas y expresiones tecnologicas.</h2>
                                <p><a class="btn btn-primary btn-lg btn-learn" href="{{ url('register') }}">Comienza hoy!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>           
        </ul>
    </div>
</aside>

<div id="fh5co-course-categories">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Nuetros servicios</h2>
                <p>Diversas experiencias educativas y servicios que ponemos a tú dispocición.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-code"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Educación Continua</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-lab2"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Investigación</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-news"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Difusión Tecnologica</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-briefcase"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Bolsa de Trabajo</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-calender"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Eventos</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-phone"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Comunicación</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-cog"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Posgrados</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-chart-area-outline"></i>
                    </span>
                    <div class="desc">
                        <h3><a href="#">Proyectos Vinculados</a></h3>
                        <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-counter" class="fh5co-counters" style="background-image: url(images/img_bg_4.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-world"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Usuarios Activos</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-study"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Egresados Matriculados</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-bulb"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Talleres</span>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center animate-box">
                        <span class="icon"><i class="icon-head"></i></span>
                        <span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
                        <span class="fh5co-counter-label">Empleos Disponibles</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-course">
    <div class="container">

        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>Empresas Ofreciendo Vacantes de Empleo</h2>
                <p>Te ayudamos a encontrar un trabajo mejor
                    haz que tu currículum sea visible para miles de empresas en nuestra bolsa de trabajo.</p>
                </div>
            </div>
            @php
            $vacancy = App\Models\Vacancy::all();
            @endphp
            <div class="row ">
                @foreach ($vacancy as $element)
                <div class="col-md-6 animate-box">
                    <div class="course">

                        <a href="#" class="course-img" style="background-image: url(uploads/avatars/default.jpg);">
                        </a>
                        <div class="desc">

                            <!--<h1> {{ $element->company->name}}</h1>-->

                            <h3><a href="#">{{ $element->position}}</a></h3>
                            <p>{{$element->task}}</p>
                            <button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModalLong{{$element->id}}">Ver más</button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalLong{{$element->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">{{ $element->position}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                {{$element->abilities}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @endforeach
</div>

@php
$vacancyAdmins = App\Models\VacancyAdmin::all();
@endphp
<div class="row ">
    @foreach ($vacancyAdmins as $vacancyAdmin)
    <div class="col-md-6 animate-box">
        <div class="course">

            <a href="#" class="course-img" style="background-image: url(uploads/avatars/default.jpg);">
            </a>
            <div class="desc">

                <!--<h1> {{ $element->company->name}}</h1>-->

                <h3><a href="#">{{ $vacancyAdmin->position}}</a></h3>
                <p>{{$vacancyAdmin->task}}</p>
                <button type="button" class="btn btn-info " data-toggle="modal" data-target="#exampleModalLong{{$vacancyAdmin->id}}">Ver más</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong{{$vacancyAdmin->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">{{ $vacancyAdmin->position}}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">
                    {{$vacancyAdmin->abilities}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endforeach
</div>

</div>
</div>

<div id="fh5co-testimonial" style="background-image: url(images/school.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2><span>Testimonios</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="row animate-box">
                    <div class="owl-carousel owl-carousel-fullwidth">
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <div class="user" style="background-image: url(images/person1.jpg);"></div>
                                <span>Mary Walker<br><small>Students</small></span>
                                <blockquote>
                                    <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <div class="user" style="background-image: url(images/person2.jpg);"></div>
                                <span>Mike Smith<br><small>Students</small></span>
                                <blockquote>
                                    <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-slide active text-center">
                                <div class="user" style="background-image: url(images/person3.jpg);"></div>
                                <span>Rita Jones<br><small>Teacher</small></span>
                                <blockquote>
                                    <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-blog">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Blog &amp; Eventos</h2>
                <p>Entérate de las Noticias más recientes.</p>
            </div>
        </div>
        <div class="row row-padded-mb">
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">USA, International Triathlon Event</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="fh5co-event">
                    <div class="date text-center"><span>15<br>Mar.</span></div>
                    <h3><a href="#">New Device Develope by Microsoft</a></h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p><a href="#">Read More</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/post_1.jpg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Hackaton Chiapas 2017</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/post_2.png);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Introducción a Xamarin</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    <a href="#" class="blog-img-holder" style="background-image: url(images/post_3.jpeg);"></a>
                    <div class="blog-text">
                        <h3><a href="#">Campus Party 2017</a></h3>
                        <span class="posted_on">March. 15th</span>
                        <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-gallery" class="fh5co-bg-section">
    <div class="row text-center">
        <h2><span>Galeria de Instagram</span></h2>
    </div>
    <div class="row">
        <div class="col-md-3 col-padded">
            <a target="_blank" href="https://www.instagram.com/p/BR6ksxUB3eF/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a target="_blank" href="https://www.instagram.com/p/BRv7UZ5hLjT/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i2.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a target="_blank" href="https://www.instagram.com/p/BR8tCWCh0Mc/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i_3.jpg);"></a>
        </div>
        <div class="col-md-3 col-padded">
            <a  target="_blank" href="https://www.instagram.com/p/BRvgkl8h5yB/?taken-by=tectuxtla" class="gallery" style="background-image: url(images/img_i_4.jpg);"></a>
        </div>
    </div>
</div>
@endsection
