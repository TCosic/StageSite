{!! Form::open(['url' => '/login']) !!}

<div class="input-fields">
    {!! Form::label('email', 'E-Mail Address') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
    @include('errors.validateError', ['errorName' => 'email'])
</div>
<div class="input-fields">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
    @include('errors.validateError', ['errorName' => 'password'])
</div>
<div class="checkbox-fields">
    {!! Form::checkbox('remember') !!}
    {!! Form::label('remember', 'Remember Me') !!}
</div>
<div>
    <button class="form-button" id="goToRegister">Register</button>
    {!! Form::submit('Login', ['class' => 'form-button']) !!}
</div>
<div>
    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
</div>

{!! Form::close() !!}