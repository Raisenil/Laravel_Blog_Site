@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                @php
                                    $ContactCount = App\Models\Contact::count();
                                @endphp
                                <p class="text-truncate font-size-14 mb-2">Emails</p>
                                <h4 class="mb-2">{{ $ContactCount }}</h4>
                            </div>
                            <div class="avatar-sm">
                                <span class="avatar-title bg-light text-primary rounded-3">
                                    <i class="ri-user-3-line font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div><!-- end cardbody -->
                </div><!-- end card -->
            </div><!-- end col -->

        </div><!-- end row -->


        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title mb-4">All Transactions</h4>

                        <div class="table-responsive">
                            <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                    @php
                                        $allData = App\Models\Contact::orderBy('created_at','desc')->orderBy('id','desc')->get();
                                    @endphp
                                    @foreach($allData as $item)
                                    <tr>

                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{ route('show.message',$item->id) }}" class="btn btn-info sm" title="Show Message"><i class="ri-message-fill"></i></a>

                                            <a href="{{ route('delete.message',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete"><i class="fas fa-trash"></i></a>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> <!-- end table -->
                        </div>
                    </div><!-- end card -->
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>

</div>

@endsection
