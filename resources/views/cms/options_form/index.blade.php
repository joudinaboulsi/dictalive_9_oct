@extends('layouts.admin')
@section('content')

<div class="container-xxl flex-grow-1 container-p-y">


    <!-- Striped Rows -->
    <div class="card">

        <h5 class="card-header">Options Values</h5>
        <div class="card-header">
            <a href="{{ route('optionContactCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                     <th>Option Value</th>
                    
                    
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($options as $option)
                        <tr>
                            <td>{{$option->option}}</td>
                        
                        
                            <td>
                                <div  style="display: flex">
                                    <a href="{{route('optionContactEdit',$option->id)}}" class="btn btn-outline-success" style="margin:0 5px">Edit</a>
                                    <form action="{{ route('optionContactDelete',$option->id) }}" method="POST">
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