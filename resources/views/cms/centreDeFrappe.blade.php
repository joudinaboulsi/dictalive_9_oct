@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Centre De Frappe Page</h5>
                    <div class="card-body">
                        <form action="{{ route('centreDeFrappeStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3 pb-3">
                                @if ($service_frappe->video)
                                    <video width="320" height="240" controls>
                                        <source src="../assets/service/{{ $service_frappe->video }}" type="video/mp4">

                                    </video>
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="video" class="form-label">Video </label>
                                <input class="form-control" type="file" id="video" name="video" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title_page" class="form-label">Title Page</label>
                                <input type="text" class="form-control" id="title_page" name="title_page"
                                    value="{{ $service_frappe->title_page }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="title_section1" class="form-label">Title Section 1</label>
                                <input type="text" class="form-control" id="title_section1" name="title_section1"
                                    value="{{ $service_frappe->title_section1 }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="text_section1" class="form-label">Text Section 1 </label>
                                <textarea class="form-control" id="text_section1" name="text_section1" />{!! $service_frappe->text_section1 !!}</textarea>

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="url_youtube" class="form-label">Link </label>
                                <input type="text" class="form-control" id="url_youtube" name="url_youtube"
                                    value="{{ $service_frappe->url_youtube }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="alt_image" class="form-label">Alt image </label>
                                <input type="text" class="form-control" id="alt_image" name="alt_image"
                                    value="{{ $service_frappe->alt_image }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($service_frappe->image)
                                    <img src="{{ asset('assets/service/' . $service_frappe->image) }}" width="100">
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image" class="form-label pb-3">Image <span
                                        class="badge bg-label-danger">Size: 1720 * 658 px</span></label>
                                <input type="file" id="file" class="form-control" id="image" name="image" />

                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Section Video

                                </div>
                            </div>
                            <div class="pt-3 pb-3">

                                @if ($service_frappe->video1)
                                    <video width="320" height="240" controls>
                                        <source src="../assets/service/{{ $service_frappe->video1 }}" type="video/mp4">

                                    </video>
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="video1" class="form-label">Video</label>
                                <input type="file" id="file" class="form-control" id="video1" name="video1" />

                            </div>



                            <div class="divider divider-info">
                                <div class="divider-text">Section Contact </div>
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title_contact" class="form-label">Title Section Contact</label>
                                <input type="text" class="form-control" id="title_contact" name="title_contact"
                                    value="{{ $service_frappe->title_contact }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="text_href" class="form-label">text link Section Contact</label>
                                <input type="text" class="form-control" id="text_href" name="text_href"
                                    value="{{ $service_frappe->text_href }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="href" class="form-label">Href Section Contact</label>
                                <input type="text" class="form-control" id="href" name="href"
                                    value="{{ $service_frappe->href }}" />

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
