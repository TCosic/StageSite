@extends('master')

@section('title', 'User Admin')

@section('content')
    <section>
        <a href="{{route("login.admin.user")}}">User admin</a>
        <a href="{{route("login.admin.company")}}">Company admin</a>
        <a href="{{route("login.admin.tool")}}">Tool admin</a>
    </section>
@stop