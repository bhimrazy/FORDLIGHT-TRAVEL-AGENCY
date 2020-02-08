@extends('layouts.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">All Staying Places<button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus-circle"></i> Add Stay Place</button>
          </h4>
          <!--Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Stay Place</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form action="{{route('stayingplaces.store')}}" method="POST">
                  <div class="modal-body">                  
                      @csrf
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Staytype</label>
                        <select class="form-control" name="staytype" id="exampleFormControlSelect1">
                          <option >Home Stay</option>
                          <option >Hotel & Restaurant</option>
                        </select>
                      </div>   
                      {{-- <div class="form-group">
                        <label for="fileToUpload" class="col-sm-2 control-label">Select Image</label>
      
                        <div class="col-sm-10">
                          <input type="file" name="image" id="fileToUpload" value="{{old('image')}}"><p>Select the file</p>
                          <small>Max size 1MB.</small>
                          @error('image')
                          <small class="text-danger">{{$message}}</small>
                           @enderror
                        </div>                  
                      </div> --}}
                      <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Description</label>
          
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputDescription" name="description" name="" id="" cols="30" rows="10"></textarea>
                               @error('description')
                              <small class="text-danger">{{$message}}</small>
                               @enderror
                            </div>
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
                  Staytype
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
                @if ($stayingplaces->count()>0)
                @foreach ($stayingplaces as $key=>$stayingplace)
                <tr>
                 <td>
                   {{$key+1}}
                 </td>
                 <td>
                  <img src="{{$stayingplace->image}}" alt="{{$stayingplace->name}}" width="30%" class="rounded">
                 </td>
                 <td>
                   {{$stayingplace->name}}
                  </td>
                  <td>
                    {{$stayingplace->staytype}}
                   </td>
                 <td>
                  {{$stayingplace->description}}
                 </td>
                 <td>
                  {{$stayingplace->created_at->diffForHumans()}}
                 </td>
                 <td>
                   <a href="#" class="btn btn-xs btn-success">Edit</a>
                   </td>
                 <td>
                   <form action="{{route('stayingplaces.destroy',['stayingplace'=>$stayingplace->id])}}" method="POST">
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