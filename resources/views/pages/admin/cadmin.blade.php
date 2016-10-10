@extends('master')

@section('title', 'User Admin')

@section('content')
    <section class="home">
        <div class="table-responsive">
            <h1>Companies Overview</h1>
            <table class="table">
                <thead>
                <tr>
                    <td><strong>id</strong></td>
                    <td><strong>Bedrijfsnaam</strong></td>
                    <td><strong>Straatnaam</strong></td>
                    <td><strong>Huisnummer</strong></td>
                    <td><strong>Postcode</strong></td>
                    <td><strong>Stad</strong></td>
                    <td><strong>Telefoonnummer</strong></td>
                    <td><strong>Website</strong></td>
                    <td><button type="button" class="btn btn-success">Toevoegen</button></td>
                    <td><a href="{{route('bedrijf.create')}}" class="button green">Create</a></td>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{$company->id}}</td>
                        <td>{{$company->name}}</td>
                        <td>{{$company->streetname}}</td>
                        <td>{{$company->housenumber}}</td>
                        <td>{{$company->postal_code}}</td>
                        <td>{{$company->city}}</td>
                        <td>{{$company->tel}}</td>
                        <td>{{$company->website}}</td>
                        <td><a href="{{ route('bedrijf.destroy', $company->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>
                            <a href="{{ route('bedrijf.edit', $company->id) }}">Wijzig</a></td>
                        <td><button type="button" class="btn btn-warning">Wijzigen</button> <button type="button" class="btn btn-danger">Verwijderen</button></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </section>

@stop