@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
                <a href="/addproblem" class="btn btn-outline-primary text-center" style="width:100%; height:100%; padding:50px;">
                    <i class="bi bi-person-lines-fill"></i>
                    <h5 style="text-align: center;">Add problem</h5></a>
        </div>

        <div class="col-sm-4">            
            <a href="/Admin/Roles/allroles" class="btn btn-outline-primary text-center" style="width:100%; height:100%; padding:50px;">
                <i class="bi bi-journal-richtext"></i>
                <h5 style="text-align: center;">Find Doctor</h5></a>
        </div>

        
    </div>
    
</div>
@endsection