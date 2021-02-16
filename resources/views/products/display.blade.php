@extends('layouts.app')

@section('content')
 <div class="border" style="margin: 100px 150px 80px 150px;" style="margin">
    <h1 style="margin-block-start:30px"> Products welcome <h1>
      @if (($product->group)=="personal")
        @foreach ($product as $product)
            <div class="shadow-none p-4 mb-4 bg-light" >
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" , src="/assets/img/pimg/{{ $product-> p-img  }}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 ><a href="/product/{{ $product->id }}">{{ $product->name }}</h3>
                            <small style="font-size: 20px;">des is {{ $product -> des }}</small>
                            {{-- <small>Written on {{ $post->created_at }} by {{ $posts->user->name }}</small> --}}
                </div>
                
            </div>
        @endforeach
       
     @else
        <p>No post found</p>
    @endif
</div>
@endsection

 