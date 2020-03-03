
@extends('layouts.admin_master')


@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding:10px;">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Groups       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Group</li>
      </ol>
    </section>

    <br>
    <div style="text-align:right"><a href="{{ route('groups.create') }}"><button type="button" class="btn btn-primary">Add Group</button></a></div>

    <br>
    @include('layouts.flash')

    <br>
    
    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Group Name</th>
                  <th>Modify</th>
                </tr>
              </thead>
              <tbody>
              @foreach($list as $item)  
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->group_name }}</td>
            
                <td align="center">
                    <form action="{{ route('groups.edit', $item->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button>
                    </form>
                    <form action="{{ route('groups.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"><i class="fa fa-remove"></i>&nbsp;Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
              </tbody>              
    </table>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection

@section('additional_script')

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

@endsection
