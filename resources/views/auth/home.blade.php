@extends('layouts.auth')

@section('title', 'Admin Dashboard')

@section('styles')

@endsection

@section('content')
<div class="content-wrapper">
    <div class="content">                
            <!-- Top Statistics -->
            <div class="row">
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: orange">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-white">Sales of this year</span>
                      <span class="mx-1">
                        <h2 class="text-white">45%</h2>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: green">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-white">Sales of this year</span>
                      <span class="mx-1">
                        <h2 class="text-white">45%</h2>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: blue">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-white">Sales of this year</span>
                      <span class="mx-1">
                        <h2 class="text-white">55%</h2>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="card card-default card-mini" style="background-color: purple">
                  <div class="card-header">
                    <h2 class="text-center"><i class="fa fa-eye"></i></h2>
                    <div class="sub-title text-center">
                      <span class="mr-1 text-white">Sales of this year</span>
                      <span class="mx-1">
                        <h2 class="text-white">35%</h2>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>


      </div>
    
  </div>
@endsection

@section('scripts')
@endsection