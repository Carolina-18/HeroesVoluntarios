        @extends('layout')

        @section('contenidos')


        <h5>AMBIENTAL</h5>



        <!-- CARDS-->
        <div class="row row-cols-1 row-cols-md-2 g-2">
            <div class="col">
                <div class="card">
                    <img src="img/docc.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MATERIAL DOCUMENTADO</h5>
                        <a href="ambiental" class="btn btn-primary">IR MATERIAL DOCUMENTADO</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="img/web.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PAGINAS WEB</h5>
                        <a href="p_web4" class="btn btn-primary">IR PAGINAS WEB</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- CARDS-->


        @endsection