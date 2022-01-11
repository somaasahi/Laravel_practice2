<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Context Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('context', 'Context:') !!}
    {!! Form::textarea('context', null, ['class' => 'form-control']) !!}
</div>