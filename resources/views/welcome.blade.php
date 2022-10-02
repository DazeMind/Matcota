@include('layouts.app')
<div class="container">
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark" style=" background-image: url('{{asset('/img/matcota/fotos/imagen1.jpg')}}');" >
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">!!Registrate Gratis¡¡</h1>
          <a class="btn btn-outline-primary" href="#">Registrate como cliente</a>
          <a class="btn btn-outline-primary" href="#">Registrate como paseador</a>
        </div>
    </div>

    <div class="row mt-5 ">
        <div class="col">
            <h1 class="text-dark text-center">Matcota te ofrece</h3>
            <p class="text-secondary text-center">razones principales</p>
        </div>
        <div class="row ">
            <div class="col">
                <img src="{{asset('/img/matcota/fotos/iconocheck.png')}}" alt="" class="rounded" width="150px" height="150px">

                <h3 class="text-dark text-center">Personas verificadas</h1>
                <p class="text-secondary text-center">Todas las personas que ofrecen servicio de cuidado o paseo han pasado por un proceso de verificación.</p>
            </div>
            <div class="col">
                <img src="{{asset('/img/matcota/fotos/iconocheck.png')}}" alt="" class="rounded" width="150px" height="150px">

                <h3 class="text-dark text-center">Personas verificadas</h1>
                <p class="text-secondary text-center">Todas las personas que ofrecen servicio de cuidado o paseo han pasado por un proceso de verificación.</p>
            </div>
            <div class="col">
                <img src="{{asset('/img/matcota/fotos/iconocheck.png')}}" alt="" class="rounded" width="150px" height="150px">

                <h3 class="text-dark text-center">Personas verificadas</h1>
                <p class="text-secondary text-center">Todas las personas que ofrecen servicio de cuidado o paseo han pasado por un proceso de verificación.</p>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">1 Paseo</h4>
                        </div>
                        <div class="card-body">
                        <h3 class="card-title pricing-card-title">$7.500</h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>Un paseo para el día elegido</li>
                            <li>Paseadores verificados</li>
                            <li>Paseo de una hora, se permite parar y olfatear</li>
                            <li>Disponible en diferentes comunas de Santiago y Viña del Mar</li>
                            <li>Garantía veterinaria limitada</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Reservar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm">
                        <div class=" card-header py-3 text-bg-primary border-primary">
                            <h4 class="my-0 fw-normal">20 Paseos</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$100.000</h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>20 paseos al mes</li>
                                <li>10 GB of storage</li>
                                <li>Priority email support</li>
                                <li>Help center access</li>
                            </ul>
                            <button type="button" class="w-100 btn btn-lg btn-primary">Reservar</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">10 Paseos</h4>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title pricing-card-title">$48.000</h3>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>10 paseos al mes</li>
                                    <li>15 GB of storage</li>
                                    <li>Phone and email support</li>
                                    <li>Help center access</li>
                                </ul>
                                <button type="button" class="w-100 btn btn-lg btn-primary">Reservar</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="button">¿Necesitas algo mas personalizado? Cotizalo Aqui</button>
            </div>
        </div>
    </div>





@include('layouts.footer')
</div>