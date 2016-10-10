{!! Form::open(['route' => 'stage.review', 'class' => 'horizontal']) !!}
<div class="input-fields">
    {!! Form::label('review', 'Review') !!}
    {!! Form::textarea('review') !!}
</div>
<div class="input-fields">
    {!! Form::label('rating', 'Cijfer') !!}
    {!! Form::number('rating', 'value') !!}
</div>
{!! Form::hidden('internship_id', $internship->id) !!}
<div>
    {!! Form::submit('Plaatsen', ['class' => 'button']) !!}
</div>
{!! Form::close() !!}