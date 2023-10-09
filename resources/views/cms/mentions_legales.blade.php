@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Mentions Legales section</h5>
                    <div class="card-body">
                        <form action="{{ route('mentionsStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pt-3 pb-3">
                                <label for="title_page" class="form-label">Tilte Page</label>
                                <input type="text" class="form-control" id="title_page" name="title_page"
                                    value="{{ $legales->title_page }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="subtitle_page" class="form-label">SubTilte Page</label>
                                <input type="text" class="form-control" id="subtitle_page" name="subtitle_page"
                                    value="{{ $legales->subtitle_page }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="content" class="form-label">Content Page</label>
                                <textarea class="form-control" id="content" name="content">{!! $legales->content !!}</textarea>

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
