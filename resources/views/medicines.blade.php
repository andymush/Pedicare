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
                            

                            
                        </p>
                        <form action="" method="GET">
                            @csrf
                            <div class="row g-2 align-items-center ">
                                
                                <div class="col-md-7 ms-2">
                                    <input name="Medicine" id="Medicine"  type="text" class="form-control shadow-none typeahead " style="border-color: #1c7af4 " placeholder="Search for your Medicine" required>
                                
                                </div>
                            
                                <div class="col-md-3 ">
                                    <button type="submit" class="btn btn-primary ">   
                                        <i class="fa fa-search"></i>                    
                                         Search
                                    </button>
                                </div> 
                            </div>
                
                        </form>
                        <br>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block ml-4 mb-2" src="img/med.jpeg" alt=""/>

            </div>  
        </div>

    </section>      
    <div class="container card mt-3">
        <div class="row">
            <u><h4 class="text-center">Categories</h4></u>
            <div class="col-sm-4 mb-3">
                <a href="Doctors/doctors" class="btn btn-outline-primary text-center" style="width:100%; height:100%">
                    
                    <h3 class="Card-title mb-3">
                        Find Doc
                    </h3>
                    <p class="card-text">
                        Find the doctor that is online
                    </p>
                </a>
            </div>
            <div class="col-sm-4 mb-3">
                <a href="Doctors/doctors" class="btn btn-outline-primary text-center" style="width:100%; height:100%; ">
                    
                    <h3 class="Card-title mb-3">
                        Find Doc
                    </h3>
                    <p class="card-text">
                        Find the doctor that is online
                    </p>
                </a>
            </div>
            
            <div class="col-sm-4 mb-3">
                <a href="Doctors/doctors" class="btn btn-outline-primary text-center" style="width:100%; height:100%; ">
                    
                    <h3 class="Card-title mb-3">
                        Find Doc
                    </h3>
                    <p class="card-text">
                        Find the doctor that is online
                    </p>
                </a>
            </div>
            <div class="col-sm-4 mb-3">
                <a href="Doctors/doctors" class="btn btn-outline-primary text-center" style="width:100%; height:100%; ">
                    
                    <h3 class="Card-title mb-3">
                        Find Doc
                    </h3>
                    <p class="card-text">
                        Find the doctor that is online
                    </p>
                </a>
            </div>
            <div class="col-sm-4 mb-3">
                <a href="Doctors/doctors" class="btn btn-outline-primary text-center" style="width:100%; height:100%; ">
                    
                    <h3 class="Card-title mb-3">
                        Find Doc
                    </h3>
                    <p class="card-text">
                        Find the doctor that is online
                    </p>
                </a>
            </div>
            <div class="col-sm-4 mb-3">
                <a href="Doctors/doctors" class="btn btn-outline-primary text-center" style="width:100%; height:100%; ">
                    
                    <h3 class="Card-title mb-3">
                        Find Doc
                    </h3>
                    <p class="card-text">
                        Find the doctor that is online
                    </p>
                </a>
            </div>

        </div>
    </div>
@endsection