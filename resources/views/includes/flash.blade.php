@if (session()->has('success'))
<!-- This is an example component -->
<div class="alert alert-success">
    <strong>{{session('success')}}</strong>
  </div>
@endif
