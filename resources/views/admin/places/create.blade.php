@extends('layouts.master')

@section('content')
<div class="panel-header panel-header-sm">
    </div>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card bg-light">
            <div class="card-header">
              <h5 class="title">Add Place</h5>
            </div>
            <div class="card-body">
              <form class="form-horizontal" method="post" action="{{route('places.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                          <input type="name" class="form-control" id="inputName" name="name" placeholder="Name" value="{{old('name')}}">
                          @error('name')
                         <small class="text-danger">{{$message}}</small>
                          @enderror
                        </div>
                      </div>                     
                      <div class="form-group">
                        <label for="fileToUpload" class="col-sm-2 control-label">Select Image</label>
      
                        <div class="col-sm-10">
                          <input type="file" name="image" id="fileToUpload" value="{{old('image')}}"><p>Select the file</p>
                          <small>Max size 1MB.</small>
                          @error('image')
                          <small class="text-danger">{{$message}}</small>
                           @enderror
                        </div>                  
                      </div>
                      <div class="form-group">
                            <label for="inputDescription" class="col-sm-2 control-label">Description</label>
          
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputDescription" name="description" name="" id="" cols="30" rows="10"></textarea>
                               @error('description')
                              <small class="text-danger">{{$message}}</small>
                               @enderror
                            </div>
                      </div>
                      <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-danger">Save</button>
                            </div>
                    </div>
              </form>
            </div>
          </div>
        </div>       
      </div>
    </div>
@endsection