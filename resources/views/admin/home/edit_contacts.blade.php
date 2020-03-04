
@extends('layouts.admin_master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Contacts       
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Edit Contacts</li>
      </ol>
    </section>

    <br>
    @include('layouts.flash')
    @include('layouts.error')
    <!-- Main content -->
    <section class="content">
    <br>
    <form method="post" action="{{ route('contacts.update', $list->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" name="id" value="{{ $list->id }}"/>
        <input type="hidden" name="_method" value="PUT">
      <br>
      <table width="800">
          <div class="form-group">
              <label class="control-label col-sm-2" for="group_name">Group Name</label>
              <div class="col-sm-10">
                <select class="custom-select d-block w-100" class="form-control" name="group_id" required>
                  <option value="0">Select</option>
                  @foreach($glist as $item)  
                    <option value="{{ $item->id }}" @if($list->group_id == $item->id) selected @endif>{{ $item->group_name }}</option>
                  @endforeach  
                </select>
              </div>
          </div>    
          <div class="form-group">
              <label class="control-label col-sm-2" for="avatar"></label>
              <!-- this is for local avatar -->
<!--          <td><img src="{{ url(Storage::url($list->avatar)) }}" width="50%" height="50%"></td> -->
              <div class="col-sm-10">
              <img src="{{ ($list->avatar) }}" width="20%" height="20%"><br>
              </div>
          </div>
          <tr>
              <td></td>
              <td></td>
          </tr>
          <div class="form-group"><br>
              <label class="control-label col-sm-3" for="avatar">Upload</label>
              <div class="col-sm-9">
              <div style="color: #a09e9e;"><b>200px x 200px</b></div>
                  <input type="file" class="form-control" name="avatar" id="avatar">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3" for="first_name">First name </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control" size="50" value="{{ $list->first_name }}" name="first_name">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3" for="last_name">Last name </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control" size="50" value="{{ $list->last_name }}" name="last_name">
              </div>
          </div> 
          <div class="form-group">
              <label class="control-label col-sm-3" for="address">Address </label>
              <div class="col-sm-9">
                <textarea name="address" class="form-control" rows="4" cols="40">{{ $list->address }}</textarea>
              </div>
          </div> 
          <div class="form-group">
              <label class="control-label col-sm-3" for="city">City </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control" size="50" value="{{ $list->city }}" name="city">
              </div>
          </div> 
          <div class="form-group">
              <label class="control-label col-sm-3" for="zip">ZIP </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control" size="50" value="{{ $list->zip }}" name="zip">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3" for="country">Country </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control" size="50" value="{{ $list->country }}" name="country">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3" for="email">Email </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control" size="50" value="{{ $list->email }}" name="email">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3" for="phone">Phone </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control" size="50" value="{{ $list->phone }}" name="phone">
              </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-3" for="note">Note </label>
              <div class="col-sm-9">
              <input required type="text" class="form-control size="50" value="{{ $list->note }}" name="note">
              </div>
          </div>           
          <div class="form-group">
              <label class="control-label col-sm-3" for="submit"></label>
              <div class="col-sm-9"><br><button type="submit" class="btn btn-primary">Submit</button></div>
          </div> 

      </table>  
    </form>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection

