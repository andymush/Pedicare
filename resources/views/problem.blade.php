@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <form>
                <div class="row">
           
         
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="type" class="form-label">Property Type <span style="color: #842029;font-size: 20px">*</span> </label>
                            <input name="type" type="text" class="form-control" id="type" aria-describedby="type" required>
                            <div id="type" class="form-text">Enter the property type.</div>
        
                        </div>
                    </div>
        
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="PropertyType" class="form-label">Property type Description <span style="color: #842029;font-size: 20px">*</span></label>
                            <input name="description" type="text" class="form-control" id="description" aria-describedby="description" required>
                            <div id="description" class="form-text">Enter property type description.</div>
        
                           
                        </div>
                    </div>           
               
                </div>  
            </form>
        </div>
    </div>
    
</div>
@endsection