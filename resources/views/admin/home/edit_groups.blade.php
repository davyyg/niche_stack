
@extends('layouts.admin_master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Group     
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Edit Group</li>
      </ol>
    </section>

    <br>
    @include('layouts.flash')
    @include('layouts.error')
    <!-- Main content -->
    <section class="content">
      <br>
        <form method="post" action="{{ route('groups.update', $list->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" name="id" value="{{ $list->id }}"/>
        <input type="hidden" name="_method" value="PUT">
      <br>
      <table width="800">
         
          <div class="form-group">
              <label class="control-label col-sm-2" for="group_name">Group Name </label>
              <div class="col-sm-10">
              <input required type="text" class="form-control" size="50" value="{{ $list->group_name }}" name="group_name">
              </div>
          </div>          
          <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <div class="col-sm-10">
              <br>
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </div>  

      </table>  
    </form>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

