<!-- <div class="alert alert-primary"> -->

@if ($message = Session::get('flash'))	
<div class="alert alert-info">	
  <ul>
    {{ $message }}
  </ul>
</div>
@endif
