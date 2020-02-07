@extends('layouts.master')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">All places</h4>
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
                 Title
                </th>
                <th>
                  Description
                 </th>
                <th>
                  Edit
                </th>
                <th>
                  Delete
                </th>
              </thead>
              <tbody>
             @if ($places->count()>0)
             @foreach ($places as $key=>$place)
             <tr>
              <td>
                {{$key+1}}
              </td>
              <td>
               <img src="/storage/{{$place->image}}" alt="{{$place->name}}" width="30%" class="img-responsive">
              </td>
              <td>
                {{$place->name}}
               </td>
              <td>
               {{$place->description}}
              </td>
              <td>
                <a href="#" class="btn btn-xs btn-success">Edit</a>
                </td>
              <td>
                <form action="{{route('places.destroy',['place'=>$place->id])}}" method="POST">
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