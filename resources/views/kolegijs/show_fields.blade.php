<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $kolegij->id }}</p>
</div>

<!-- Naziv Field -->
<div class="form-group">
    {!! Form::label('naziv', 'Naziv:') !!}
    <p>{{ $kolegij->naziv }}</p>
</div>

<!-- Opis Field -->
<div class="form-group">
    {!! Form::label('opis', 'Opis:') !!}
    <p>{{ $kolegij->opis }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $kolegij->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $kolegij->updated_at }}</p>
</div>

