@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Home Page</h5>
                    <div class="card-body">
                        <form action="{{ route('homeStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('post')
                            <div class="divider divider-info">
                                <div class="divider-text">Section 1</div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title_page" class="form-label">Title Page</label>
                                <input type="text" class="form-control" id="title_page" name="title_page"
                                    value="{{ $home->title_page }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="subtitle_page" class="form-label">SubTitle</label>
                                <input type="text" class="form-control" id="subtitle_page" name="subtitle_page"
                                    value="{{ $home->subtitle_page }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="text" class="form-label">text</label>
                                <textarea class="form-control" id="text" name="text">{!! $home->text !!}</textarea>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt_image" class="form-label">Alt Image</label>
                                <input type="text" class="form-control" id="alt_image" name="alt_image"
                                    value="{{ $home->alt_image }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->image)
                                    <img src="{{ asset('assets/home/' . $home->image) }}" width="100">
                                @endif
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="image" class="form-label pb-3">Image <span
                                        class="badge bg-label-danger">Size: 1195 * 350 px</span></label>

                                <input type="file" class="form-control" id="image" name="image" />

                            </div>
                            <div class="divider divider-info">
                                <div class="divider-text">Section Services</div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title1_service" class="form-label">title1</label>
                                <input type="text" class="form-control" id="title1_service" name="title1_service"
                                    value="{{ $home->title1_service }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="alt_icon1" class="form-label">Alt icon1</label>
                                <input type="text" class="form-control" id="alt_icon1" name="alt_icon1"
                                    value="{{ $home->alt_icon1 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->icon1_service)
                                    <img src="{{ asset('assets/home/' . $home->icon1_service) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="icon1_service" class="form-label pb-3">icon 1 <span
                                        class="badge bg-label-danger">Size: 150 * 150 px</span></label>

                                <input type="file" class="form-control" id="icon1_service" name="icon1_service" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="alt_icon2" class="form-label">Alt icon 2</label>
                                <input type="text" class="form-control" id="alt_icon2" name="alt_icon2"
                                    value="{{ $home->alt_icon2 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->icon2_service)
                                    <img src="{{ asset('assets/home/' . $home->icon2_service) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="icon2_service" class="form-label pb-3">icon 2 <span
                                        class="badge bg-label-danger">Size: 150 * 150 px</span></label>

                                <input type="file" class="form-control" id="icon2_service" name="icon2_service" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="alt_icon3" class="form-label">Alt icon 3</label>
                                <input type="text" class="form-control" id="alt_icon3" name="alt_icon3"
                                    value="{{ $home->alt_icon3 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->icon3_service)
                                    <img src="{{ asset('assets/home/' . $home->icon3_service) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="icon3_service" class="form-label pb-3">icon 3 <span
                                        class="badge bg-label-danger">Size: 150 * 150 px</span></label>

                                <input type="file" class="form-control" id="icon3_service" name="icon3_service" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title2_service" class="form-label">title 2 </label>
                                <input type="text" class="form-control" id="title2_service" name="title2_service"
                                    value="{{ $home->title2_service }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt_icon4" class="form-label">Alt icon 4</label>
                                <input type="text" class="form-control" id="alt_icon4" name="alt_icon4"
                                    value="{{ $home->alt_icon4 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->icon4_service)
                                    <img src="{{ asset('assets/home/' . $home->icon4_service) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="icon4_service" class="form-label pb-3">icon4 <span
                                        class="badge bg-label-danger">Size: 150 * 150 px</span></label>

                                <input type="file" class="form-control" id="icon4_service" name="icon4_service" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt_icon5" class="form-label">Alt icon 5</label>
                                <input type="text" class="form-control" id="alt_icon5" name="alt_icon5"
                                    value="{{ $home->alt_icon5 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->icon5_service)
                                    <img src="{{ asset('assets/home/' . $home->icon5_service) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="icon5_service" class="form-label pb-3">icon 5 <span
                                        class="badge bg-label-danger">Size: 150 * 150 px</span></label>

                                <input type="file" class="form-control" id="icon5_service" name="icon5_service" />

                            </div>



                            <div class="divider divider-info">
                                <div class="divider-text">Section Video</div>
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title_video" class="form-label">title Video</label>
                                <input type="text" class="form-control" id="title_video" name="title_video"
                                    value="{{ $home->title_video }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->video)
                                    <video width="320" height="240" controls>
                                        <source src="../assets/home/{{ $home->video }}" type="video/mp4">

                                    </video>
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="video" class="form-label">Video </label>
                                <input class="form-control" type="file" id="video" name="video" />

                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Section Dictalive</div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title_section4" class="form-label">title </label>
                                <input type="text" class="form-control" id="title_section4" name="title_section4"
                                    value="{{ $home->title_section4 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="content_section4" class="form-label">Content </label>
                                <textarea class="form-control" id="content_section4" name="content_section4" />{!! $home->content_section4 !!}</textarea>

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="link" class="form-label">link </label>
                                <input type="text" class="form-control" id="link" name="link"
                                    value="{{ $home->link }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="url_text" class="form-label">Url Text </label>
                                <input type="text" class="form-control" id="url_text" name="url_text"
                                    value="{{ $home->url_text }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="alt_image1_section4" class="form-label">Alt image 1</label>
                                <input type="text" class="form-control" id="alt_image1_section4"
                                    name="alt_image1_section4" value="{{ $home->alt_image1_section4 }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($home->image1_section4)
                                    <img src="{{ asset('assets/home/' . $home->image1_section4) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image1_section4" class="form-label pb-3">Image1 Left <span
                                        class="badge bg-label-danger">Size: 610 * 857 px</span></label>

                                <input type="file" class="form-control" id="image1_section4"
                                    name="image1_section4" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="alt_image2_section4" class="form-label">Alt image 2</label>
                                <input type="text" class="form-control" id="alt_image2_section4"
                                    name="alt_image2_section4" value="{{ $home->alt_image2_section4 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->image2_section4)
                                    <img src="{{ asset('assets/home/' . $home->image2_section4) }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image2_section4" class="form-label pb-3">Image 2 Right <span
                                        class="badge bg-label-danger">Size: 320 * 449 px</span></label>
                                <input type="file" class="form-control" id="image2_section4"
                                    name="image2_section4" />

                            </div>
                            <div class="divider divider-info">
                                <div class="divider-text">Section Blog</div>
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title_blog" class="form-label">title blog</label>
                                <input type="text" class="form-control" id="title_blog" name="title_blog"
                                    value="{{ $home->title_blog }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="subtitle_blog" class="form-label">subtitle blog</label>
                                <input type="text" class="form-control" id="subtitle_blog" name="subtitle_blog"
                                    value="{{ $home->subtitle_blog }}" />

                            </div>
                            <div class="divider divider-info">
                                <div class="divider-text">Image Footer</div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt_footer" class="form-label">Alt image Footer</label>
                                <input type="text" class="form-control" id="alt_footer" name="alt_footer"
                                    value="{{ $home->alt_footer }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($home->image_footer)
                                    <img src="{{ asset('assets/home/' . $home->image_footer) }}" width="100">
                                @endif
                            </div>


                            <div class="pt-3 pb-3">
                                <label for="image_footer" class="form-label">image footer <span
                                        class="badge bg-label-danger">Size: 1160 * 662 px</span></label>
                                <input type="file" class="form-control" id="image_footer" name="image_footer" />

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
