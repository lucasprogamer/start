@extends('layouts.adminex.base')


@section('content')
    <section class="page-heading">
        <h3 class="pull-left">Profiles</h3>
        <h3 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('profiles.create') !!}">Novo</a>
        </h3>
    </section>

    <div class="content">
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
