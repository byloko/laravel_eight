@extends('backend.layouts.app')

@section('style')
	<style type="text/css">
		
	</style>
@endsection

@section('content')

  <ul class="breadcrumb">
            <li><a href="">Orders</a></li>
            <li><a href="">Orders List</a></li>
        </ul>
        
        <div class="page-title">                    
            <h2><span class="fa fa-arrow-circle-o-left"></span> Orders List</h2>
        </div>

         <div class="page-content-wrap">
            <div class="row">
                <div class="col-md-12">

                    {{-- start --}}
                   @include('message')
                  {{--  <a href="{{ url('admin/orders/add') }}" class="btn btn-primary" title="Add New Orders"><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add New Orders</span></a> --}}
                    {{-- End --}}

                    {{-- Search Box Start --}}
           
                    {{-- Search Box End --}}

                    {{-- Section Start --}}
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h3 class="panel-title">Orders List</h3>
                  </div>
                 

              <div class="panel-body" style="overflow: auto;">
                  <table  class="table table-striped table-bordered table-hover">
                      <thead>
                          <tr>
                              <th>ID</th>
                           
                              <th>Orders Name</th>
                              
                          </tr>
                      </thead>
                      <tbody>
                    @forelse($getRecord as $value)
                          <tr>
                              <td>{{ $value->id }}</td>
                           
                              <td>{{ $value->orders_name }}</td>
                         
                            
                            
                          </tr>
                         @empty
                          <tr>
                              <td colspan="100%">Record not found.</td>

                          </tr>
                          @endforelse
                      </tbody>

                  </table>
                  <div style="float: right">
                          {{ $getRecord->links() }} 
                  </div>
              </div>

              </div>
              {{-- Section End --}}
                    
                </div>
            </div>
        </div>


@endsection
  @section('script')
  <script type="text/javascript">
  
  </script>
@endsection
