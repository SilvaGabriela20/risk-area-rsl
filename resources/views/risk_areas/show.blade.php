@extends('app')

@section('content')
<div class="container">
    <h1>{{ $riskArea->name }}</h1>
    <p><strong>Descrição:</strong> {{ $riskArea->description }}</p>
    <p><strong>Localização:</strong>
    <div id="map" style="height: 400px;"></div>
        @include('risk_areas._map', ['polygon' => $riskArea->polygon, 'show' => true])
    </div></p>
    <p><strong>Tipo de Risco:</strong> {{ $riskArea->risk_type }}</p>
    <p><strong>Severidade:</strong> {{ $riskArea->severity_level }}</p>
    
    <a href="{{ route('risk-areas.index') }}" class="btn btn-primary">Voltar</a>
</div>
@endsection