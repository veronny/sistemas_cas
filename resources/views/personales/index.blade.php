@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               <div class="card-header">
                FORMATO DE HOJA DE VIDA
                  <a href="{{ route('personales.create') }}" class="btn btn-sm btn-primary float-right">Editar Datos Personales</a>
               </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('personales.store') }}" method="POST">

                        @include('personales.partials.form')

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
