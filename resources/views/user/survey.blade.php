@extends('layouts.user')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Your Purchased Packages</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  SN
                </th>
                <th>
                 Package Name
                </th>               
                <th>
                 Description
                </th>
                <th>
                 Days
                </th>
                <th>
                Created
                </th>                
              </thead>
              <tbody>  
                @if ($surveys->count()>0)
                    @foreach ($surveys as $key=>$survey)
                    <tr>
                      <td>{{$key+1}}</td>
                     <td>{{$survey->package->name}}</td>
                      <td>{{$survey->package->description}}</td>
                      <td>{{$survey->package->days}}</td>
                      <td>{{$survey->package->created_at->diffForhumans()}}</td>
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