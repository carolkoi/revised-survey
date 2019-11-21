<!-- Type Field -->
@if(isset($surveyType))
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', $surveyType->type, ['class' => 'form-control']) !!}
</div>
@else
    <div class="form-group col-sm-6">
        {!! Form::label('type', 'Type:') !!}
        {!! Form::text('type', null, ['class' => 'form-control']) !!}
    </div>
    @endif
<!-- Evaluation Field -->
<fieldset>
{{--    <legend>--}}
{{--        Evaluation Survey--}}
{{--    </legend>--}}
    @if(isset($surveyType))
        <div class="form-group col-sm-6"><br>

            {!! Form::label('status', 'Survey purposely for Evaluation:') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {!! Form::checkbox('status', $surveyType->status == 1 ? 1 : null, $surveyType->status == 1 ? true : false, ['class' => 'evaluation'])!!}
        </div>
    @else
        <div class="form-group col-sm-6"><br>
            {!! Form::label('evaluation', 'Survey purposely for Evaluation:') !!}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            {!! Form::checkbox('status') !!}
        </div>
    @endif
    @if(isset($surveyType))
        <div class="col-md-6 addRatingRange">
            <div id="InputContainer">
                <div class="row form-group div1">
                    <div class="col-md-6">
                        {!! Form::label('range_from', 'Range From:') !!}
                        {!! Form::number('range_from', 1, ['class' => 'form-control', 'min' => 1, 'max' => 1]) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('range_to', 'Range To:') !!}
                        {!! Form::number('range_to', $surveyType->status == 1 ? $surveyType->range_to : null, ['class' => 'form-control', 'max' => 10, 'min' => 2]) !!}
                    </div>
                </div>
            </div>

        </div>
    @else
        <div class="col-md-6 addRatingRange" style="display:none;">
            <div id="InputContainer">
                <div class="row form-group div1">
                    <div class="col-md-6">
                        {!! Form::label('range_from', 'Range From:') !!}
                        {!! Form::number('range_from', 1, ['class' => 'form-control', 'min' => 1, 'max' => 1]) !!}
                    </div>
                    <div class="col-md-6">
                        {!! Form::label('range_to', 'Range To:') !!}
                        {!! Form::number('range_to', null, ['class' => 'form-control', 'max' => 10, 'min' => 2]) !!}
                    </div>
                </div>
            </div>

        </div>
    @endif
</fieldset>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('surveyTypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
