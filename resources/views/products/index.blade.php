@extends('layouts.master')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">list Product</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Message From Customer-->
            <div class="col-12 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light">List Product</h6>
                </div>
                <div>
                <div class="card-body">
                    <table class="table table-bordered" id=dataTable>
                      <example-component></example-component>
                        <thead>
                            <tr>
                                <th>No</th>  
                                <th>Nama</th>  
                                <th>Action</th>    
                            </tr>    
                        <thead>
                        <tbody>
                            @if($products)
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>{{ $product->name ?? '' }}</td>
                                        <td>
                                          <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-outline-info">
                                            <i class="fa fa-edit"></i>Edit
                                          </a>
                                          <a href="javascript:;" class="btn btn-sm btn-outline-danger sa-delete" data-form-id="product-delete-{{$product->id}}">
                                            <i class="fa fa-trash"></i>Delete
                                          </a>
                                          <form id= "product-delete-{{$product->id}}" action = "{{route('products.destroy', $product->id)}}" method ="post">
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