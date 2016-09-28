<div class="input-fields">
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>
@include('errors.validateError', ['errorName' => 'email'])

<div class="input-fields">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>
@include('errors.validateError', ['errorName' => 'password'])

<div class="input-fields">
    {!! Form::label('role_id', 'Role') !!}
    {!! Form::select('role_id', $role) !!}
</div>

<div class="input-fields">
    {!! Form::label('name', 'First name') !!}
    {!! Form::text('name', (isset($user->contact->name) ? $user->contact->name : null), ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('middle_name', 'Particle') !!}
    {!! Form::text('middle_name', (isset($user->contact->middle_name) ? $user->contact->middle_name : null), ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('last_name', 'Last name') !!}
    {!! Form::text('last_name', (isset($user->contact->last_name) ? $user->contact->last_name : null), ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('tel', 'Phone number') !!}
    {!! Form::number('tel', (isset($user->contact->tel) ? $user->contact->tel : null), ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('mobile', 'Mobile phone number') !!}
    {!! Form::number('mobile', (isset($user->contact->mobile) ? $user->contact->mobile : null), ['class' => 'form-control']) !!}
</div>


<div>
    {!! Form::submit('submit', ['class' => 'button']) !!}
</div>
