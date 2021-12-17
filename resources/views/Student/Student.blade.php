@extends('Student/layout')
@section('content')
<div class="container my-5">
    <div class="row px-4">
        <form action="{{ route('student.store') }}" method="POST">
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-4">
                    <label for="clientname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
                </div>
              
               
            </div>
            <div class="row g-3 mb-3">
                <div class="col-4 ">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
                </div>
               
 
            </div>
            <button type='submit' class='btn btn-primary'>Save</button>
            
        </form>
    </div>
</div>
@endsection