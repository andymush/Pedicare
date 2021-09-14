@extends('layouts.app')

@section('content')

    <section class="bg-dark text-light p-lg-0 pt-lg-5 text-centre text-sm-start">
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
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div>
                                    <input name="type" type="text" class="form-control" value="" id="problem" placeholder="Describe your ailments" aria-describedby="type" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                        <br>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/sick.jpg" alt=""/>

            </div>  
        </div>

    </section>
    <hr>
    <h4 class="text-center text-dark">Common ailments and issues</h4><br>
    <div class="container align-items-center">
        <div class="">
           <div class="row align-items-center">
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                <div class="col-md-3 mb-3">
                    <button class="btn btn-outline-primary">Stomache ache</button>
                </div>
                
            </div>
        </div>
    </div>

@endsection