@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->name }}</h1>
        <p>{{ $project->description }}</p>
        <p>Type ID: {{ $project->type_id }}</p>
        <p>Type Name: {{ $project->type ? $project->type->name : 'N/A' }}</p>
        <p>Type Description: {{ $project->type ? $project->type->description : 'N/A' }}</p>
        <p>Type Icon: {{ $project->type ? $project->type->icon : 'N/A' }}</p>
    </div>

@endsection