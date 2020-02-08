@extends('layouts.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">All Tour Guide<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Add Tour Guide</button>
          </h4>
          <!--Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Tour Guide</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('guides.store')}}" method="POST">
                  <div class="modal-body">                  
                      @csrf
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="location" class="col-form-label">Location</label>
                        <input type="text" name="location" class="form-control" id="location">
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
            <table class="table">
              <thead class=" text-primary">
                <th>
                  SN
                </th>
                <th>
                 Image
                </th>               
                <th>
                 Name
                </th>
                <th>
                  Location
                 </th>
                 <th>
                  Created
                 </th>
                <th>
                  Edit
                </th>
                <th>
                  Delete
                </th>
              </thead>
              <tbody>
                @if ($guides->count()>0)
                @foreach ($guides as $key=>$guide)
                <tr>
                 <td>
                   {{$key+1}}
                 </td>
                 <td>
                  <img src="/images/avatar.jpg" alt="{{$guide->name}}" width="20%" class="rounded-circle">
                 </td>
                 <td>
                   {{$guide->name}}
                  </td>
                 <td>
                  {{$guide->location}}
                 </td>
                 <td>
                  {{$guide->created_at->diffForHumans()}}
                 </td>
                 <td>
                   <a href="#" class="btn btn-xs btn-success">Edit</a>
                   </td>
                 <td>
                   <form action="{{route('guides.destroy',['guide'=>$guide->id])}}" method="POST">
                     @csrf
                     @method('delete')
                     <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                   </form>
                 </td>
               </tr>
              
                @endforeach
                    
                @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>   
  </div>
</div>
@endsection