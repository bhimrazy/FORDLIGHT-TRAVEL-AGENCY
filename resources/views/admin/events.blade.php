@extends('layouts.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">All Events<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Add Event</button>
          </h4>
          <!--Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('events.store')}}" method="POST">
                  <div class="modal-body">                  
                      @csrf
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="start">Start date:</label>

                          <input type="date" id="start" name="event-date"
                                value="2018-07-22"
                                min="2020-01-01" max="2025-12-31">

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
            <table class="table">
              <thead class=" text-primary">
                <th>
                  SN
                </th>                           
                <th>
                 Name
                </th>
                <th>
                  Description
                 </th>
                 <th>
                  Event Date
                 </th>
                <th>
                  Edit
                </th>
                <th>
                  Delete
                </th>
              </thead>
              <tbody>
                @if ($events->count()>0)
                @foreach ($events as $key=>$event)
                <tr>
                 <td>
                   {{$key+1}}
                 </td>                
                 <td>
                   {{$event->name}}
                  </td>
                 <td>
                  {{$event->description}}
                 </td>
                 <td>
                  {{$event['event-date']}}
                 </td>
                 <td>
                   <a href="#" class="btn btn-xs btn-success">Edit</a>
                   </td>
                 <td>
                   <form action="{{route('events.destroy',['event'=>$event->id])}}" method="POST">
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