@extends('layouts.user')
@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Trending Places</h4>
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
                  View
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
               <img src="/storage/{{$place->image}}" alt="{{$place->name}}" width="40%">
              </td>
              <td>
                {{$place->name}}
               </td>
              <td>
               {{$place->description}}
              </td> 
              <td>
                <button class="btn btn-info">VIEW</button>
               </td>              
            </tr>
           
             @endforeach
                 
             @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Trending Packages</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  SN
                </th>                            
                <th>
                 Title
                </th>
                <th>
                  Description
                </th>
                <th>
                  Activities
                </th>     
                <th>
                  Purchase
                </th>           
              </thead>
              <tbody>
             @if ($packages->count()>0)
             @foreach ($packages as $key=>$package)
             <tr>
              <td>
                {{$key+1}}
              </td>            
              <td>
                <h2>{{$package->name}}</h2>
               </td>
              <td>
               {{$package->description}} <br>
               {{$package->days}}
              </td> 
              <td>
                {{$package->activities}}
              </td> 
              <td>
                <form action="{{route('mypackages.store',$package->id)}}" method="get">
                  @csrf
                <button class="btn btn-xs btn-success" type="submit">Purchase Now</button>
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
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Upcoming Events</h4>
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
                  Book Now
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
                  <button class="btn btn-xs btn-success" type="submit">Book Now</button>
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