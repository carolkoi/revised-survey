<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
{{--<div class="form-group">--}}
{{--    {!! Form::label('slug', 'Slug:') !!}--}}
{{--    {!! Form::text('slug', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('upesi::approval-types.index') !!}" class="btn btn-default">Cancel</a>
</div>
