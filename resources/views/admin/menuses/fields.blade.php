<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Orderid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('link', 'Link:') !!}
    {!! Form::text('link', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    <textarea name="content" class="form-control my-editor">{!! old('content', isset($content) ? $content->content : '') !!}</textarea>
</div>


<!-- Meta Title Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_title', 'Meta Title:') !!}
    {!! Form::textarea('meta_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Meta Keyword Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('meta_keyword', 'Meta Keyword:') !!}
    {!! Form::textarea('meta_keyword', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Orderid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orderid', 'Orderid:') !!}
    {!! Form::number('orderid', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.menuses.index') }}" class="btn btn-secondary">Cancel</a>
</div>
