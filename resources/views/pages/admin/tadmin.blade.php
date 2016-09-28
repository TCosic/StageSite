@extends('master')

@section('title', 'User Admin')

@section('content')
    <section class="home">
        <div class="table-responsive">
            <h1>Tools Overview</h1>
            <table class="table">
                <thead>
                <tr>
                    <td><strong>id</strong></td>
                    <td><strong>Naam</strong></td>
                    <td><strong>Beschrijving</strong></td>
                    <td><strong>Status</strong></td>
                    <td><button type="button" class="btn btn-success">Toevoegen</button></td>
                    <td><a href="{{route('tool.create')}}" class="button green">Create</a></td>
                </tr>
                </thead>
                <tbody>
                @foreach($tools as $tool)
                    <tr>
                        <td>{{$tool->id}}</td>
                        <td>{{$tool->name}}</td>
                        <td>{{$tool->description}}</td>
                        <td>{{$tool->status->name}}</td>
                        <td><a href="{{ route('tool.destroy', $tool->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>
                            <a href="{{ route('tool.edit', $tool->id) }}">Wijzig</a></td>
                        <td><button type="button" class="btn btn-warning">Wijzigen</button> <button type="button" class="btn btn-danger">Verwijderen</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@stop