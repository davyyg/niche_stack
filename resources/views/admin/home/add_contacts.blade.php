
@extends('layouts.admin_master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Contact       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Add Contacts</li>
      </ol>
    </section>

    <br>
    @include('layouts.flash')
    @include('layouts.error')
    <!-- Main content -->
    <section class="content">
    <br>
    <form method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <br>
      <table width="800">
          <tr>
              <td>Group Name</td>
              
              <td>
                <select class="custom-select d-block w-100" name="group_id" required>
                  <option value="0">Select</option>
                @foreach($list as $item)  
                  <option value="{{ $item->id }}">{{ $item->group_name }}</option>
                @endforeach  
                </select>
              </td>
          </tr>    
          <tr>
              <td></td>
              <td><div style="color: #a09e9e;"><b>200px x 200px</b></div></td>
          </tr>
          <tr>
              <td>Upload Avatar</td>
              <td>
                  <input type="file" name="avatar" id="avatar">
              </td>
          </tr>
          <tr>
              <td>First name </td>
              <td><input required type="text" size="50" value="" name="first_name"></td>
          </tr>
          <tr>
              <td>Last name </td>
              <td><input required type="text" size="50" value="" name="last_name"></td>
          </tr>  
          <tr>
              <td>Address </td>
              <td><textarea required name="address" rows="4" cols="40"></textarea></td>
          </tr>
          <tr>
              <td>City </td>
              <td><input required type="text" size="50" value="" name="city"></td>
          </tr>
          <tr>
              <td>ZIP </td>
              <td><input required type="text" size="50" value="" name="zip"></td>
          </tr>
          <tr>
              <td>Country </td>
              <td><input required type="text" size="50" value="" name="country"></td>
          </tr>
          <tr>
              <td>Email </td>
              <td><input required type="text" size="50" value="" name="email"></td>
          </tr>
          <tr>
              <td>Phone </td>
              <td><input required type="text" size="50" value="" name="phone"></td>
          </tr>
          <tr>
              <td>Note </td>
              <td><input required type="text" size="50" value="" name="note"></td>
          </tr>          
          <tr>
              <td></td>
              <td><br><button type="submit" class="btn btn-primary">Submit</button></td>
          </tr>

      </table>  
    </form>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

