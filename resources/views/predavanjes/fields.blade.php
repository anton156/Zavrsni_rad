<!-- Naziv Field -->
<div class="form-group col-sm-6">
    {!! Form::label('naziv', 'Naziv:') !!}
    {!! Form::text('naziv', null, ['class' => 'form-control']) !!}
</div>

<!-- Opis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opis', 'Opis:') !!}
    {!! Form::text('opis', null, ['class' => 'form-control']) !!}
</div>

<!-- Kolegij Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kolegij_id', 'Kolegij Id:') !!}
    {!! Form::select('kolegij_id', $kolegijItems, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('predavanjes.index') }}" class="btn btn-default">Cancel</a>
</div>
