@extends('master')
@section('header')
    <title>Dashboard | Users</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@php
    $projects = DB::select('SELECT * FROM projects');
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
                                <h1 class="main-title float-left">Projects</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Running Projects</li>
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
                                    <h3>
                                        <i class="far fa-user"></i> Running Projects</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:80%">Project Title</th>
                                                    <th style="min-width:80%">Project Id</th>
                                                    <th style="min-width:80%">Location</th>
                                                    <th style="min-width:80%">User Ratings</th>
                                                    <th style="min-width:80%">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($projects as $project)
                                                <tr>
                                                    <td>
                                                        <div class="user_avatar_list d-none d-none d-lg-block"></div>
                                                        <h5>{{ $project->name }}</h5>
                                                        <p>{{ $project->project_id }}</p>
                                                        <p>{{ $project->location }}</p>
                                                        <p>{{ $project->ratings }}</p>
                                                        <button class="w3-button w3-orange w3-round"  type="submit">View Details</button>
                                                    </td>
                                                    <td> {{ $user->user_id }}</td>
                                                    <td>
                                                        <button class="w3-button w3-green w3-round"  type="submit" disabled>Accepted</button>
                                                    </tr>
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
