{!! Form::open(['url' => '/login', 'class' => 'vertical']) !!}

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
    <button class="button" id="goToRegister">Register</button>
    {!! Form::submit('Login', ['class' => 'button']) !!}
</div>
<div>
    <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
</div>

{!! Form::close() !!}