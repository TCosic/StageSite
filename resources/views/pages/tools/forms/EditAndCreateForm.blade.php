<div class="input-fields">
    {!! Form::label('name', 'Naam') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="input-fields">
    {!! Form::label('description', 'Beschrijving') !!}
    {{ Form::textarea('description') }}
</div>

<div class="input-fields">
    {!! Form::label('status_id', 'Status') !!}
    {!! Form::select('status_id', $statusses) !!}
</div>

<div>
    {!! Form::submit('submit', ['class' => 'button']) !!}
</div>