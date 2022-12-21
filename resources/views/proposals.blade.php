@extends('master')
@section('header')
    <title>Dashboard | Users</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@php
    $proposals = DB::select('SELECT * FROM proposals');
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
                                        <i class="far fa-user"></i> Project Proposals</h3>
                                </div>

                                <div class="card-header">
                                    <span class="pull-right">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modal_add_proposal">
                                            <i class="fas fa-user-plus" aria-hidden="true"></i>Create Proposal</button>
                                    </span>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_proposal" aria-hidden="true" id="modal_add_proposal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="{{route('proposals.add')}}" method="post" enctype="multipart/form-data">
                                                    @csrf    
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add Proposal</h5>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Project Name</label>
                                                                    <input class="form-control" name="name" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Location</label>
                                                                    <input class="form-control" name="location" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>
    

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Latitude</label>
                                                                    <input class="form-control" name="latitude" type="text" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Longitude</label>
                                                                    <input class="form-control" name="longitude" type="text" required />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Exec</label>
                                                                    <select name="exec" class="form-control" required>
                                                                        <option value="" disabled>- select -</option>
                                                                        <optgroup label="Execution Agency">
                                                                            <option value="1">LGED</option>
                                                                            <option value="2">RDA</option>
                                                                            <option value="3">BREB</option>
                                                                            <option value="4">BWDB</option>
                                                                            <option value="5">BPDB</option>
                                                                            <option value="6">BTRC</option>
                                                                            <option value="7">BBA</option>
                                                                            <option value="8">PWD</option>
                                                                            <option value="9">LGD</option>
                                                                            <option value="10">MOEDU</option>
                                                                            <option value="11">ECNEC</option>
                                                                            <option value="12">MOP</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Cost</label>
                                                                    <input class="form-control" name="cost" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                    
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Goal</label>
                                                                    <input class="form-control" name="goal" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Timespan</label>
                                                                    <input class="form-control" name="time_span" type="text" />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Proposal Date</label>
                                                                    <input class="form-control" name="proposal_date" type="text" />
                                                                </div>
                                                            </div>

                                                        </div>

                                                     

                                                    </div>

                                                    <div class="modal-footer">
                                                       
                                                            <button type="submit" class="btn btn-primary">Add proposal</button>
                                    
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <h3>
                                        <i class="far fa-user"></i> All Proposed Projects</h3>
                                </div>


                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-bordered table-hover display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:80%">Project Name</th>
                                                    <th style="min-width:80%">Project Id</th>
                                                    <th style="min-width:80%">Goal</th>
                                                    <th style="min-width:80%">Location</th>
                                                    <th style="min-width:80%">Estimated Cost</th>
                                                    <th style="min-width:80%">Proposal Date</th>
                                                    <th style="min-width:80%">Timespan</th>
                                                    <th style="min-width:80%">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($proposals as $proposal)
                                                @if ($proposal->status == "pending")
                                                <tr>
                                                    <td>
                                                        <h5>{{ $proposal->name }}</h5>
                                                    </td>
                                                        <td><p>{{ $proposal->project_id }}</p></td>
                                                        <td><p>{{ $proposal->goal }}</p></td>
                                                        <td><p>{{ $proposal->location }}</p></td>
                                                        <td><p>{{ $proposal->cost }}</p></td>
                                                        <td><p>{{ $proposal->proposal_date }}</p></td>
                                                        <td><p>{{ $proposal->timespan }}</p></td>
                                                        <td>
                                                            {{-- <button class="w3-button w3-orange w3-round"  type="submit">Edit</button> --}}
                                                            @if ($proposal->status == "pending")
                                                            <form action="{{ url('proposals/accept/'.$proposal->project_id) }}" method="POST" style="display: inline-block">
                                                                @csrf
                                                                <button class="w3-button w3-green w3-round"  type="submit">Accept</button>
                                                            </form>
                                                            <form action="{{ url('proposals/decline/'.$proposal->project_id) }}" method="POST" style="display: inline-block">
                                                                @csrf
                                                                <button class="w3-button w3-red w3-round"  type="submit">Decline</button>
                                                            </form>
                                                            @endif
                                                        </td>
                                                    </tr>
                                                    @endif
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end table-responsive-->

                                </div>
                                <!-- end card-body-->
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
