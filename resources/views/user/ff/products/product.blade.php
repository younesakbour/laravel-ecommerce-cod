@isset($data)
    

@foreach ( $data as $item )
                        

<div class="col-md-4 w-32 p-2   ">
    
    <div class="card mb-4  product-wap h-100 rounded-0" >
        <div class="card rounded-0" >
  
            <img class="card-img rounded-0 img-fluid"  src="{{ asset('imgs/'.$item->path)  }}" style="max-height: 400px;min-height:270px" >
        
            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                <ul class="list-unstyled">
                  
                    <li><a class="btn btn-success text-white mt-2" href="{{ route("single",$item->id) }}"><i class="far fa-eye"></i></a></li>
                   
                </ul>
            </div>
        </div>
        <div class="card-body" >
            <a href="{{ route("single",$item->id) }}" class="h3 text-decoration-none ">{{ $item->product_name }}</a>
            
      
            <p class="text-center mb-0 text-success"> ${{ $item->price }}</p>
        </div>
    </div>
</div>
@endforeach
@endisset