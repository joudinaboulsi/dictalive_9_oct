@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Contact Page</h5>
                    <div class="card-body">
                        <form action="{{ route('contactStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="pt-3 pb-3">
                                <label for="title_page" class="form-label">Tilte Page</label>
                                <input type="text" class="form-control" id="title_page" name="title_page"
                                    value="{{ $contact->title_page }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="small_text" class="form-label">SubTilte</label>
                                <input type="text" class="form-control" id="small_text" name="small_text"
                                    value="{{ $contact->small_text }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title_contact" class="form-label">Content </label>
                                <input type="text" class="form-control" id="title_contact" name="title_contact"
                                    value="{{ $contact->title_contact }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="phone" class="form-label">phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ $contact->phone }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="url_phone" class="form-label">Url phone</label>
                                <input type="text" class="form-control" id="url_phone" name="url_phone"
                                    value="{{ $contact->url_phone }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ $contact->email }}" />
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="location" class="form-label"> Address</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ $contact->location }}" />
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
