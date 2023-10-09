@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Faq Page</h5>
                    <div class="card-body">
                        <form action="{{ route('faqContentStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pt-3 pb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $page->title }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="subtitle" class="form-label">SubTitle </label>
                                <input type="text" class="form-control" id="subtitle" name="subtitle"
                                    value="{{ $page->subtitle }}" />

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
