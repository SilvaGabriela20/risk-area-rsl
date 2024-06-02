@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Áreas de Risco</h1>
    <a href="{{ route('risk-areas.create') }}" class="btn btn-primary">Cadastrar nova Área de Risco</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Tipo de Risco</th>
                <th>Severidade (1-5)</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riskAreas as $riskArea)
            <tr>
                <td>{{ $riskArea->name }}</td>
                <td>{{ $riskArea->description }}</td>
                <td>{{ $riskArea->risk_type }}</td>
                <td>{{ $riskArea->severity_level }}</td>
                <td>
                    <a href="{{ route('risk-areas.show', $riskArea->id) }}" class="btn btn-info">Visualizar</a>
                    <a href="{{ route('risk-areas.edit', $riskArea->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('risk-areas.destroy', $riskArea->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection