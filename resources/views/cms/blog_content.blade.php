@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Blog Page</h5>
                <div class="card-body">
                  <form action="{{ route('blogStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
               
                    <div class="pt-3 pb-3">
                        <label for="title_blog" class="form-label">Tilte </label>
                        <input type="text" class="form-control" id="title_blog" name="title_blog" value="{{ $blog->title_blog }}"
                             />
                    
                    </div>

                  
                    <div class="pt-3 pb-3">
                        <label for="text_blog" class="form-label">Text</label>
                        <textarea class="form-control" id="text_blog" name="text_blog"
                            >{!! $blog->text_blog !!}</textarea>
                    
                    </div>
                    <div class="pt-3 pb-3">
                        <label for="text_read_more" class="form-label">Text Read More </label>
                        <input type="text" class="form-control" id="text_read_more" name="text_read_more" value="{{ $blog->text_read_more }}"
                             />
                    
                    </div>

                    
                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection