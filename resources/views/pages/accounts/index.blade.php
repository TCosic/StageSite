@extends('master')

@section('title', 'Account overview')

@section('content')
    <section>
        <h2>Personal page</h2>
        <table>
            <tr>
                <td>Email:</td>
                <td>{{ $user->contact->email }}</td>
            </tr>
            <tr>
                <td>Naam:</td>
                <td>{{ $user->contact->name }} {{ $user->contact->last_name }}</td>
            </tr>
            <tr>
                <td>Telefoonnummer:</td>
                <td>{{ $user->contact->tel }}</td>
            </tr>
            <tr>
                <td>Mobiele telefoonnummer:</td>
                <td>{{ $user->contact->mobile }}</td>
            </tr>

        </table>

        <h3>stages:</h3>
        @foreach($user->internship as $internship)
            <a href="{{ route('stage.show', $internship->id) }}">{{$internship->contact->company->name}}</a>
        @endforeach

        <h3>reviews:</h3>
        <table>
            <tr>
                <th>Review</th>
                <th>Rating</th>
                <th>Public/Private</th>
            </tr>
            @foreach($reviews as $review)
                <tr>
                    <td>{{ $review->review }}</td>
                    <td>{{ $review->rating }}</td>
                    <td>{{ $review->status->name }}</td>
                </tr>
            @endforeach
        </table>
    </section>

@stop