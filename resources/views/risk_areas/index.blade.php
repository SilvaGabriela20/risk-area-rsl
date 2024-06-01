@extends('app')

@section('content')
<div class="container">
    <h1>Risk Areas</h1>
    <a href="{{ route('risk-areas.create') }}" class="btn btn-primary">Add New Risk Area</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Risk Type</th>
                <th>Severity Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($riskAreas as $riskArea)
            <tr>
                <td>{{ $riskArea->name }}</td>
                <td>{{ $riskArea->description }}</td>
                <td>{{ $riskArea->latitude }}</td>
                <td>{{ $riskArea->longitude }}</td>
                <td>{{ $riskArea->risk_type }}</td>
                <td>{{ $riskArea->severity_level }}</td>
                <td>
                    <a href="{{ route('risk-areas.show', $riskArea->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('risk-areas.edit', $riskArea->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('risk-areas.destroy', $riskArea->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection