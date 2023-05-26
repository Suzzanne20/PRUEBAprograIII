@extends('layout/plantilla')
@section('tituloPagina', 'Neko')

@section('navbar')
@section('contenido')

<script type="test/javascript" src="{{ asset('js/script.js') }}"></script>
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
<link rel="stylesheet" href="css/home.css" />

<div class="content">  
            <main class="main">
                <div class="">
                     <div class="modal-content">
                         <div class="col- logo"> <br>             
                         <img src="https://images.vexels.com/media/users/3/239034/isolated/preview/2011ded47041cf9ff35bb6da51dae22f-camion-2.png" width="300">
                        </div><h2 class="text-center">NEKO TRANPORTE</h2><br>

                        <div class="container"><form class="col-12"> 
                        <h4>Bienvenido</h4><h7 name="textBien">Confíe en nosotros para optimizar sus operaciones logísticas y entregar sus mercancías a tiempo. Explore nuestro sitio web para obtener más información sobre nuestros servicios. ¡Contáctenos hoy mismo y experimente la diferencia de trabajar con Neko Transporte</h7><br>
                            <br><br>
                            <H4>Nuestras Ubicaciones</H4>
                            <div class="text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d30729.021714404484!2d-88.58650835742195!3d15.691367236652226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sgt!4v1685065027722!5m2!1ses!2sgt" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div><br>
                        </form></div></div></div>
            </main>
            
            <aside class="aside"> 

                
                <div class="card promo" >
                  <img src="https://www.logisticaquintanilla.es/images/camion-quintanilla.gif?crc=536437979" class="card-img-top" alt="75px">
                  <div class="card-body">
                    <h5 class="card-title">Conócenos</h5>
                    <p class="card-text">En Neko Transporte, nos enorgullece ofrecer servicios de transporte confiables y eficientes para satisfacer todas sus necesidades logísticas. Somos una empresa líder en el sector, con años de experiencia en la industria del transporte de mercancías y un equipo dedicado de profesionales altamente capacitados.</p>                
                  </div>
                </div>

                <div class="card promo" >
                  <div class="card-body">
                    <h5 class="card-title">Nuestros Transportes</h5>
                    <p class="card-text">Puedes verificar nuestro listado de Transportistas, para seleccionar el que mejor se adapte a tus necesidades: </p>
                    <a class="btn btn-info col-10" href="{{ route('transporte.index') }}">Listado de Transportes</a><img src="https://cdn-icons-png.flaticon.com/512/3443/3443389.png" width="50px" class="col-2">
                  </div>
                </div>

                <div class="card promo" >
                  <div class="card-body">
                <div class="text-center"><img src="https://cdn-icons-png.flaticon.com/512/3447/3447560.png" height="40"></div>
                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Escribenos tus comentarios..."></textarea>
                    <button class="btn btn-dark" type="submit">Enviar</button>
                </div>                  
            </div>
            </div>

            </aside>
            
            
            <footer class="footer row align-items-center text-center">
                <h10 class="co-10">Neko Tranposrtes co.</h10>

            </footer>
        </div>
        

<br><br>

@endsection