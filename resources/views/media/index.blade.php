@extends('layouts.adminex.base')

@section('content')
    <section class="page-heading">
        <h3 class="pull-left">Media</h3>
        <h3 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('media.create') !!}">Novo</a>
        </h3>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('media.table')
            </div>
        </div>
    </div>
@endsection
