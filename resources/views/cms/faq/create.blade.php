@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create</h5>
                <div class="card-body">
                  <form action="{{ route('faqStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
               
                    <div class="pt-3 pb-3">
                        <label for="title" class="form-label">Tilte Tab</label>
                        <input type="text" class="form-control" id="title" name="title" 
                            />
                    
                    </div>
                 

                    <div class="pt-3 pb-3">
                        <label for="description" class="form-label">Content Tab</label>
                        <textarea  class="form-control" id="description" name="description"
                          ></textarea>
                    
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