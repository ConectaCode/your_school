<div class="fields">
    {!! Html::openField('name', $errors, ['class' => 'six wide']) !!}
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name') !!}
        {!! Html::errorField('name', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('matter_id', $errors,['class' => 'five wide']) !!}
        {!! Form::label('matter_id', 'Matéria') !!}
        {!! Form::select('matter_id', $matters, null) !!}
        {!! Html::errorField('matter_id', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('teacher_id', $errors,['class' => 'five wide']) !!}
        {!! Form::label('teacher_id', 'Professor') !!}
        {!! Form::select('teacher_id', $teachers) !!}
        {!! Html::errorField('teacher_id', $errors) !!}
    {!! Html::closeDiv() !!}
</div>