<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $settings->id }}</p>
</div>

<!-- Google Field -->
<div class="form-group">
    {!! Form::label('google', 'Google:') !!}
    <p>{{ $settings->google }}</p>
</div>

<!-- Facebook Field -->
<div class="form-group">
    {!! Form::label('facebook', 'Facebook:') !!}
    <p>{{ $settings->facebook }}</p>
</div>

<!-- Disclaimer Field -->
<div class="form-group">
    {!! Form::label('disclaimer', 'Disclaimer:') !!}
    <p>{{ $settings->disclaimer }}</p>
</div>

