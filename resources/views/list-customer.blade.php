@extends('layouts.template')

@section('content')

<!--Main layout-->
<main class="pt-4 mx-lg-5">
    <div class="container-fluid">

        <!--Grid row-->
        <div class="row wow fadeIn">

            <div class="col-md-12 title">
                <h3 class="title-style">Customers</h3>
            </div>

            <!-- row -->
            <div class="col-md-12">

                <!-- list -->
                <ul class="flex-subtitle">
                    <li class="mr-auto my-auto">
                        <p>
                            Manage your customers here.
                        </p>
                    </li> 
                    <li class="nav-item my-auto">
                        <div class="notif-badge-container">
                            <i class="far fa-bell notif-icon"></i>
                            <span class="badge-notif"></span>
                        </div>
                    </li>
                    <li class="nav-item nav-profile my-auto">
                        <a class="nav-link waves-effect" href="">
                            <div class="nav-profile-img">
                                <img src="{{asset('sources/favicon.png')}}" alt="image">
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-profile my-auto">
                        <a class="nav-link waves-effect" href="">
                            <div class="nav-profile-text">
                                <p class="mb-0">Nabiila</p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item nav-dropdown mt-1">
                        <i class="fas fa-chevron-down"></i>
                    </li>
                </ul>

            </div>

            <div class="col-md-12 mb-4 mt-4">

                <!--Card-->
                <div class="card card-style p-1">

                    <!--Card content-->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="title-card-list text-left">
                                    Customers List
                                    <span class="float-right">
                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search"  />
                                        <span class="errspan"><i class="fas fa-search"></i></span>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-filter">
                            <div class="col-sm-12 col-md-4 col-lg-3 order-2">
                                <div class="form-inline form-group">
                                    <label class="mr-2" for="filterGender">Gender</label>
                                    <select class="form-control" id="filterGender">
                                        <option disabled selected>All Gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-6 order-3">
                                <div class="form-inline form-group">
                                    <label class="mr-2" for="filterAddress">Address</label>
                                    <select class="form-control" id="filterAddress">
                                        <option disabled selected>All country, province, city, region, postal code</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-3 order-1 order-lg-3">
                                <div class="text-right">
                                    <a class="btn btn-submit ml-0 mr-0 mt-0" href="{{route('add-customer')}}"><span><i class="fas fa-plus mr-2"></i></span>Add Customer</a>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="table-responsive ml-1 mr-1">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%;">
                                                <input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;
                                            </th>
                                            <th style="width: 10%;">
                                                ID Number
                                                <span class="float-right"><i class="fas fa-sort"></i></span>
                                            </th>
                                            <th style="width: 15%;">
                                                Name
                                                <span class="float-right"><i class="fas fa-sort"></i></span>
                                            </th>
                                            <th style="width: 15%;">
                                                Gender
                                                <span class="float-right"><i class="fas fa-sort"></i></span>
                                            </th>
                                            <th style="width: 30%;">
                                                Address
                                                <span class="float-right"><i class="fas fa-sort"></i></span>
                                            </th>
                                            <th style="width: 15%;">
                                                Phone
                                                <span class="float-right"><i class="fas fa-sort"></i></span>
                                            </th>
                                            <th colspan="2" style="width: 10%; text-align: center;">
                                                Actions
                                                <span class="float-right"><i class="fas fa-sort"></i></span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000001</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000002</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000003</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000004</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000005</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000006</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000007</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000008</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000009</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                        <tr>
                                            <td><input type="checkbox" class="largerCheckbox" style="vertical-align: middle;" value=""/>&nbsp;</td>
                                            <td>0000010</td>
                                            <td>Nabiila Aqmarina</td>
                                            <td>Female</td>
                                            <td>Taman Sidoarjo No. 5, Sidoarjo</td>
                                            <td>+6285791553015</td>
                                            <td><i class="fas fa-pencil-alt"></i></td>
                                            <td><i class="fas fa-trash-alt"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-inline form-group pageNumber">
                                    <label class="mr-2" for="pageNumber">Showing</label>
                                    <select class="form-control" style="font-size: 14px;" id="pageNumber">
                                        <option>10</option>
                                        <option>15</option>
                                        <option>20</option>
                                    </select>
                                    <span class="ml-2">of 100</span>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <nav>
                                    <ul class="pagination pagination-circle float-right">
                                        <span class="my-auto pb-1"><i class="fas fa-chevron-left" style="color: #a5a5a5;"></i></span>
                                        <li class="page-item">
                                            <a class="page-link page-link-prev" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                                        </li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                        <span class="my-auto pb-1"><i class="fas fa-chevron-right"></i></span>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Card-->

            </div>

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

  @endsection