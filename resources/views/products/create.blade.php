@extends('layouts.master')
@section('content')

<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Product</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Message From Customer-->
            <div class="col-xl-4 col-lg-6 ">
              <div class="card">
                <div class="card-header py-4 bg-primary d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-light">Create Product</h6>
                </div>
                    <div>
                        <product-add></product-add>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
        <!---Container Fluid-->

@endsection