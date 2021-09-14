@extends('layouts.app')
@section('content')  
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-centre text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-centre justify-content-between">
                <div>
                    <h1>Why 
                        <span class="text-warning">Pedicare
                        </span></h1>
                        <p class="lead my-4">
                            Pedicare is the online medical assistant that aims in bringing medical attention at your door step.
                            Pedicare is here to ensure that every infant can get quality, secure and affordable medicine and wellness products online.
                            we deliver medication,supplements,personal baby care products,medical devices all over kenya.
                            wherever you are ,you can order all you need for your infant to live well and we will get them to you as fast and professionally.

                            
                        </p>
                        <div class="">
                            <a href="/problem" class="btn btn-primary btn-lg">Add problem</a>&nbsp;<br>
                        </div>
                        <br>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/bed.jpg" alt=""/>

            </div>  
        </div>

    </section>        
        <!--Boxes-->
    <section class="p-5">
        <div class="container">
            <div class="row text-centre">
                <div class="col-sm-4">
                    <a href="Doctors/doctors" class="btn btn-outline-primary text-center" style="width:100%; height:100%; padding:50px;">
                        <i class="bi bi-laptop"></i>
                        <h3 class="Card-title mb-3">
                            Find Doc
                        </h3>
                        <p class="card-text">
                            Find the doctor that is online
                        </p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="/medicines" class="btn btn-outline-primary text-center" style="width:100%; height:100%; padding:50px;">
                        <i class="bi bi-person-square"></i>
                        <h3 class="Card-title mb-3">
                            Find med
                        </h3>
                        <p class="card-text">
                            Find the prescribed medicine
                        </p>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="" class="btn btn-outline-primary text-center" style="width:100%; height:100%; padding:50px;">
                        <i class="bi bi-people"></i>                            
                        <h3 class="Card-title mb-3">
                            Get personal help
                        </h3>
                        <p class="card-text">
                            One on One with your medical practitioner
                        </p>
                    </a>
                </div>
                
            </div>
                
            
        </div>
    </section>

    <div class="row">
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between 
                align-items-centre">
                <h3 class="mb-3 mb-md-0">Sign up for our newsletter</h3>

                <div class="input-group news-input ">
                    <input type="text" class="form-control" placeholder="Enter Email"
                    />
                    <button
                        class="btn btn-dark " 
                        type="button"
                    >
                    Submit
                </button>
                </div>
            </div>
        </section>
    </div>

@endsection