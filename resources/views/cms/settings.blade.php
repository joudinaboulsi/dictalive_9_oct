@extends('layouts.admin')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <h5 class="card-header">Settings Page</h5>
                    <div class="card-body">
                        <form action="{{ route('settingsStore') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_header" class="form-label">Alt Logo Header </label>
                                    <input type="text" class="form-control" id="alt_header" name="alt_header"
                                        value="{{ $settings->alt_header }}" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="logo_header" class="form-label">Logo Header </label>
                                    <input type="file" class="form-control" id="logo_header" name="logo_header" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    @if ($settings->logo_header)
                                        <img src="{{ asset('assets/logo/' . $settings->logo_header) }}" alt=""
                                            width="100">
                                    @endif

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_footer" class="form-label">Alt Logo Footer </label>
                                    <input type="text" class="form-control" id="alt_footer" name="alt_footer"
                                        value="{{ $settings->alt_footer }}" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="logo_footer" class="form-label">Logo Footer</label>
                                    <input type="file" class="form-control" id="logo_footer" name="logo_footer" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    @if ($settings->logo_footer)
                                        <img src="{{ asset('assets/logo/' . $settings->logo_footer) }}" alt=""
                                            width="100">
                                    @endif

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_email" class="form-label">Alt Icon Email </label>
                                    <input type="text" class="form-control" id="alt_email" name="alt_email"
                                        value="{{ $settings->alt_email }}" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon_email" class="form-label">Icon Email</label>
                                    <input type="file" class="form-control" id="icon_email" name="icon_email" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    @if ($settings->icon_email)
                                        <img src="{{ asset('assets/logo/' . $settings->icon_email) }}" alt=""
                                            width="100">
                                    @endif

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="alt_phone" class="form-label">Alt Icon Phone </label>
                                    <input type="text" class="form-control" id="alt_phone" name="alt_phone"
                                        value="{{ $settings->alt_phone }}" />

                                </div>
                                <div class="pt-3 pb-3 col-6">
                                    <label for="icon_phone" class="form-label">Icon Phone</label>
                                    <input type="file" class="form-control" id="icon_phone" name="icon_phone" />

                                </div>

                                <div class="pt-3 pb-3 col-6">
                                    @if ($settings->icon_phone)
                                        <img src="{{ asset('assets/logo/' . $settings->icon_phone) }}" alt=""
                                            width="100">
                                    @endif

                                </div>

                            </div>




                            <div class="pt-3 pb-3">
                                <label for="description" class="form-label">Small text</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ $settings->description }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="address" class="form-label"> Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $settings->address }}" />
                            </div>

                            <div class="pt-3 pb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $settings->email }}" />
                            </div>



                            <div class="pt-3 pb-3">
                                <label for="phone" class="form-label">phone 1</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ $settings->phone }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="tel1" class="form-label">Tel 1</label>
                                <input type="text" class="form-control" id="tel1" name="tel1"
                                    value="{{ $settings->tel1 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="phone2" class="form-label">phone 2</label>
                                <input type="text" class="form-control" id="phone2" name="phone2"
                                    value="{{ $settings->phone2 }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="tel2" class="form-label">Tel 2</label>
                                <input type="text" class="form-control" id="tel2" name="tel2"
                                    value="{{ $settings->tel2 }}" />

                            </div>

                            <div class="pt-3 pb-3">
                                <label for="fb" class="form-label">Facebook</label>
                                <input type="text" class="form-control" id="fb" name="fb"
                                    value="{{ $settings->fb }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="insta" class="form-label">Instagram</label>
                                <input type="text" class="form-control" id="insta" name="insta"
                                    value="{{ $settings->insta }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    value="{{ $settings->linkedin }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="title_contact" class="form-label">Title contact</label>
                                <input type="text" class="form-control" id="title_contact" name="title_contact"
                                    value="{{ $settings->title_contact }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="link_contact" class="form-label">Text Link contact</label>
                                <input type="text" class="form-control" id="link_contact" name="link_contact"
                                    value="{{ $settings->link_contact }}" />

                            </div>
                            <div class="pt-3 pb-3">
                                <label for="url" class="form-label">url</label>
                                <input type="text" class="form-control" id="url" name="url"
                                    value="{{ $settings->url }}" />

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
