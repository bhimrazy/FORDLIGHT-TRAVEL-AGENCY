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
                   Name
                  </th>
                  <th>
                    Usertype
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
                  @if ($users->count()>0)
                  @foreach ($users as $key=>$user)
                  <tr>
                   <td>
                     {{$key+1}}
                   </td>
                   <td>
                    <img src="/images/avatar.jpg" alt="{{$user->name}}" width="20%" class="rounded-circle">
                   </td>
                   <td>
                     {{$user->name}}
                    </td>
                   <td>
                       @if ($user->usertype =='admin')
                       {{ucfirst($user->usertype)}}
                       @else
                        Customer
                       @endif
                   
                   </td>
                   <td>
                    {{$user->created_at->diffForHumans()}}
                   </td>
                   @if ($user->usertype =='admin')
                       <td>-</td>
                       <td>-</td>
                   @else
                   <td>
                       
                    <a href="#" class="btn btn-xs btn-success">Edit</a>
                    </td>
                  <td>
                    <form action="{{route('users.destroy',['user'=>$user->id])}}" method="POST">
                      @csrf
                      @method('delete')
                      <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                    </form>
                  </td>
                   @endif
                 
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