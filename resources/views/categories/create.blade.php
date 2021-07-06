@extends('layouts.master')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Categories Create</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Message From Customer-->
            <div class="col-xl-4 col-lg-6 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light">Create Categories</h6>
                </div>
                <div>
                <div class="card-body">
                  <form role="form" action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama</label>
                      <input name="name" type="text" class="form-control" placeholder="Masukkan nama kategori" required>
                      @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif                        
                          
                    
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
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