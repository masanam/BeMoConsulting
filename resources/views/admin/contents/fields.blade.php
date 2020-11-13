
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Orderid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    <textarea name="content" class="form-control my-editor">{!! old('content', isset($content) ? $content->content : '') !!}</textarea>
</div>

         <!-- Picture Field -->     
         <div class="form-group col-sm-12 col-lg-12">
        {!! Form::label('picture', 'Picture:') !!}
            <div id="picture-thumb">
            <img id="holder" src="{{ isset($menu) ? $menu->picture : '' }}" style="padding:10px;max-width:600px;max-height:300px">
            </div>
            <div class="input-group">
            <input class="form-control" type="text" id="picture" name="picture" value="{{ old('picture', isset($menu) ? $menu->picture : '') }}">
        <span class="input-group-append">
            <a id="lfm" data-input="picture" data-preview="holder" class="btn btn-primary text-white">
                <i class="fa fa-file"></i> Choose
            </a>
            </span>
        </div>
        </div>





<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admin.contents.index') }}" class="btn btn-secondary">Cancel</a>
</div>
