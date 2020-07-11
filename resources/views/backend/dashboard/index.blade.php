@extends('layouts.app')

@section('content')
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>
  
      <!-- SEARCH FORM -->
      @include('backend.partials.search-form')

      <!-- Right navbar links -->
      @include('backend.partials.right-nav-bar-links')
    </nav>
    <!-- /.navbar -->
    {{-- side bar --}}
    @include('backend.partials.sidebar')
    
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
       @include('backend.partials.content-header')
      <!-- /.content-header -->
  
      <!-- Main content -->
      @include('backend.dashboard.includes.content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('backend.partials.footer')
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
@endsection
