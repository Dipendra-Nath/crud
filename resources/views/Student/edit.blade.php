@extends('student/layout')
@section('content')
<div class="container my-5">
    <div class="row px-4">
        <form action="{{ route('student.update',$student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3 mb-3">
                <div class="col-4">
                    <label for="clientname" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" aria-describedby="name">
                </div>
               
               
            </div>
            <div class="row g-3 mb-3">
                <div class="col-4 ">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" aria-describedby="email">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection