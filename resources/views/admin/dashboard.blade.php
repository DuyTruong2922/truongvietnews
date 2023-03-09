@extends('include.include')

@push('head-link')
    
@endpush

@section('content')

<div class="container py-5">
  <a type="button" class="btn btn-secondary" href="{{route('add')}}">Thêm sản phẩm</a>
  <table class="table table-striped ">
    <thead>
      <tr>
        <th scope="col">STT</th>
        <th scope="col">Tên</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Danh mục</th>
      </tr>
    </thead>
    <tbody>
      <tr>
@foreach ($new as $i)
      <th scope="row">{{$i->id}}</th>
      <td>{{$i->title}}</td>
      <td>{{$i->id}}</td>
      <td>{{$i->id}}</td>
@endforeach
        

      </tr>
    </tbody>
  </table>

</div>


    
@endsection

