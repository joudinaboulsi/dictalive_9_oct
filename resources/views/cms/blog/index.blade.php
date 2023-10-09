@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Striped Rows -->
    <div class="card">

        <h5 class="card-header">Blog Details Page</h5>
        <div class="card-header">
            <a href="{{ route('blogCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                     <th>Title</th>
                     
                     <th>Date </th>
                    
                     <th>Content </th>
                   
                     <th>Image Thumbnail </th>
                     <th>Alt Image Thumbnail </th>

                    
                     <th>Image  </th>
                     <th>Alt Image </th>

                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($blogs as $blog)
                        <tr>
                            <td>{{$blog->title}}</td>
                           
                           
                            <td>{{ $blog->date }}</td>
                            <td>{!! $blog->text !!}</td>
                            <td>
                                @if ($blog->image_box)
                                <img src="{{ asset('assets/blog/'.$blog->image_box )}}" width="150">
                                @endif
                            </td>
                           <th>{{ $blog->alt_image_box }}</th>

                          
                            <td>
                                @if ($blog->image)
                                <img src="{{ asset('assets/blog/'.$blog->image )}}" width="150">
                                @endif
                            </td>
                            <th>{{ $blog->alt_image }}</th>

                          
                           
                             
                            
                            <td>
<div  style="display: flex">
    <a href="{{route('blogDetailEdit',$blog->id)}}" class="btn btn-outline-success" style="margin:0 5px">Edit</a>
    <form action="{{ route('blogDetailDelete',$blog->id) }}" method="POST">
        @csrf
        @method('delete')
    
        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button> 

    </form>
</div>
                            
                            </td>

                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!--/ Striped Rows -->


</div>


@endsection