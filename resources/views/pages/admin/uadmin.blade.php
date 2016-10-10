@extends('master')

@section('title', 'User Admin')

@section('content')
    <section class="home">
        <div class="table-responsive">
            <h1>User Overview</h1>
            <table class="table">
                <thead>
                <tr>
                    <td><strong>id</strong></td>
                    <td><strong>email</strong></td>
                    <td><strong>role</strong></td>
                    <td><strong>name</strong></td>
                    <td><strong>insertion</strong></td>
                    <td><strong>surname</strong></td>
                    <td><strong>tel</strong></td>
                    <td><strong>mobiel</strong></td>
                    <td><button type="button" class="btn btn-success">Toevoegen</button></td>
                    <td><a href="{{route('user.create')}}" class="button green">Create</a></td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->role->name}}</td>
                        <td>{{$user->contact->name}}</td>
                        <td>{{$user->contact->middle_name}}</td>
                        <td>{{$user->contact->last_name}}</td>
                        <td>{{$user->contact->tel}}</td>
                        <td>{{$user->contact->mobile}}</td>
                        <td><a href="{{ route('user.destroy', $user->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>
                            <a href="{{ route('user.edit', $user->id) }}">Wijzig</a></td>
                        <td><button type="button" class="btn btn-warning">Wijzigen</button> <button type="button" class="btn btn-danger">Verwijderen</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@stop