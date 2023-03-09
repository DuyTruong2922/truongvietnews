@extends('include.include')

@push('head-link')
    
@endpush
@section('content')

<div class="container py-5">

    <form class="row" enctype="multipart/form-data" method="POST" action="addProduct">
        @csrf
        <div class="col">
            <div class="row">
                <div class="form-group col-9">
                    <label for="exampleFormControlInput1">Tiêu đề</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>

                <div class="form-group col">
                    <label for="exampleFormControlSelect1">danh mục</label>
                    <select class="form-control" id="kind" name="kind">
                      <option value="0">Mới</option>
                      <option value="1">Tin hot</option>
                    </select>
                </div>

            </div>
            <div class="row">

            
                <div class="form-group col-12 p-4">
                    <label for="exampleFormControlFile1">chọn ảnh thumbnail</label>
                    <input type="file" class="form-control-file" id="thumb" name="thumb" >
                </div>
            </div>
        
            <div class="form-group pb-2">
                <label for="exampleFormControlTextarea1">Mô tả bài viết</label>
                <textarea class="form-control" id="des" name="des" rows="5"></textarea>
            </div>

            <textarea id="content" name="content" class="pb-1"></textarea>
            <script>
                $(document).ready(function() {
                    $('#content').summernote(
                        {
                            placeholder: 'Nội dung',
                            height: 300,                 // set editor height
                            minHeight: null,             // set minimum height of editor
                            maxHeight: null,             // set maximum height of editor
                            focus: true                  // set focus to editable area after initializing summernote
                        }
                    );
                });
            </script>

            <button type="submit" class="btn btn-dark pt-2">Đăng</button>
        </div>
        
    
        

    
    </form>

</div>



@endsection
