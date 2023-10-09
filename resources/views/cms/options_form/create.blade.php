@extends('layouts.admin')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create</h5>
                <div class="card-body">
                  <form action="{{ route('optionContactStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
               
                    <div class="pt-3 pb-3">
                        <label for="option" class="form-label">Tilte Tab</label>
                        <input type="text" class="form-control" id="option" name="option" />
                    
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