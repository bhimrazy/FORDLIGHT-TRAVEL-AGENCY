@extends('layouts.master')
@section('content')
<div class="panel-header panel-header-lg">
  <canvas id="bigDashboardChart"></canvas>
</div>
<div class="content">
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Packages</h5>
          <h4 class="card-title">Packages Selling</h4>
          <div class="dropdown">
            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
              <i class="now-ui-icons loader_gear"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="lineChartExample"></canvas>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Registered Customers</h5>
          <h4 class="card-title">All Users</h4>
          <div class="dropdown">
            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
              <i class="now-ui-icons loader_gear"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
             
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Trending</h5>
          <h4 class="card-title">Events and Places</h4>
        </div>
        <div class="card-body">
          <div class="chart-area">
            <canvas id="barChartSimpleGradientsNumbers"></canvas>
          </div>
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="card  card-tasks">
        <div class="card-header ">
          <h5 class="card-category">Pending Tasks</h5>
          <h4 class="card-title">All Tasks</h4>
        </div>
        <div class="card-body ">
          <div class="table-full-width table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Confirm requesr for Harry</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox">
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">Verfy Package</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" checked>
                        <span class="form-check-sign"></span>
                      </label>
                    </div>
                  </td>
                  <td class="text-left">New Notifications
                  </td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="" class="btn btn-info btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Edit Task">
                      <i class="now-ui-icons ui-2_settings-90"></i>
                    </button>
                    <button type="button" rel="tooltip" title="" class="btn btn-danger btn-round btn-icon btn-icon-mini btn-neutral" data-original-title="Remove">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">All Users List</h5>
          <h4 class="card-title"> Registered Users Stats</h4>
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
                </thead>
                <tbody>
                  @if ($users->count()>0)
                  @foreach ($users as $key=>$user)
                  <tr>
                   <td>
                     {{$key+1}}
                   </td>
                   <td>
                    <img src="/images/avatar.jpg" alt="{{$user->name}}" width="30%" class="rounded-circle">
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