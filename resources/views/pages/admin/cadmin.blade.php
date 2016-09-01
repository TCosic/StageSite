@extends('master')

@section('title', 'User Admin')

@section('content')
    <section class="home">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <td><strong>id</strong></td>
                    <td><strong>Bedrijfsnaam</strong></td>
                    <td><strong>Straatnaam</strong></td>
                    <td><strong>Huisnmr.</strong></td>
                    <td><strong>Postcode</strong></td>
                    <td><strong>Stad</strong></td>
                    <td><strong>Telefoonnmr.</strong></td>
                    <td><strong>Website</strong></td>
                    <td><button type="button" class="btn btn-success">Toevoegen</button></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Sample Name</td>
                    <td>Sample Lastname</td>
                    <td>Sample Email</td>
                    <td><button type="button" class="btn btn-warning">Wijzigen</button> <button type="button" class="btn btn-danger">Verwijderen</button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

@stop