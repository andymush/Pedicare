<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https:cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>Pedicare</title>
  
</head>
<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
    <div class="container">
        <a href="#" class="navbar-brand">Pedicare</a>

        <button class="navbar-toddler"
         type="button" 
         data-bs-toggle="collapse" 
         data-bs-target="#navmenu">
         <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="#cart" class="nav-link">CART</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <!--showcase-->
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
                        <button class="btn btn-primary btn-lg">Add problem</button>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/bed.jpg" alt=""/>

            </div>  
        </div>

    </section>

    <!--newsletter-->
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between 
                align-items-centre">
                <h3 class="mb-3 mb-md-0">Sign up for our --newsletter--</h3>

                <div class="input-group news-input ">
                    <input
                    type="text" 
                    class="form-control"
                    placeholder="Enter Email"
                    />
                    <button
                     class="btn btn-dark btn-lg" 
                     type="button"
                    >
                    Submit
                </button>
                </div>
            </div>
        </section>

        <!--Boxes-->
        <section class="p-5">
            <div class="container">
                <div class="row text-centre">
                    <div class="col-md">
                        <div class="card bg-dark text-light">
                            <div class="card-body  text-centre">
                                <div class="hi mb-3">
                                <i class="bi bi-laptop"></i>
                                </div>
                                <h3 class="Card-title mb-3">
                                    Find Doc
                                </h3>
                                <p class="card-text">
                                    Find the doctor that is online
                                </p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div> 
                        </div>
                    </div>
                    <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body  text-centre">
                            <div class="hi mb-3">
                            <i class="bi bi-person-square"></i>
                            </div>
                            <h3 class="Card-title mb-3">
                                Find med
                            </h3>
                            <p class="card-text">
                                Find the prescribed medicine
                            </p>
                            <a href="#" class="btn btn-dark">Read more</a>
                        </div> 
                    </div>
                </div>
                    <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body  text-centre">
                            <div class="hi mb-3">
                            <i class="bi bi-people"></i>
                            </div>
                            <h3 class="Card-title mb-3">
                                common Diseases
                            </h3>
                            <p class="card-text">
                                Most contracted diseases in infants
                            </p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div> 
                    </div>
                </div>
                </div>
            </div>
        </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>   