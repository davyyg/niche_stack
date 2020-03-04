
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
    <form class="form-horizontal" method="post" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
      <br>
      <table width="800">
          <div class="form-group">
              <label class="control-label col-sm-2" for="group_name">Group Name</label>
              
              <div class="col-sm-10">
                <select class="custom-select d-block w-100" class="form-control" name="group_id" required>
                  <option value="0">Select</option>
                @foreach($list as $item)  
                  <option value="{{ $item->id }}">{{ $item->group_name }}</option>
                @endforeach  
                </select>
              </div>
          </div>    
          <tr>
              <td></td>
              <td></td>
          </tr>
          <div class="form-group">
              <label class="control-label col-sm-2" for="avatar">Upload Avatar</label>
              <div class="col-sm-10">
                  <div style="color: #a09e9e;"><b>200px x 200px</b></div>
                  <input type="file" class="form-control" name="avatar" id="avatar">
              </div>
          </div>  
          <div class="form-group">
              <label class="control-label col-sm-2" for="first_name">First name </label>
              <div class="col-sm-10">
                <input required type="text" class="form-control" size="50" value="" name="first_name">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="last_name">Last name </label>
              <div class="col-sm-10">
                <input required type="text" class="form-control" size="50" value="" name="last_name">
              </div>  
          </div> 
          <div class="form-group">
              <label class="control-label col-sm-2" for="address">Address </label>
              <div class="col-sm-10">
                <textarea required name="address" class="form-control" rows="4" cols="40"></textarea>
              </div>  
          </div> 
          <div class="form-group">
              <label class="control-label col-sm-2" for="city">City </label>
              <div class="col-sm-10">
              <input required type="text" class="form-control" size="50" value="" name="city">
              </div>
          </div> 
          <div class="form-group">
              <label class="control-label col-sm-2" for="zip">ZIP </label>
              <div class="col-sm-10">
              <input required type="text" class="form-control" size="50" value="" name="zip">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="country">Country </label>
              <div class="col-sm-10">
              <input required type="text" class="form-control" size="50" value="" name="country">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email </label>
              <div class="col-sm-10">
              <input required type="text" class="form-control" size="50" value="" name="email">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="phone">Phone </label>
              <div class="col-sm-10">
              <input required type="text" class="form-control" size="50" value="" name="phone">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="phone">Note </label>
              <div class="col-sm-10">
              <input required type="text" class="form-control" size="50" value="" name="note">
              </div>
          </div>          
          <div class="form-group">
              <label class="control-label col-sm-2"></label>
              <div class="col-sm-10">
              <br><button type="submit" class="btn btn-primary">Submit</button>
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

