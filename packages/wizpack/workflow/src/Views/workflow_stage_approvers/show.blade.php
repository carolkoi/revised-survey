@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Workflow Stage Approvers
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('wizpack::workflow_stage_approvers.show_fields')
                    <a href="{!! route('upesi::stage-approvers.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
