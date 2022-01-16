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
        class="user-image elevation-2" alt="User Image" style="width: 30%">
    </div>
</div>

