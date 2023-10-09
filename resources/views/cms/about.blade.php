@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Nous Connaitre Page</h5>
                    <div class="card-body">
                        <form action="{{ route('nousConnaitreStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="divider divider-info">
                                <div class="divider-text">Section 1</div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title1_page" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title1_page" name="title1_page"
                                    value="{{ $about->title1_page }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="title2_page" class="form-label">SubTitle </label>
                                <input type="text" class="form-control" id="title2_page" name="title2_page"
                                    value="{{ $about->title2_page }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="content_page" class="form-label">Content </label>
                                <textarea class="form-control" id="content_page" name="content_page" />{!! $about->content_page !!}</textarea>

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt1" class="form-label">Alt Image1 </label>
                                <input type="text" class="form-control" id="alt1" name="alt1"
                                    value="{{ $about->alt1 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($about->image1)
                                    <img src="../assets/about/{{ $about->image1 }}" width="100">
                                @endif
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="image1" class="form-label pb-3">Image1 <span
                                        class="badge bg-label-danger">Size: 500* 500 px</span></label>
                                <input type="file" class="form-control" id="image1" name="image1" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt2" class="form-label">Alt Image2 </label>
                                <input type="text" class="form-control" id="alt2" name="alt2"
                                    value="{{ $about->alt2 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($about->image2)
                                    <img src="../assets/about/{{ $about->image2 }}" width="100">
                                @endif
                            </div>


                            <div class="pt-3 pb-3">
                                <label for="image2" class="form-label pb-3">Image 2 <span
                                        class="badge bg-label-danger">Size: 500* 500 px</span></label>
                                <input type="file" class="form-control" id="image2" name="image2" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($about->image3)
                                    <img src="../assets/about/{{ $about->image3 }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image3" class="form-label pb-3">Image 3 <span
                                        class="badge bg-label-danger">Size: 500* 500 px</span></label>
                                <input type="file" class="form-control" id="image3" name="image3" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt3" class="form-label">Alt Image3 </label>
                                <input type="text" class="form-control" id="alt3" name="alt3"
                                    value="{{ $about->alt3 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($about->image4)
                                    <img src="../assets/about/{{ $about->image4 }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image4" class="form-label pb-3">Image 4 <span
                                        class="badge bg-label-danger">Size: 500* 500 px</span></label>
                                <input type="file" class="form-control" id="image4" name="image4" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt4" class="form-label">Alt Image 4 </label>
                                <input type="text" class="form-control" id="alt4" name="alt4"
                                    value="{{ $about->alt4 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                @if ($about->shape)
                                    <img src="../assets/about/{{ $about->shape }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="shape" class="form-label pb-3">Shape <span
                                        class="badge bg-label-danger">Size: 132* 132 px</span></label>
                                <input type="file" class="form-control" id="shape" name="shape" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt_shape" class="form-label">Alt shape </label>
                                <input type="text" class="form-control" id="alt_shape" name="alt_shape"
                                    value="{{ $about->alt_shape }}" />

                            </div>
                            <div class="divider divider-info">
                                <div class="divider-text">Section Video</div>
                            </div>
                            <div class="pt-3 pb-3">
                                @if ($about->video)
                                    <video width="320" height="240" controls>
                                        <source src="../assets/about/{{ $about->video }}" type="video/mp4">

                                    </video>
                                @endif

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="video" class="form-label">Video </label>
                                <input class="form-control" type="file" id="video" name="video" />

                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Section 3</div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title_description" class="form-label">Title </label>
                                <input type="text" class="form-control" id="title_description"
                                    name="title_description" value="{{ $about->title_description }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="text_description" class="form-label">Text </label>
                                <textarea class="form-control" id="text_description" name="text_description" />{!! $about->text_description !!}</textarea>

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($about->image1_description)
                                    <img src="../assets/about/{{ $about->image1_description }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image1_description" class="form-label pb-3">Image1 <span
                                        class="badge bg-label-danger">Size: 516 * 624 px</span></label>
                                <input type="file" class="form-control" id="image1_description"
                                    name="image1_description" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt1_desc" class="form-label">Alt Image 1 </label>
                                <input type="text" class="form-control" id="alt1_desc" name="alt1_desc"
                                    value="{{ $about->alt1_desc }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($about->image2_description)
                                    <img src="../assets/about/{{ $about->image2_description }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image2_description" class="form-label pb-3">Image 2 <span
                                        class="badge bg-label-danger">Size: 140 * 197 px</span></label>
                                <input type="file" class="form-control" id="image2_description"
                                    name="image2_description" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt2_desc" class="form-label">Alt Image 2 </label>
                                <input type="text" class="form-control" id="alt2_desc" name="alt2_desc"
                                    value="{{ $about->alt2_desc }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($about->image3_description)
                                    <img src="../assets/about/{{ $about->image3_description }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image3_description" class="form-label pb-3">Image 3 <span
                                        class="badge bg-label-danger">Size: 220 * 293 px</span></label>
                                <input type="file" class="form-control" id="image3_description"
                                    name="image3_description" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="alt3_desc" class="form-label">Alt Image 3 </label>
                                <input type="text" class="form-control" id="alt3_desc" name="alt3_desc"
                                    value="{{ $about->alt3_desc }}" />

                            </div>

                            <div class="divider divider-info">
                                <div class="divider-text">Section 4</div>
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="small_title_portfolio" class="form-label">Small Title </label>
                                <input type="text" class="form-control" id="small_title_portfolio"
                                    name="small_title_portfolio" value="{{ $about->small_title_portfolio }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title_portfolio" class="form-label">Title </label>
                                <input type="text" class="form-control" id="title_portfolio" name="title_portfolio"
                                    value="{{ $about->title_portfolio }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="text_portfolio" class="form-label">Text </label>
                                <textarea class="form-control" id="text_portfolio" name="text_portfolio" />{!! $about->text_portfolio !!}</textarea>

                            </div>


                            <div class="pt-3 pb-3">
                                @if ($about->image1_portfolio)
                                    <img src="../assets/about/{{ $about->image1_portfolio }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image1_portfolio" class="form-label pb-3">Image 1 <span
                                        class="badge bg-label-danger">Size: 746 * 949 px</span></label>
                                <input type="file" class="form-control" id="image1_portfolio"
                                    name="image1_portfolio" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt1_portfolio" class="form-label">Alt Image 1 </label>
                                <input type="text" class="form-control" id="alt1_portfolio" name="alt1_portfolio"
                                    value="{{ $about->alt1_portfolio }}" />

                            </div>




                            <div class="pt-3 pb-3">
                                <label for="portfolio_title1" class="form-label">Small title 1 </label>
                                <input type="text" class="form-control" id="portfolio_title1" name="portfolio_title1"
                                    value="{{ $about->portfolio_title1 }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="portfolio_date1" class="form-label">Date 1 </label>
                                <input type="text" class="form-control" id="portfolio_date1" name="portfolio_date1"
                                    value="{{ $about->portfolio_date1 }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                @if ($about->image2_portfolio)
                                    <img src="../assets/about/{{ $about->image2_portfolio }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image2_portfolio" class="form-label pb-3">Image 2<span
                                        class="badge bg-label-danger">Size: 746 * 949 px</span></label>
                                <input type="file" class="form-control" id="image2_portfolio"
                                    name="image2_portfolio" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt2_portfolio" class="form-label">Alt Image 2 </label>
                                <input type="text" class="form-control" id="alt2_portfolio" name="alt2_portfolio"
                                    value="{{ $about->alt2_portfolio }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="portfolio_title2" class="form-label">Small title 2 </label>
                                <input type="text" class="form-control" id="portfolio_title2" name="portfolio_title2"
                                    value="{{ $about->portfolio_title2 }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="portfolio_date2" class="form-label">Date 2 </label>
                                <input type="text" class="form-control" id="portfolio_date2" name="portfolio_date2"
                                    value="{{ $about->portfolio_date2 }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                @if ($about->image3_portfolio)
                                    <img src="../assets/about/{{ $about->image3_portfolio }}" width="100">
                                @endif
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="image3_portfolio" class="form-label pb-3">Image 3<span
                                        class="badge bg-label-danger">Size: 746 * 949 px</span></label>
                                <input type="file" class="form-control" id="image3_portfolio"
                                    name="image3_portfolio" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="alt3_portfolio" class="form-label">Alt Image 3 </label>
                                <input type="text" class="form-control" id="alt3_portfolio" name="alt3_portfolio"
                                    value="{{ $about->alt3_portfolio }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="portfolio_title3" class="form-label">Small title 3 </label>
                                <input type="text" class="form-control" id="portfolio_title3" name="portfolio_title3"
                                    value="{{ $about->portfolio_title3 }}" />

                            </div>


                            <div class="pt-3 pb-3">
                                <label for="portfolio_date3" class="form-label">Date 3 </label>
                                <input type="text" class="form-control" id="portfolio_date3" name="portfolio_date3"
                                    value="{{ $about->portfolio_date3 }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="color" class="form-label">Color </label>
                                <input type="color" class="form-control" id="color" name="color"
                                    value="{{ $about->color }}" />

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
