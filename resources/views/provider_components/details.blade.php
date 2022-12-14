@extends('provider_layouts.app')

@section('title','Company Details')
@section('details_select','active')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Company Details</h2>
                            <a  href="{{url('provider/details/manage_details/')}}" class="au-btn au-btn-icon au-btn--blue">
                                <i class="zmdi zmdi-plus"></i>Add Details</a>
                        </div>
                    </div>
                </div>

                <div class="row m-t-30">
                    <div class="col-md-12">
                        <!-- DATA TABLE-->
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                <tr>
                                    <th>Cover Image </th>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>phone</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($result as $data)
                                    <tr>
                                        <td>
                                            @if($data->company_image!='')
                                                <img width="100px" src="{{asset('public/public/media/details/'.$data->company_image)}}"/>
                                            @endif
                                        </td>
                                        <td>{{ $data->company_name }}</td>
                                        <td>{{ $data->address }}</td>
                                        <td>{{ $data->phone }}</td>

                                        <td>{!! $data->des !!} </td>
                                        <td>
                                            <a href="{{url('provider/details/manage_details/')}}/{{$data->details_id}}" class="btn btn-info"> <i class="fas fa-edit"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection
@section('script')
    @if(Session::has('message'))
        <script>
            toastr.success("{!! Session::get('message') !!}");
        </script>
    @endif
@endsection
