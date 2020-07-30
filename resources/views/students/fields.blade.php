<!-- Ime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ime', 'Ime:') !!}
    {!! Form::text('Ime', null, ['class' => 'form-control']) !!}
</div>

<!-- Prezime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Prezime', 'Prezime:') !!}
    {!! Form::text('Prezime', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::email('Email', null, ['class' => 'form-control']) !!}
</div>

<!-- Index Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Index', 'Index:') !!}
    {!! Form::text('Index', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('students.index') }}" class="btn btn-default">Odustani</a>
</div>
