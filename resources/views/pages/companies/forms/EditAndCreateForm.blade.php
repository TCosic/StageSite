<div class="input-fields">
    {!! Form::label('name', 'Naam') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('streetname', 'Straatnaam') !!}
    {!! Form::text('streetname', null, ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('housenumber', 'huisnummer') !!}
    {!! Form::number('housenumber', null, ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('postal_code', 'Postcode') !!}
    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('city', 'Stad') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('tel', 'Telefoonnummer') !!}
    {!! Form::number('tel', null, ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('website', 'Website') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<div>
    {!! Form::submit('submit', ['class' => 'button']) !!}
</div>