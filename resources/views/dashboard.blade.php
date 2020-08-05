@extends('layouts.mainApp')

@section('content')


    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Blank</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="text-info">General Pages</li>
                <li class="active">Blank</li>
            </ol>
        </div>
        <div class="contain-section dashboard_v1">
         <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-primary">
                        <div class="icon"><i class="fa fa-users"></i></div>
                        <div class="count">143</div>
                        <h3>New Sign ups</h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-purple">
                        <div class="icon"><i class="fa fa-comments-o"></i></div>
                        <div class="count">59</div>
                        <h3>New Message</h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-pink">
                        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                        <div class="count">05</div>
                        <h3>New Updates</h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="tile-stats bg-inverse">
                        <div class="icon"><i class="fa fa-check-square-o"></i></div>
                        <div class="count">43</div>
                        <h3>New Today</h3>
                        <a href="javascript:"><p>View More <i class="fa fa-hand-o-right"></i></p></a>
                    </div>
                </div>
         </div>
        </div>

    </div>
    <!-- End Contain Section -->

@endsection