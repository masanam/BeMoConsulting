<!-- Google Field -->
<div class="form-group col-sm-6">
    {!! Form::label('google', 'Google:') !!}
    {!! Form::textarea('google', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::textarea('facebook', null, ['class' => 'form-control']) !!}
</div>

<!-- Disclaimer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disclaimer', 'Disclaimer:') !!}
    {!! Form::textarea('disclaimer', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.settings.index') }}" class="btn btn-secondary">Cancel</a>
</div>
