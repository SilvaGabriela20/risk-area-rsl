@extends('app')

@section('content')
<div class="container">
    <h1>Adicionar nova Área de Risco</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('risk-areas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="map" class="form-label">Selecionar Localização</label>
            <div id="map" style="height: 400px;"></div>
            @include('risk_areas._map', ['polygon' => old('polygon')])
            <input type="hidden" id="polygon" name="polygon" value="{{ old('polygon') }}">
        </div>
        <div class="mb-3">
            <label for="risk_type" class="form-label">Tipo de Risco</label>
            <select class="form-control" id="risk_type" name="risk_type">
                @foreach(App\Enums\RiskType::getValues() as $riskType)
                    <option value="{{ $riskType }}">{{ $riskType }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="severity_level" class="form-label">Severidade</label>
            <input type="range" min="1" max="5" step="1" class="form-range" id="severity_level" name="severity_level" value="{{ old('severity_level') }}">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Área de Risco</button>
    </form>
</div>
@endsection