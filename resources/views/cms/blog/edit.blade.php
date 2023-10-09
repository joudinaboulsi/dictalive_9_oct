@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit Blog Detail</h5>
                    <div class="card-body">
                        <form action="{{ route('blogDetailUpdate', $blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pt-3 pb-3">
                                <label for="title" class="form-label">Tilte Page</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $blog->title }}"  />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="date" class="form-label">Date</label>
                                <input type="text" class="form-control" id="date" name="date"
                                    value="{{ $blog->date }}"  />

                            </div>

                            
                            <div class="row">
                                <div class="pt-4 col-6">
                                    <label for="image_box" class="form-label pb-3">Image Thumbnail 1 <span
                                            class="badge bg-label-danger">Size: 610 * 831</span></label>
                                            <input type="file" class="form-control" id="image_box" name="image_box"
                                             />

                                </div>
                               

                                <div class="pt-3 pb-3 col-6">
                                    @if ($blog->image_box)
                                        <img src="{{ asset('assets/blog/'.$blog->image_box) }}" width="150">
                                    @endif

                                </div>

                                <div class="pt-4">
                                    <label for="alt_image_box" class="form-label pb-3">Alt Image Thumbnail </label>
                                    <input type="text" class="form-control" id="alt_image_box" name="alt_image_box" value="{{ $blog->alt_image_box }}"
                                          />
                                
                                </div>
                            </div>


                            <div class="row">
                                <div class="pt-4">
                                    <label for="alt_image" class="form-label pb-3">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image" name="alt_image" value="{{ $blog->alt_image }}"
                                          />
                                
                                </div>
                                <div class="pt-4 col-6">
                                    <label for="image" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 1320 * 180 px</span></label>
                                    <input type="file" class="form-control" id="image" name="image"
                                         />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    @if ($blog->image)
                                        <img src="{{ asset('assets/blog/' . $blog->image) }}" width="150">
                                    @endif

                                </div>

                                
                            </div>

                        
                            <div class="pt-4">
                                <label for="text" class="form-label pb-3">Content</label>
                                <textarea class="form-control" id="text" name="text"  />{!! $blog->text !!}</textarea>

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
