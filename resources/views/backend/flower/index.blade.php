@extends('backend.layouts.datatable')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     {{-- messages --}}
   @include('backend.includes.messages')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Flower</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('backend.flower.index')}}">Flower</a></li>
              <li class="breadcrumb-item"> <a href="{{ route('backend.flower.create') }}"> Create Flower</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="flower-datatable" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Color</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Modified At</th>
                    <th style="text-align: center">Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @endsection
    @push('after-scripts')
    <script type="text/javascript">
      $(function() {
      $('#flower-datatable').DataTable({
              order:  [0, 'desc'] ,
              responsive: true,
              autoWidth : false,
              processing: true,
              serverSide: true,
              ajax: '{!! route('backend.flower.datable.all') !!}',
              columns: [
                  { data: 'id', name: 'id' },
                  { data: 'type', name: 'type' },
                  { data: 'color', name: 'color' },
                  { data: 'price', name: 'price' },
                  { data: 'created_at', name: 'created_at' },
                  { data: 'updated_at', name: 'updated_at' },
                  { data: 'actions', name: 'actions'}
              ]
          });
      });
      </script>
    @endpush