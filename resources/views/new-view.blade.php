@extends('include.include')

@push('head-link')
@vite("resources/css/products.css")
@endpush

@section('content')

<!-- Product section-->
<section class="py-5 container">
    <div><h1>{{$new->title}}</h1></div>
    <div><b>{{$new->des}}</b></div>
    <div>{{!!$new->content!!}}</div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>


@stop