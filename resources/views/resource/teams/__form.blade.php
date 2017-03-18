<div class="fields">
    {!! Html::openField('name', $errors, ['class' => 'five wide']) !!}
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name') !!}
    {!! Html::errorField('name', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('school_grade_id', $errors, ['class' => 'four wide']) !!}
    {!! Form::label('school_grade_id', 'Ano Escolar') !!}
    {!! Form::select('school_grade_id', $school_grades, null, ['class' => 'ui fluid search dropdown']) !!}
    {!! Html::errorField('school_grade_id', $errors) !!}
    {!! Html::closeDiv() !!}
</div>

<div class="fields">
    {!! Html::openField('studentsFree[]', $errors, ['class' => 'six wide']) !!}
    {!! Form::label('studentsFree[]', 'Estudantes Livres') !!}
    {!! Form::select('studentsFree[]', $studentsFree, null, ['multiple' => true, 'id' => 'multiselect']) !!}
    {!! Html::errorField('studentsFree[]', $errors) !!}
    {!! Html::closeDiv() !!}

    {!! Html::openField('studentsFree', $errors, ['class' => 'three wide']) !!}
    {!! Form::label('action', 'Ações') !!}
    <div class="ui large buttons">
        <button class="ui button" type="button" id="multiselect_leftAll"><i class="ui angle double left icon"></i></button>
        <div class="or" data-text=""></div>
        <button class="ui button" type="button" id="multiselect_rightAll"><i class="ui angle double right icon"></i></button>
    </div>
    <p></p>
    <div class="ui large buttons">
        <button class="ui button" type="button" id="multiselect_leftSelected"><i class="ui angle left icon"></i></button>
        <div class="or" data-text=""></div>
        <button class="ui button" type="button" id="multiselect_rightSelected"><i class="ui angle right icon"></i></button>
    </div>
    {!! Html::closeDiv() !!}

    {!! Html::openField('studentsTeam[]', $errors, ['class' => 'seven wide']) !!}
    {!! Form::label('studentsTeam[]', 'Estudantes da Turma') !!}
    {!! Form::select('studentsTeam[]', $studentsTeam, null, ['multiple' => true, 'id' => 'multiselect_to']) !!}
    {!! Html::errorField('studentsTeam[]', $errors) !!}
    {!! Html::closeDiv() !!}
</div>