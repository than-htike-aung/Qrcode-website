@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>User : {{$user->id}}</h1>
                </div>
                <div class="col-sm-6">

                    <a class="btn btn-primary float-right"
                       href="{!! route('users.edit',[$user->id]) !!}">
                        Edit Profile
                    </a>
                </div>

            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')
        <div class="card">

            <div class="card-body">
                <div class="row">
                    @include('users.show_fields')
                </div>
            </div>

        </div>
    </div>
@endsection
