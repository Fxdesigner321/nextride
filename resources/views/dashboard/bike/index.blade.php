@extends('layouts.dashlayout')

@section('content')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
<div class="content-page">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <h4 class="font-weight-bold">bike</h4>
                    </div>
                    <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" id="exampleInputText"
                                               aria-describedby="textHelp" placeholder="Search bike">
                                        <a class="search-link" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                            </svg>
                                        </a>
                                    </div>
                                </form>
                                <a href="{{url('dashboard/bike/add')}}"
                                   class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                    </svg>
                                    Add bike
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-0">
                                <div class="d-flex justify-content-between align-items-center p-3">
                                    <h5 class="font-weight-bold">bike List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                        <tr class="">
                                            <th scope="col">
                                                Image
                                            </th>
                                            
                                <th scope="col">
                                    User
                                </th>
                                <th scope="col">
                                    Make
                                </th>
                                <th scope="col">
                                    Model
                                </th>
                                <th scope="col">
                                    Year
                                </th>
                                <th scope="col">
                                    License Plate
                                </th>
                                <th scope="col">
                                    Color
                                </th>
                                <th scope="col">
                                    Type
                                </th>
                                <th scope="col" class="text-right">
                                    Action
                                </th>
                                </tr>
                                </thead>
                                <tbody>
                                       
                                    @foreach ($bikes as $item)
                                    <tr class="white-space-no-wrap">
                                        <td class="">
                                            <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar rounded-circle" src="{{asset('dashasset/images/user/1.jpg')}}">
                                                </div>
                                                <div class="data-content">  
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$item->user_id}}</td>
                                        <td>{{$item->make}}</td>
                                        <td>{{$item->model}}</td>
                                        <td>{{$item->year_id}}</td>
                                        <td>{{$item->license_plate}}</td>
                                        <td>{{$item->color}}</td>
                                        <td>{{$item->type_id}}</td>
                                        <td>
                                            <div class="d-flex justify-content-end align-items-center">
                                                <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="View" href="customer-view.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary"
                                                         width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                    </svg>
                                                </a>
                                                <a class="" data-toggle="tooltip" data-placement="top" title=""
                                                   data-original-title="Edit" href="{{url('dashboard/customer/edit')}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4"
                                                         width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                                    </svg>
                                                </a>
                                                <a class="badge bg-danger" data-toggle="tooltip" data-placement="top"
                                                   title="" data-original-title="Delete" href="{{url('dashboard/bike/delete')}}/{{$item->id}}">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection