<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $contacts->name }}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $contacts->email }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $contacts->phone }}</p>
</div>

<!-- Country Field -->
<div class="form-group">
    {!! Form::label('country', 'Country:') !!}
    <p>{{ $contacts->country }}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $contacts->title }}</p>
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p>{{ $contacts->content }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $contacts->status }}</p>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{{ $contacts->created_by }}</p>
</div>

<!-- Updated By Field -->
<div class="form-group">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{{ $contacts->updated_by }}</p>
</div>

