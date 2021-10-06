@extends('layouts.template')

@section('content')

<!--Main layout-->
<main class="pt-4 mx-lg-5">
    <div class="container-fluid">

        <!--Grid row-->
        <div class="row wow fadeIn">

            <div class="col-md-12 title">
                <h3 class="title-style">Add New Customers</h3>
            </div>

            <!-- row -->
            <div class="col-md-12">

                <!-- list -->
                <ul class="flex-subtitle">
                    <li class="mr-auto my-auto">
                        <p>
                            Fill the form to add new customers.
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
                                <p class="title-card">
                                    Customers
                                    <span><i class="fas fa-chevron-right"></i></span>
                                    <span>Add New Customer</span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="drag-area">
                                    <div class="icon"><i class="far fa-image"></i></div>
                                    <header>Browse Photo</header>
                                    <span>(JPEG, JPG, PNG)</span>
                                    <input type="file" hidden>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-upload ml-0 mr-0 mt-4" type="submit">Upload</button>
                                    <button class="btn btn-upload ml-0 mr-0" type="submit">Remove</button>
                                </div>
                            </div>
                            <div class="col-md-4 form-style">
                                <div class="form-outline">
                                    <p class="text-left">
                                        FULL NAME 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <input type="text" id="name" class="form-control" placeholder="Enter full name" />
                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        GENDER 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <div class="form-check form-check-inline">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="inlineRadioOptions"
                                            id="inlineRadio1"
                                            value="option1"
                                        />
                                        <label class="form-check-label" for="inlineRadio1">Male</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input
                                            class="form-check-input"
                                            type="radio"
                                            name="inlineRadioOptions"
                                            id="inlineRadio2"
                                            value="option2"
                                        />
                                        <label class="form-check-label" for="inlineRadio2">Female</label>
                                    </div>
                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        DATE OF BIRTH 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <input type="date" id="birth" class="form-control" placeholder="Enter full name" />
                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        IDENTITY TYPE 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <select class="form-control" id="identity">
                                        <option disabled selected>KTP/SIM/OTHER</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        IDENTITY NUMBER 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <input type="text" id="number" class="form-control" placeholder="Enter identity number" />
                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        EMAIL 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <input type="text" id="email" class="form-control" placeholder="Enter email" />
                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        PHONE NUMBER 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <button class="dropdown-toggle dropdown-phone" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                +62
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">+62</a>
                                                <a class="dropdown-item" href="#">+60</a>
                                            </div>
                                        </div>
                                        <input type="text" id="phone" class="form-control" placeholder="Enter phone number" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 form-style">
                                <div class="form-outline">
                                    <p class="text-left">
                                        ADDRESS 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <textarea type="text" id="address" class="form-control" placeholder="Enter address"></textarea>
                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        DETAIL ADDRESS 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <textarea type="text" id="detail-address" class="form-control" placeholder="Enter details address: (Street, Block, Number, etc)"></textarea>
                                </div>
                                <div class="card card-maps border-0 mt-4">
                                    <div class="card-header">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>Select pin from Maps</span>
                                    </div>
                                    <div class="card-body p-0">
                                        <iframe src="https://maps.google.com/maps?q=chicago&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                                            style="border:0; width: 100%; height: 100%;" allowfullscreen="0"></iframe>
                                    </div>

                                </div>
                                <div class="form-outline mt-4">
                                    <p class="text-left">
                                        INSTAGRAM 
                                        <span class="float-right">
                                            *required
                                        </span>
                                    </p>
                                    <input type="text" id="instagram" class="form-control" placeholder="Enter instagram" />
                                </div>
                                <div class="text-right mt-5">
                                    <button class="btn btn-submit ml-0 mr-0" type="submit">Add Customer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="force-overflow"></div>
                </div>
                <!--/.Card-->

            </div>

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

@endsection
