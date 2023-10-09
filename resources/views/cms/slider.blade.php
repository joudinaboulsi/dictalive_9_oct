@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Swipper Text </h5>
                    <div class="card-body">
                        <form action="{{ route('sliderStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="divider divider-info">
                                <div class="divider-text">Section 1</div>
                            </div>
                            <div class="row">
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider1" class="form-label">title 1</label>
                                    <input type="text" class="form-control" id="slider1" name="slider1"
                                        value="{{ $slider->slider1 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider2" class="form-label">title 2</label>
                                    <input type="text" class="form-control" id="slider2" name="slider2"
                                        value="{{ $slider->slider2 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider3" class="form-label">title 3</label>
                                    <input type="text" class="form-control" id="slider3" name="slider3"
                                        value="{{ $slider->slider3 }}" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider4" class="form-label">title 4</label>
                                    <input type="text" class="form-control" id="slider4" name="slider4"
                                        value="{{ $slider->slider4 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider5" class="form-label">title 5</label>
                                    <input type="text" class="form-control" id="slider5" name="slider5"
                                        value="{{ $slider->slider5 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider6" class="form-label">title 6</label>
                                    <input type="text" class="form-control" id="slider6" name="slider6"
                                        value="{{ $slider->slider6 }}" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider7" class="form-label">title 7</label>
                                    <input type="text" class="form-control" id="slider7" name="slider7"
                                        value="{{ $slider->slider7 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider8" class="form-label">title 8</label>
                                    <input type="text" class="form-control" id="slider8" name="slider8"
                                        value="{{ $slider->slider8 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider9" class="form-label">title 9</label>
                                    <input type="text" class="form-control" id="slider9" name="slider9"
                                        value="{{ $slider->slider9 }}" />

                                </div>
                            </div>



                            <div class="divider divider-info">
                                <div class="divider-text">Section 2</div>
                            </div>
                            <div class="row">
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider10" class="form-label">title 10</label>
                                    <input type="text" class="form-control" id="slider10" name="slider10"
                                        value="{{ $slider->slider10 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider11" class="form-label">title 11</label>
                                    <input type="text" class="form-control" id="slider11" name="slider11"
                                        value="{{ $slider->slider11 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider12" class="form-label">title 12</label>
                                    <input type="text" class="form-control" id="slider12" name="slider12"
                                        value="{{ $slider->slider12 }}" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider13" class="form-label">title 13</label>
                                    <input type="text" class="form-control" id="slider13" name="slider13"
                                        value="{{ $slider->slider13 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider14" class="form-label">title 14</label>
                                    <input type="text" class="form-control" id="slider14" name="slider14"
                                        value="{{ $slider->slider14 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider15" class="form-label">title 15</label>
                                    <input type="text" class="form-control" id="slider15" name="slider15"
                                        value="{{ $slider->slider15 }}" />

                                </div>
                            </div>

                            <div class="row">
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider16" class="form-label">title 16</label>
                                    <input type="text" class="form-control" id="slider16" name="slider16"
                                        value="{{ $slider->slider16 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider17" class="form-label">title 17</label>
                                    <input type="text" class="form-control" id="slider17" name="slider17"
                                        value="{{ $slider->slider17 }}" />

                                </div>
                                <div class="pt-3 pb-3 col-4">
                                    <label for="slider18" class="form-label">title 18</label>
                                    <input type="text" class="form-control" id="slider18" name="slider18"
                                        value="{{ $slider->slider18 }}" />

                                </div>
                            </div>
                            <div class="divider divider-info">
                                <div class="divider-text">Section colors </div>
                            </div>
                            <div class="pt-3 pb-3">
                                <label for="color" class="form-label">Background Gray</label>
                                <input class="form-control" type="color" id="color" name="color"
                                    value="{{ $slider->color }}">

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="color2" class="form-label">Background Blue</label>
                                <input class="form-control" type="color" id="color2" name="color2"
                                    value="{{ $slider->color2 }}">

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
