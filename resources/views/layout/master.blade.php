<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-7">
            <!-- Ambil judul string pada variabel $table_title dan $table_title2 -->
            <h1>{{$table_title}}, untuk pindah ke {{$table_title2}} klik menu di samping &emsp;>> &emsp;>> </h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item current active"><a href="/" class=" text-cyan">Table pertama</a></li>
              <li class="breadcrumb-item"><a href="/data-table" class=" text-maroon">Data-table</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->

      {{-- 
        |--------------------------------------------------------------------------
        | Ambil  path dari variabel  $type  sehingga muncul @include('path')
        |--------------------------------------------------------------------------
      --}}

      @include("{$type}")

      <!-- /.card -->
    </section>

    <!-- /.content -->


  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{ asset('diradminlte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('diradminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('diradminlte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('diradminlte/dist/js/demo.js') }}"></script>

{{-- 
|--------------------------------------------------------------------------
| Stack   script  dari Data-Table
|--------------------------------------------------------------------------
--}}
@stack('table_script')