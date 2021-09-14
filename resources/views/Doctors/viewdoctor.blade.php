@extends('layouts.app')
@section('content')
    <div class="container-card">
        <div class="row ">
            <div class="col-md-4">
                <div class="card ml-5">
                    <div class="card-body">
                        <style> 
                        img {
                               border-radius: 50%;
                               width: 300px;
                               height: 300px;
                            }
                        </style>
                            <img src="/img/doc1.jpeg">                        
                            <br>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            
                                <div class="card-header">
                                        <h3>Dr.Matumbo kibo</h3>                                    
                                        <h6>matumbo@gmail.com</h6>          
                                </div>
                                <div class="card-body">
                                    <h5>location</h5>
                                    <button class="btn btn-success">Call</button>&nbsp;<button class="btn btn-primary">Message</button>
                                    <br><br><hr>
                                    <a class="btn btn-outline-primary btn-floating m-1" >
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                    <a class="btn btn-outline-primary" >
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a class="btn btn-outline-primary btn-floating m-1" >
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                    <a class="btn btn-outline-primary btn-floating m-1" >
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                </div>
                              

                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection