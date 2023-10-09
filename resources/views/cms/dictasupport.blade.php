@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Dictasupport Page</h5>
                    <div class="card-body">
                        <form action="{{ route('dictasupportStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_page" class="form-label">Tilte Page</label>
                                    <input type="text" class="form-control" id="title_page" name="title_page"
                                        value="{{ $service->title_page }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="subtitle_page" class="form-label">SubTilte Page</label>
                                    <input type="text" class="form-control" id="subtitle_page" name="subtitle_page"
                                        value="{{ $service->subtitle_page }}" />

                                </div>
                            </div>
                            <div class="divider divider-info">
                                <div class="divider-text">Section 1</div>
                            </div>

                            <div class="row">


                                <div class="pt-3 col-6">
                                    <label for="image" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>

                                    <input type="file" id="file" class="form-control" id="image"
                                        name="image" />

                                </div>
                                <div class="pt-3 pb-3 col-6"\>
                                    @if ($service->image)
                                        <img src="{{ asset('assets/service/' . $service->image) }}" alt=""
                                            width="100">
                                    @endif
                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section1" class="form-label">Title 1</label>
                                    <input type="text" class="form-control" id="title_section1" name="title_section1"
                                        value="{{ $service->title_section1 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="subtitle_section1" class="form-label">subtitle </label>
                                    <input type="text" class="form-control" id="subtitle_section1"
                                        name="subtitle_section1" value="{{ $service->subtitle_section1 }}" />

                                </div>
                                <div class="pb-3 pt-3 ">
                                    <label for="text_section1" class="form-label">Text </label>
                                    <textarea class="form-control" id="text_section1" name="text_section1">{!! $service->text_section1 !!}</textarea>

                                </div>
                            </div>


                            <div class="divider divider-info">
                                <div class="divider-text">Section 2</div>
                            </div>

                            <div class="row">

                                <div class="pt-3 pb-3 col-6">
                                    <label for="image2" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>

                                    <input type="file" class="form-control" id="image2" name="image2" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    @if ($service->image2)
                                        <img src="{{ asset('assets/service/' . $service->image2) }}" alt=""
                                            width="100">
                                    @endif
                                </div>




                                <div class="pt-3 pb-3">
                                    <label for="title_section2" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title_section2" name="title_section2"
                                        value="{{ $service->title_section2 }}" />

                                </div>


                            </div>
                            <div class="pt-3 pb-3">
                                <label for="text_section2" class="form-label">Text </label>
                                <textarea class="form-control" id="text_section2" name="text_section2">{!! $service->text_section2 !!}</textarea>
                            </div>
                            <div class="divider divider-info">
                                <div class="divider-text">Section 3</div>
                            </div>

                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="text_section3" class="form-label">Subtitle </label>
                                    <input type="text" class="form-control" id="text_section3" name="text_section3"
                                        value="{{ $service->text_section3 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section3" class="form-label">Title </label>
                                    <input type="text" class="form-control" id="title_section3" name="title_section3"
                                        value="{{ $service->title_section3 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="link" class="form-label">text link </label>
                                    <input type="text" class="form-control" id="link" name="link"
                                        value="{{ $service->link }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="url" class="form-label">url </label>
                                    <input type="text" class="form-control" id="url" name="url"
                                        value="{{ $service->url }}" />

                                </div>

                                <div class="divider divider-info">
                                    <div class="divider-text">Section Background</div>
                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="color" class="form-label">Background Blue</label>
                                    <input class="form-control" type="color" id="color" name="color"
                                        value="{{ $service->color }}">

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="color2" class="form-label">Background Gray 1</label>
                                    <input class="form-control" type="color" value="{{ $service->color2 }}"
                                        id="color2" name="color2">

                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="color3" class="form-label">Background Gray 2</label>
                                    <input class="form-control" type="color" value="{{ $service->color3 }}"
                                        id="color3" name="color3">

                                </div>
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
