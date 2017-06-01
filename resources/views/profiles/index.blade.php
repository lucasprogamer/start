@extends('layouts.adminex.base')


@section('content')
    <section class="content-header">
        <h1 class="pull-left">Profiles</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('profiles.create') !!}">Add New</a>
        </h1>
    </section>
    <div class="content">
      @include('layouts.sidebar')
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('profiles.table')
            </div>
        </div>
    </div>
@endsection
