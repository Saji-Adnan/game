@extends('layout.adminLayout')
@section('title') Home
@endsection
@section('css')
    <style>
        a:link {
            text-decoration: none;
        }
    </style>

@endsection
@section('content')

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <div class="d-flex align-items-baseline mr-5">
                        <h3>Home</h3>
                    </div>
                </div>
                <!--end::Info-->

            </div>
        </div>
        <!--end::Subheader-->


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="gutter-b example example-compact">
                    <div class="d-flex flex-column-fluid">
                        <div class="container">
                            <div class="gutter-b example example-compact">


                                <div class="row">
                                    Welcome
                                </div>

                            </div>
                        </div>

                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>

        <div class="card-body card-custom card-stretch gutter-b">
            <div class="row">
{{--                <div class="col-md-12">--}}
{{--                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">--}}
{{--                        <canvas id="myChart3"  width="100%" height="50px"></canvas>--}}
{{--                    </div>--}}
{{--                </div>--}}
                    <div class="col-md-12">
                       <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                <canvas id="myChart2"  width="100%" height="50px"></canvas>
                    </div>
                         </div>
            </div>

        </div>
        @endsection


@section('script')

@endsection
