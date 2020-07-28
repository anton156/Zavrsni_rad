<!-- Naziv Field -->
<div class="form-group">
    {!! Form::label('naziv', 'Naziv:') !!}
    <p>{{ $predavanje->naziv }}</p>
</div>

<!-- Opis Field -->
<div class="form-group">
    {!! Form::label('opis', 'Opis:') !!}
    <p>{{ $predavanje->opis }}</p>
</div>

<!-- Kolegij Id Field -->
<div class="form-group">
    {!! Form::label('kolegij_id', 'Kolegij Id:') !!}
    <p>{{ $predavanje->kolegij_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $predavanje->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $predavanje->updated_at }}</p>
</div>

