@extends('layouts.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">All Packages<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Add Package</button>
          </h4>
    
          <!--Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Package</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('packages.store')}}" method="POST">
                  <div class="modal-body">                  
                      @csrf
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="places" class="col-form-label">No. of places</label>
                        <input type="text" name="places" class="form-control" id="places">
                      </div>  
                      <div class="form-group">
                        <label for="days" class="col-form-label">No. of Days</label>
                        <input type="text" name="days" class="form-control" id="days">
                      </div>      
                      <div class="form-group">
                        <label for="activities" class="col-form-label">Activities</label>                        
                        <textarea name="activities" class="form-control" id="activities" cols="30" rows="10"></textarea>
                      </div>                  
                      <div class="form-group">
                        <label for="description" class="col-form-label">Description</label>                        
                        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                      </div>                                  
                  </div>
                  <div class="modal-footer">                  
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            @if ($packages->count()>0)
                @foreach($packages as $key=>$package)
                <div class="card card-nav-tabs text-center bg-dark text-light">
                  <div class="card-header card-header-primary">
                   {{$key+1}}&nbsp;&nbsp; <h1>{{$package->name}}</h1>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">{{$package->places}} Places</h4>
                    <h5>{{$package->days}}</h5>
                    <p class="card-text">Activities : {{$package->activities}}</p>
                    <p class="card-text">Description : {{$package->description}}</p>
                    <a href="#" class="btn btn-primary">Buy the Package</a>
                  </div>
                  <div class="card-footer text-muted">
                    {{$package->created_at->diffForHumans()}}
                    <div class="row">
                      <div class="col-md-6"><a href="#" class="btn btn-xs btn-success">Edit</a>
                       
                     </div>
                      <div class="col-md-6">
                        <form action="{{route('packages.destroy',['package'=>$package->id])}}" method="POST">
                          @csrf
                          @method('delete')
                          <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <div class="text-center">
                  {{$packages->links()}}
                </div>
            @endif
          </div>
        </div>
      </div>
    </div>   
  </div>
</div>
@endsection