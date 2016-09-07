@extends('master')

@section('title', 'User Admin')

@section('content')
    <section class="home">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <td><strong>id</strong></td>
                    <td><strong>Naam</strong></td>
                    <td><strong>Beschrijving</strong></td>
                    <td><strong>Status</strong></td>
                    <td><button type="button" class="btn btn-success">Toevoegen</button></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Sample Name</td>
                    <td>Sample Bescrhijving</td>
                    <td>Sample Status</td>
                    <td><button type="button" class="btn btn-warning">Wijzigen</button> <button type="button" class="btn btn-danger">Verwijderen</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

@stop