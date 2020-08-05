@extends('layouts.mainApp')

@section('content')


    <!-- Start Contain Section -->
<div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Suppliers</h2>
            <!--  Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Dashboard</a></li>
                
                <li class="active">Suppliers</li>
            </ol>
        </div>
        <div class="contain-section dashboard_v1">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>All Suppliers</h2>
                            <div></div>
                            <button type="button" class="btn btn-primary float-button-light waves-effect waves-button waves-float waves-light"data-toggle="modal" data-target=".addSupplier"><i class="fa fa-plus" aria-hidden="false"></i> Add Supplier</button>
                        </div>
                         @include('alerts')
                        <div class="section-body">

                            <table id="datatable-zero" class="display datatable-default">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Supplier Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Location</th>
                                    <th>Company</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                        @if(count($suppliers))
                                        @foreach ($suppliers as $sup)
                                <tbody>
                                <tr>
                                    <td>{{$sup->id }}</td>
                                    <td>{{$sup->supplier_name }}</td>
                                    <td>{{$sup->phone_number }}</td>
                                    <td>{{$sup->email }}</td>
                                    <td>{{$sup->address }}</td>
                                    <td>{{$sup->location }}</td>
                                    <td>{{$sup->Company }}</td>
                                    <td><div class="btn-group float-xs-left" data-toggle="buttons">
                                        <button type="button" class="btn btn-primary" href="{{route('suppliers.update',$sup->id)}} " data-toggle="modal" data-target=".editSupplier{{$sup->id}}" class="btn btn primary"><i class="fa fa-edit"></i> Edit</button>
                                        <button type="button" class="btn btn-success" href="{{route('suppliers.show',$sup->id)}} "data-toggle="modal" data-target="#supplierInfo{{$sup->id}}"><i class="fa fa-eye"></i> View</button>
                                        <button type="button" class="btn btn-danger" href="{{route('suppliers.destroy',$sup->id)}}"data-toggle="modal" data-target="#deleteSupplier{{$sup->id}}"><i class="fa fa-trash-o"></i> Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                    @else
                                            <tr><td colspan="8"> No Suppliers Found</td></tr>
                                     @endif 
                                </tbody>
                                <tfoot>
                                <tr>
                                     <th>No.</th>
                                    <th>Supplier Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Location</th>
                                    <th>Company</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!--ADD SUPPLIER MODAL-->
                            <div class="modal zoomIn animated addSupplier" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title">Add Supplier</h4>
                                        </div> <!--.Modal-header-->
                                        <div class="modal-body">
                                            
                                                    <div class="section-header">
                                                        <h2>Enter Supplier Information</h2>
                                                    </div>
                                                    <div class="section-body">
                                                        <form role="form" method="POST" action="{{route('suppliers.store')}}">
                                                          @csrf
                                                            <label>Supplier Name</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="supplier_name" name="supplier_name" value="{{old('supplier_name' )}}">
                                                            </div>

                                                            <label>Company Name</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="company" name="company" value="{{old('company' )}}">
                                                            </div>

                                                            <label>Email</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="email" name="email" value="{{old('email' )}}">
                                                            </div>

                                                             <label>Phone Number</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="phone_number" name="phone_number" value="{{old('phone_number' )}}">
                                                            </div>

                                                            <label>Address</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="address" name="address" value="{{old('address' )}}">
                                                            </div>

                                                            <label>Location</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="location" name="location" value="{{old('location' )}}">
                                                            </div>

                                                                                                 
                                                    </div> <!--.Section-Body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default float-button-light"
                                                        data-dismiss="modal">Close
                                                </button>
                                                <button type="submit" class="btn btn-success float-button-light">Save
                                                    changes
                                                </button>
                                            </div> <!--.Moday-Footer-->
                                        </form>
                                        </div><!--.Modal-Body-->
                                    </div><!--.Modal-Content-->
                                </div><!--.Modal-Dialogue-->
                            </div><!--.Main Modal-->
                        <!--./ADD SUPPLIER MODAL-->


                  
                  </div> <!-- Col lg -->
                  
                        <!--EDIT SUPPLIER MODAL-->
                            <div class="modal zoomIn animated editSupplier{{$sup->id}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title">Edit Supplier</h4>
                                        </div> <!--.Modal-header-->
                                        <div class="modal-body">
                                            
                                                    <div class="section-header">
                                                        <h2>Modify Supplier Information</h2>
                                                    </div>
                                                    <div class="section-body">
                                                        <form role="form" method="POST" action="{{route('suppliers.store')}}">
                                                          @csrf
                                                            <label>Supplier Name</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="{{($sup->supplier_name)}}" id="supplier_name" name="supplier_name">
                                                            </div>

                                                            <label>Company Name</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text"  id="company" name="company" value="{{($sup->company)}}">
                                                            </div>

                                                            <label>Email</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="email" name="email" value="{{($sup->email)}}">
                                                            </div>

                                                             <label>Phone Number</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="phone_number" name="phone_number" value="{{($sup->phone_number)}}">
                                                            </div>

                                                            <label>Address</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="address" name="address" value="{{($sup->address)}}">
                                                            </div>

                                                            <label>Location</label>
                                                            <div class="form-group">
                                                                <input class="form-control" type="text" value="" id="location" name="location" value="{{($sup->location)}}">
                                                            </div>

                                                                                                 
                                                    </div> <!--.Section-Body-->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default float-button-light"
                                                        data-dismiss="modal">Close
                                                </button>
                                                <button type="submit" class="btn btn-success float-button-light">Save
                                                    changes
                                                </button>
                                            </div> <!--.Moday-Footer-->
                                        </form>
                                        </div><!--.Modal-Body-->
                                    </div><!--.Modal-Content-->
                                </div><!--.Modal-Dialogue-->
                            </div><!--.Main Modal-->
                        <!--./EDIT SUPPLIER MODAL-->

            </div> <!--Div Class Row -->
        </div> <!--  Contain Section dashboarc v1 -->
</div> <!-- Container Fluid -->
    <!-- End Contain Section -->

@endsection