@extends('master')
@section('header')
    <title>Dashboard | Users</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@php
    $users = DB::select('SELECT * FROM users');
    // dd($users);
@endphp

@section('content')
    <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Users</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Pending Users</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    {{-- <span class="pull-right">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user">
                                            <i class="fas fa-user-plus" aria-hidden="true"></i> Add new member</button>
                                    </span> --}}
                                    <h3>
                                        <i class="far fa-user"></i> All Users</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:80%">user details</th>
                                                    <th style="min-width:80%">User ID</th>
                                                    <th style="min-width:80%">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($users as $user)
                                                @if ($user->status != "accepted")
                                                <tr>
                                                    <td>
                                                        <div class="user_avatar_list d-none d-none d-lg-block"></div>
                                                        <h5>{{ $user->name }}</h5>
                                                        <p>{{ $user->email }}</p>
                                                        <p>{{ $user->type }}</p>
                                                    </td>
                                                    <td> {{ $user->user_id }}</td>
                                                    <td>
                                                        @if ($user->status == "pending")
                                                            <form action="{{ url('accept_user/'.$user->user_id) }}" method="POST" style="display: inline-block">
                                                                @csrf
                                                                <button class="w3-button w3-green w3-round"  type="submit">Accept</button>
                                                            </form>
                                                            <form action="{{ url('decline_user/'.$user->user_id) }}" method="POST" style="display: inline-block">
                                                                @csrf
                                                                <button class="w3-button w3-red w3-round"  type="submit">Decline</button>
                                                            </form>
                                                        </td>
                                                        @else
                                                        <button class="w3-button w3-red w3-round"  type="submit" disabled>Declined</button>
                                                        @endif
                                                    </tr>
                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
@endsection
