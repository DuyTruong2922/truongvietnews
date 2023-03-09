@extends('include.include')

@push('head-link')
    @vite("resources/css/home.css")
@endpush
@section('content')

<div class="container pt-5">
    <ul class="row card-desk " style="list-style-type: none;">
      @foreach ($new as $i)
          <li class="col-md-3 col-sm-6 pb-4">
            <a href="{{route('new',$i->id)}}" class="product" style="text-decoration: none">
              <div class="col mb-5">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src="{{asset('storage/'.$i->thumb)}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{$i->title}}</h5>
                          <p class="card-text">{{$i->des}}</p>
                          <p class="card-text"><small class="text-muted">{{$i->created_at	}}</small></p>
                        </div>
                      </div>
                    </div>
                  </div>

            </div>
            </a>
        </li>
     
        @endforeach

    </ul>
</div>



@stop