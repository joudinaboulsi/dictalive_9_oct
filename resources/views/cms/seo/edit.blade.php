@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Edit {{ $page->page }} </h5>
                    <div class="card-body">
                        <form action="{{ route('seoUpdate', $page->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3 pb-3">

                                <label for="meta_title" class="form-label">Title</label>
                                <input class="form-control" type="text" id="meta_title" name="meta_title"
                                    value="{{ $page->meta_title }}" />

                            </div>

                            <div class="pt-3 pb-3">

                                <label for="meta_keywords" class="form-label">Meta keywords</label>
                                <textarea class="form-control" id="meta_keywords" name="meta_keywords" />{!! $page->meta_keywords !!} </textarea>

                            </div>

                            <div class="pt-3 pb-3">

                                <label for="meta_description" class="form-label">Meta description</label>
                                <textarea class="form-control" id="meta_description" name="meta_description" />{!! $page->meta_description !!} </textarea>

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($page->image)
                                    <img src="../assets/seo/{{ $page->image }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image" class="form-label">Image</label>
                                <input class="form-control" type="file" id="image" name="image" />

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
