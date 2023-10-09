@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">E-reputation Page</h5>
                    <div class="card-body">
                        <form action="{{ route('reputationStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3 pb-3">
                                <label for="title_page" class="form-label">Tilte Page</label>
                                <input type="text" class="form-control" id="title_page" name="title_page"
                                    value="{{ $service->title_page }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="subtitle_page" class="form-label">subTilte Page</label>
                                <input type="text" class="form-control" id="subtitle_page" name="subtitle_page"
                                    value="{{ $service->subtitle_page }}" />

                            </div>


                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 1</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section1" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section1" name="title_section1"
                                        value="{{ $service->title_section1 }}" />

                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="subtitle_section1" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle_section1"
                                        name="subtitle_section1" value="{{ $service->subtitle_section1 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="alt_image_s1" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image_s1" name="alt_image_s1"
                                        value="{{ $service->alt_image_s1 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->image_section1)
                                        <img src="../assets/service/{{ $service->image_section1 }}" alt=""
                                            width="100">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="image_section1" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>
                                    <input type="file" class="form-control" id="image_section1" name="image_section1" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="color" class="form-label">Background</label>
                                    <input type="color" class="form-control" id="color" name="color"
                                        value="{{ $service->color }}" />

                                </div>

                                <div class="pt-3 pb-3">
                                    <label for="text_section1" class="form-label">Text</label>
                                    <textarea class="form-control" name="text_section1">{!! $service->text_section1 !!}</textarea>

                                </div>
                            </div>
                            <!-- row 2 -->
                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 2</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section2" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section2" name="title_section2"
                                        value="{{ $service->title_section2 }}" />

                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="subtitle_section2" class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" id="subtitle_section2"
                                        name="subtitle_section2" value="{{ $service->subtitle_section2 }}" />

                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon1_section2" class="form-label pb-3">Checklist Icon <span
                                            class="badge bg-label-danger">Size: 50 * 30 px</span></label>
                                    <input type="file" class="form-control" id="icon1_section2"
                                        name="icon1_section2" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    @if ($service->icon1_section2)
                                        <img src="../assets/service/{{ $service->icon1_section2 }}" alt=""
                                            width="50">
                                    @endif
                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon2_section2" class="form-label pb-3">Checklist Icon <span
                                            class="badge bg-label-danger">Size: 50 * 30 px</span></label>

                                    <input type="file" class="form-control" id="icon2_section2"
                                        name="icon2_section2" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    @if ($service->icon2_section2)
                                        <img src="../assets/service/{{ $service->icon2_section2 }}" alt=""
                                            width="50">
                                    @endif
                                </div>



                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon3_section2" class="form-label pb-3">Checklist Icon <span
                                            class="badge bg-label-danger">Size: 50 * 30 px</span></label>

                                    <input type="file" class="form-control" id="icon3_section2"
                                        name="icon3_section2" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    @if ($service->icon3_section2)
                                        <img src="../assets/service/{{ $service->icon3_section2 }}" alt=""
                                            width="50">
                                    @endif
                                </div>




                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon4_section2" class="form-label pb-3">Checklist Icon <span
                                            class="badge bg-label-danger">Size: 50 * 30 px</span></label>

                                    <input type="file" class="form-control" id="icon4_section2"
                                        name="icon4_section2" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    @if ($service->icon4_section2)
                                        <img src="../assets/service/{{ $service->icon4_section2 }}" alt=""
                                            width="50">
                                    @endif
                                </div>


                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon5_section2" class="form-label pb-3">Checklist Icon <span
                                            class="badge bg-label-danger">Size: 50 * 30 px</span></label>

                                    <input type="file" class="form-control" id="icon5_section2"
                                        name="icon5_section2" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    @if ($service->icon5_section2)
                                        <img src="../assets/service/{{ $service->icon5_section2 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="li1_section2" class="form-label">List 1</label>
                                    <input type="text" class="form-control" id="li1_section2" name="li1_section2"
                                        value="{{ $service->li1_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li2_section2" class="form-label">List 2</label>
                                    <input type="text" class="form-control" id="li2_section2" name="li2_section2"
                                        value="{{ $service->li2_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li3_section2" class="form-label">List 3</label>
                                    <input type="text" class="form-control" id="li3_section2" name="li3_section2"
                                        value="{{ $service->li3_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li4_section2" class="form-label">List 4</label>
                                    <input type="text" class="form-control" id="li4_section2" name="li4_section2"
                                        value="{{ $service->li4_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li5_section2" class="form-label">List 5</label>
                                    <input type="text" class="form-control" id="li5_section2" name="li5_section2"
                                        value="{{ $service->li5_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title1_section2" class="form-label">title 1</label>
                                    <input type="text" class="form-control" id="title1_section2"
                                        name="title1_section2" value="{{ $service->title1_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="subtitle1_section2" class="form-label">subtitle 1</label>
                                    <input type="text" class="form-control" id="subtitle1_section2"
                                        name="subtitle1_section2" value="{{ $service->subtitle1_section2 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="percent1_section2" class="form-label">Percent 1</label>
                                    <input type="text" class="form-control" id="percent1_section2"
                                        name="percent1_section2" value="{{ $service->percent1_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="title2_section2" class="form-label">Title 2</label>
                                    <input type="text" class="form-control" id="title2_section2"
                                        name="title2_section2" value="{{ $service->title2_section2 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="subtitle2_section2" class="form-label">SubTitle 2</label>
                                    <input type="text" class="form-control" id="subtitle2_section2"
                                        name="subtitle2_section2" value="{{ $service->subtitle2_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="percent2_section2" class="form-label">percent 2 </label>
                                    <input type="text" class="form-control" id="percent2_section2"
                                        name="percent2_section2" value="{{ $service->percent2_section2 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="color2" class="form-label">Background</label>
                                    <input type="color" class="form-control" id="color2" name="color2"
                                        value="{{ $service->color2 }}" />

                                </div>
                            </div>
                            <!-- row 3 -->
                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 3</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section3" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section3" name="title_section3"
                                        value="{{ $service->title_section3 }}" />

                                </div>



                                <div class="pt-3 pb-3 col-6">
                                    <label for="li1_section3" class="form-label">List 1</label>
                                    <input type="text" class="form-control" id="li1_section3" name="li1_section3"
                                        value="{{ $service->li1_section3 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li2_section3" class="form-label">List 2</label>
                                    <input type="text" class="form-control" id="li2_section3" name="li2_section3"
                                        value="{{ $service->li2_section3 }}" />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image_section3)
                                        <img src="../assets/service/{{ $service->image_section3 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image_section3" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 712 * 1000 px</span></label>

                                    <input type="file" class="form-control" id="image_section3"
                                        name="image_section3" />

                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="alt_image_s3" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image_s3" name="alt_image_s3"
                                        value="{{ $service->alt_image_s3 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->image1_section3)
                                        <img src="../assets/service/{{ $service->image1_section3 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image1_section3" class="form-label pb-3">Image 1 <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>

                                    <input type="file" class="form-control" id="image1_section3"
                                        name="image1_section3" />

                                </div>



                                <div class="pt-3 pb-3">
                                    <label for="text_section3" class="form-label">Text</label>
                                    <textarea class="form-control" name="text_section3">{!! $service->text_section3 !!}</textarea>

                                </div>

                            </div>

                            <!-- row 4 -->
                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 4</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section4" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section4" name="title_section4"
                                        value="{{ $service->title_section4 }}" />

                                </div>



                                <div class="pt-3 pb-3 col-6">
                                    <label for="li1_section4" class="form-label">List 1</label>
                                    <input type="text" class="form-control" id="li1_section4" name="li1_section4"
                                        value="{{ $service->li1_section4 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li2_section4" class="form-label">List 2</label>
                                    <input type="text" class="form-control" id="li2_section4" name="li2_section4"
                                        value="{{ $service->li2_section4 }}" />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image_section4)
                                        <img src="../assets/service/{{ $service->image_section4 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image_section4" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 712 * 1000 px</span></label>

                                    <input type="file" class="form-control" id="image_section4"
                                        name="image_section4" />

                                </div>

                                <div class="pt-3 pb-3">
                                    <label for="alt_image_s4" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image_s4" name="alt_image_s4"
                                        value="{{ $service->alt_image_s4 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->image1_section4)
                                        <img src="../assets/service/{{ $service->image1_section4 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image1_section4" class="form-label pb-3">Image 1 <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>

                                    <input type="file" class="form-control" id="image1_section4"
                                        name="image1_section4" />

                                </div>


                                <div class="pt-3 pb-3">
                                    <label for="text_section4" class="form-label">Text</label>
                                    <textarea class="form-control" name="text_section4">{!! $service->text_section4 !!}</textarea>

                                </div>

                            </div>

                            <!-- row 5 -->
                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 5</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section5" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section5" name="title_section5"
                                        value="{{ $service->title_section5 }}" />

                                </div>



                                <div class="pt-3 pb-3 col-6">
                                    <label for="li1_section5" class="form-label">List 1</label>
                                    <input type="text" class="form-control" id="li1_section5" name="li1_section5"
                                        value="{{ $service->li1_section5 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li2_section5" class="form-label">List 2</label>
                                    <input type="text" class="form-control" id="li2_section5" name="li2_section5"
                                        value="{{ $service->li2_section5 }}" />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image_section5)
                                        <img src="../assets/service/{{ $service->image_section5 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image_section5" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 712 * 1000 px</span></label>

                                    <input type="file" class="form-control" id="image_section5"
                                        name="image_section5" />

                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="alt_image_s5" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image_s5" name="alt_image_s5"
                                        value="{{ $service->alt_image_s5 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->image1_section5)
                                        <img src="../assets/service/{{ $service->image1_section5 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image1_section5" class="form-label pb-3">Image 1 <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>

                                    <input type="file" class="form-control" id="image1_section5"
                                        name="image1_section5" />

                                </div>


                                <div class="pt-3 pb-3">
                                    <label for="text_section5" class="form-label">Text</label>
                                    <textarea class="form-control" name="text_section5">{!! $service->text_section5 !!}</textarea>

                                </div>

                            </div>

                            <!-- row 6 -->
                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 6</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section6" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section6" name="title_section6"
                                        value="{{ $service->title_section6 }}" />

                                </div>



                                <div class="pt-3 pb-3 col-6">
                                    <label for="li1_section6" class="form-label">List 1</label>
                                    <input type="text" class="form-control" id="li1_section6" name="li1_section6"
                                        value="{{ $service->li1_section6 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li2_section6" class="form-label">List 2</label>
                                    <input type="text" class="form-control" id="li2_section6" name="li2_section6"
                                        value="{{ $service->li2_section6 }}" />

                                </div>

                                <div class="pt-3 pb-3">
                                    @if ($service->image_section6)
                                        <img src="../assets/service/{{ $service->image_section6 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image_section6" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 712 * 1000 px</span></label>

                                    <input type="file" class="form-control" id="image_section6"
                                        name="image_section6" />

                                </div>

                                <div class="pt-3 pb-3">
                                    <label for="alt_image_s6" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image_s6" name="alt_image_s6"
                                        value="{{ $service->alt_image_s6 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->image1_section6)
                                        <img src="../assets/service/{{ $service->image1_section6 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image1_section6" class="form-label pb-3">Image 1 <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>

                                    <input type="file" class="form-control" id="image1_section6"
                                        name="image1_section6" />

                                </div>


                                <div class="pt-3 pb-3">
                                    <label for="text_section6" class="form-label">Text</label>
                                    <textarea class="form-control" name="text_section6">{!! $service->text_section6 !!}</textarea>

                                </div>

                            </div>
                            <!-- row 7 -->
                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 7</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section7" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section7" name="title_section7"
                                        value="{{ $service->title_section7 }}" />

                                </div>



                                <div class="pt-3 pb-3 col-6">
                                    <label for="li1_section7" class="form-label">List 1</label>
                                    <input type="text" class="form-control" id="li1_section7" name="li1_section7"
                                        value="{{ $service->li1_section7 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="li2_section7" class="form-label">List 2</label>
                                    <input type="text" class="form-control" id="li2_section7" name="li2_section7"
                                        value="{{ $service->li2_section7 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="alt_image_s7" class="form-label">Alt Image</label>
                                    <input type="text" class="form-control" id="alt_image_s7" name="alt_image_s7"
                                        value="{{ $service->alt_image_s7 }}" />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->image_section7)
                                        <img src="../assets/service/{{ $service->image_section7 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image_section7" class="form-label pb-3">Image <span
                                            class="badge bg-label-danger">Size: 712 * 1000 px</span></label>

                                    <input type="file" class="form-control" id="image_section7"
                                        name="image_section7" />

                                </div>
                                <div class="pt-3 pb-3">
                                    @if ($service->image1_section7)
                                        <img src="../assets/service/{{ $service->image1_section7 }}" alt=""
                                            width="50">
                                    @endif
                                </div>
                                <div class="pt-3 pb-3">
                                    <label for="image1_section7" class="form-label pb-3">Image 1 <span
                                            class="badge bg-label-danger">Size: 731 * 454 px</span></label>

                                    <input type="file" class="form-control" id="image1_section7"
                                        name="image1_section7" />

                                </div>


                                <div class="pt-3 pb-3">
                                    <label for="text_section7" class="form-label">Text</label>
                                    <textarea class="form-control" name="text_section7">{!! $service->text_section7 !!}</textarea>

                                </div>

                            </div>
                            <!-- row 8 -->
                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 8</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section8" class="form-label">Tilte</label>
                                    <input type="text" class="form-control" id="title_section8" name="title_section8"
                                        value="{{ $service->title_section8 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="color3" class="form-label">Color</label>
                                    <input type="color" class="form-control" id="color3" name="color3"
                                        value="{{ $service->color3 }}" />

                                </div>


                                <div class="pt-3 pb-3">
                                    <label for="text_section8" class="form-label">Text</label>
                                    <textarea class="form-control" name="text_section8">{!! $service->text_section8 !!}</textarea>

                                </div>

                            </div>

                            <div class="row">
                                <div class="divider divider-info">
                                    <div class="divider-text">Section 9</div>
                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="title_section9" class="form-label">subTilte</label>
                                    <input type="text" class="form-control" id="title_section9" name="title_section9"
                                        value="{{ $service->title_section9 }}" />

                                </div>



                                <div class="pt-3 pb-3 col-6">
                                    <label for="text_section9" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="text_section9" name="text_section9"
                                        value="{{ $service->text_section9 }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="link_section9" class="form-label">text link</label>
                                    <input type="text" class="form-control" id="link_section9" name="link_section9"
                                        value="{{ $service->link_section9 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="url_section9" class="form-label">Url</label>
                                    <input type="text" class="form-control" id="url_section9" name="url_section9"
                                        value="{{ $service->url_section9 }}" />

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
