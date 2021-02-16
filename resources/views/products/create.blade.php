@extends('layouts.app')

@section('content')
 <div class="border" style="margin: 100px 150px 80px 150px;" style="margin">
   <h1 style="margin-block-start:30px"> Create Products  <h1>
      <form method="POST" action="/product" >
         @csrf
         <label style="font-size: 20px;" for="name"> Name</label>
         <input id="name" name="name" type="text" class = 'form-control', placeholder = 'name here'>
         <label style="font-size: 20px;" for="price"> Price</label>
         <input  id="price" name="price" type="text" class = 'form-control', placeholder = 'price text'>
         <label  style="font-size: 20px;" for="des"> Description</label>
         <input id="des" name="des" type="text" class = 'form-control', placeholder = 'Description here'>
         
         <div class='form-group' style="font-size: 20px;">
            <input type="file" style="font-size: 20px;" id="cover_image" name="cover_image" input type="submit">
            <br>
            <br>
         <button type="submit" style="font-size: 20px;" class= 'btn btn-primary' >Submit</button>
</div>
@endsection


