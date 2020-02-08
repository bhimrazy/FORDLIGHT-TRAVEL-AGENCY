@if (session()->has('success'))
<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-check"></i> Alert!</h4>
    <strong>Success </strong>{{session()->get('success')}}.
</div>
@endif
@if (session()->has('warning'))
<div class="alert alert-warning alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-check"></i> Alert!</h4>
    <strong>Warning </strong>{{session()->get('warning')}}.
</div>
@endif