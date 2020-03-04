
@extends('layouts.admin_master')

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="padding:10px;">
    <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>
        Contacts      
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Contact</li>
      </ol>
    </section>

    <br> 
    <div style="text-align:right"><a href="{{ route('contacts.create')}}"><button type="button" class="btn btn-primary">Add Contact</button></a></div>

    <br>

    @include('layouts.flash')

    <br>
    
    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Group</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Address</th>
                  <th>City</th>
                  <th>ZIP</th>
                  <th>Country</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Note</th>           
                  <th>Modify</th>
                </tr>
              </thead>
              <tbody>
              @foreach($list as $item)  
                <td>{{ $item->id }}</td>
                <td>{{ $item->group->group_name }}</td>
                <td>{{ $item->first_name }}</td>
                <td>{{ $item->last_name }}</td>
                <td>{{ $item->address }}</td>
                <td>{{ $item->city }}</td>
                <td>{{ $item->zip }}</td>
                <td>{{ $item->country }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->note }}</td>
            
                <td align="center">
                    <form action="{{ route('contacts.edit', $item->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</button>
                    </form>
                    <form action="{{ route('contacts.destroy', $item->id) }}" method="POST">
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
    $('#example').DataTable({
      "scrollX": true
    });
} );
</script>

@endsection