@extends('layouts.app')

@section('content')
 <div class="border" style="margin: 100px 150px 80px 150px;" style="margin">
    <h1 style="padding: 0 150px 0 150px;" >{{ $product->name }}<h1>
      {{-- <img style="width:100%" , src="/storage/cover_images/{{ $post->cover_image }}"> --}}
      
      {{ $product->des }}<br>
      {{ $product->price }}

    </div> 
    <div  class="border" style="margin: 100px 150px 80px 150px;">
    
     <button type="submit" class= 'btn btn-primary' href= '/product'> Go Back</button>
     {{--<button type="submit"  class="btn btn-success"> EDIT <a href="/posts/{{$post->{id}}}/edit"></a></button>--}}
    {{-- <a href= "{{'/posts/edit/'.$post->id}}" class="btn btn-success"> EDIT </a>
 
      <form method="POST" action="{{'/posts/'.$post->id}}" class='pull-right'>
         @csrf
          @method('DELETE')
        
          {{-- <input type="hidden" name="_method" value="delete"> --}}
          {{-- <button type="submit" class= 'btn btn-danger' >Delete</button> --}}
 
</form>  
    
     </div>
@endsection

