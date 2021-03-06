<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    <textarea name="description" class="form-control my-editor">{!! old('description', isset($slider) ? $slider->description : '') !!}</textarea>
</div>

         <!-- Picture Field -->     
         <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('picture', 'Picture:') !!}
            <div id="picture-thumb">
            <img id="holder" src="{{ isset($slider) ? $slider->picture : '' }}" style="padding:10px;max-width:600px;max-height:300px">
            </div>
            <div class="input-group">
            <input class="form-control" type="text" id="picture" name="picture" value="{{ old('picture', isset($slider) ? $slider->picture : '') }}">
        <span class="input-group-append">
            <a id="lfm" data-input="picture" data-preview="holder" class="btn btn-primary text-white">
                <i class="fa fa-file"></i> Choose
            </a>
            </span>
        </div>
        </div>

<!-- Orderid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('orderid', 'Orderid:') !!}
    {!! Form::number('orderid', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
</div>
