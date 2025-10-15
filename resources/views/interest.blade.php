@extends('layouts.app')

@section('title', 'Soninho - Tenho Interesse')

@section('content')
    <div class="container text-center py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-4"><b>Que bom que você tem interesse!</b></h2>
                <p class="lead mb-4">
                    Deixe seu nome e e-mail que avisaremos você assim que o Soninho for lançado.
                </p>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('interest.store') }}">
                    @csrf
                    <div class="mb-3 text-start">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-3 text-start">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <button type="submit" class="cta-button">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection