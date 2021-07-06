@extends('layouts.master')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">list Categories</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Message From Customer-->
            <div class="col-12 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light">List Categories</h6>
                </div>
                <div>
                <div class="card-body">
                    <example-component></example-component>
                    <table class="table table-bordered" id=dataTable>
                        <thead>
                            <tr>
                                <th>No</th>  
                                <th>Nama</th>  
                                <th>Action</th>    
                            </tr>    
                        <thead>
                        <tbody>
                            @if($categories)
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $category->name ?? '' }}</td>
                                        <td>
                                          <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-outline-info">
                                            <i class="fa fa-edit"></i>Edit
                                          </a>
                                          <a href="javascript:;" class="btn btn-sm btn-outline-danger sa-delete" data-form-id="category-delete-{{$category->id}}">
                                            <i class="fa fa-trash"></i>Delete
                                          </a>
                                          <form id= "category-delete-{{$category->id}}" action = "{{route('categories.destroy', $category->id)}}" method ="post">
                                            @csrf
                                            @method('DELETE')
                                          </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
        <!---Container Fluid-->

@endsection