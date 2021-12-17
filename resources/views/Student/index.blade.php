
@extends('student/layout')
   @section('content')
   <!-- Content Row -->
   <div class="container my-5">
       <div class="heading d-flex justify-content-between my-5">
           <h1 class="h3 text-info fw-bold">STUDENT CRUD IN LARAVEL</h1>
           <a href="{{ route('student.create') }}" class="btn btn-primary my-3"><i class="fas fa-plus"></i>Add Student</a>
       </div>
       @if ($message = Session::get('success'))
       <div class="alert alert-success">
           <p>{{ $message }}</p>
       </div>
       @endif
       <div class="row">
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">S.N</th>
                       <th scope="col">Name</th>
                       
                       <th scope="col">Email</th>
                       <th  scope="col">Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                   @foreach ($Student as $Student)
                   <tr>
                       <th scope="row">{{ ++$i }}</th>
                       <td>{{ $Student->name }}</td>
                       
                       <td>{{ $Student->email }}</td>
                      
                       <td>
                           <form action="{{ route('student.destroy',$Student->id) }}" method="POST">
                               <!-- <a class="btn btn-info" href="{{ route('student.show',$Student->id) }}">Show</a> -->
                               <a class="btn btn-primary" href="{{ route('student.edit',$Student->id) }}">Edit</a>
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                       </td>
                   </tr>
                   @endforeach
               </tbody>
           </table>
       </div>
   </div>
   @endsection