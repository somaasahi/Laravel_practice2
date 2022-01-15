<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('user_email', 'User Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<div class="col-sm-12">
    {!! Form::label('user_icon', 'User Icon:') !!}
    <div>
        <p>{{ basename($user->icon) }}</p>
        <img src="{{ asset(Auth::user()->icon)}}"
        class="user-image elevation-2" alt="User Image">
    </div>
</div>

<!-- Title Field -->
{{-- <div class="col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $post->title }}</p>
</div>

<!-- Context Field -->
<div class="col-sm-12">
    {!! Form::label('context', 'Context:') !!}
    <p>{{ $post->context }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $post->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $post->updated_at }}</p>
</div> --}}

