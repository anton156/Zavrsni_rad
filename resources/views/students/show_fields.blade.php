<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $student->id }}</p>
</div>

<!-- Ime Field -->
<div class="form-group">
    {!! Form::label('Ime', 'Ime:') !!}
    <p>{{ $student->Ime }}</p>
</div>

<!-- Prezime Field -->
<div class="form-group">
    {!! Form::label('Prezime', 'Prezime:') !!}
    <p>{{ $student->Prezime }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('Email', 'Email:') !!}
    <p>{{ $student->Email }}</p>
</div>

<!-- Index Field -->
<div class="form-group">
    {!! Form::label('Index', 'Index:') !!}
    <p>{{ $student->Index }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $student->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $student->updated_at }}</p>
</div>

