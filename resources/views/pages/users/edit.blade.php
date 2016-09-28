@extends('master')

@section('title', 'Edit User Details')

@section('content')
    <section>
        <h2>Edit User</h2>
        <article>
            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'put', 'class' => 'horizontal']) !!}

            @include('pages.users.forms.EditAndCreateForm')

            {!! Form::close() !!}
        </article>
    </section>
@stop