@extends('layouts.panel')
@section('title', 'Animal/Show')

@section('content')
    <div class="col-xl-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0"><i class="fas fa-eye"></i> Ver Animal</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('animals.index') }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-arrow-left"></i> Volver</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="heading-small text-muted mb-4">Datos del Animal</h6>
                        <div class="pl-lg-4">
                            <label class="form-control-label" for="name"><i class="fas fa-signature"></i> Nombre</label>
                            <p>{{ $employee->name }}</p>

                            <label class="form-control-label" for="name"><i class="fas fa-signature"></i> Apellido</label>
                            <p>{{ $employee->surname }}</p>

                            <label class="form-control-label" for="name"><i class="fas fa-clock"></i> Cedula</label>
                            <p>{{ $employee->card_id }}</p>

                            <label class="form-control-label" for="name"><i class="fas fa-clock"></i> Licencia de conducir</label>
                            <p>{{ $employee->driver_licence }}</p>


                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6 class="heading-small text-muted mb-4">Datos Adicionales</h6>
                        <div class="pl-lg-4">
                            <label class="form-control-label" for="name"><i class="fas fa-chalkboard-teacher"></i>
                                Imagen</label>
                            <div style="width: 300px; height: 300px; overflow: hidden;">
                                <img src="{{ $animal->image() }}" alt="{{ $animal->name }}" class="img-fluid"
                                    style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
