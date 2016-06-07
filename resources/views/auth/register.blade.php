{!! Form::open(['url' => '/register']) !!}

<div class="input-fields">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    @include('errors.validateError', ['errorName' => 'name'])
</div>
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
<div class="input-fields">
    {!! Form::label('confirm_password', 'Confirm password') !!}
    {!! Form::password('confirm_password', ['class' => 'form-control']) !!}
    @include('errors.validateError', ['errorName' => 'confirm_password'])
</div>
<div class="checkbox-fields">
    {!! Form::checkbox('remember') !!}
    {!! Form::label('remember', 'Remember Me') !!}
</div>
<div>
    <button class="form-button" id="goBack">< back</button>
    {!! Form::submit('Register', ['class' => 'form-button']) !!}
</div>

{!! Form::close() !!}