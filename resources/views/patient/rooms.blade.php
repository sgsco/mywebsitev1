@extends('patientlayout')
@section('content')
<div class="templatemo-content-wrapper">
  <div class="templatemo-content">
    {{-- <div class="panel panel-default panel-block panel-title-block" id="top">
      <div class="panel-heading">
        <div class="row clearfix">
          <div class="col-md-6" style="text-align: left;">
             <h4><b>Admin Dashboard</b></h4>
          </div>
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>

    <div class=" panel panel-default panel-block panel-title-block" >
      <div class="panel-body form-horizontal">
        Hello Admin
      </div>
    </div> --}}

    <div class="panel panel-default panel-block panel-title-block panel-gray "  style="margin-bottom: -10px;">
    <ul class="nav nav-tabs">
        <li class="active change-tab pending-tab cursor-pointer" mode="0"><a class="cursor-pointer"><i class="fa fa-check"></i> Active</a></li>
        <li class="cursor-pointer change-tab approve-tab" mode="1"><a class="cursor-pointer"><i class="fa fa-archive"></i> Archived</a></li>
        <li class="pull-right"><button onclick="action_load_link_to_modal('/member/add-room', 'md')" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add Room</button></li>
    </ul>
    <div class="search-filter-box">
        <div class="col-md-3" style="padding: 10px">
            <select class="form-control room_type">
                <option value="0">All</option>
                <option value="Private Room">Private Rooms</option>
                <option value="Ward">Ward</option>
            </select>
        </div>
        <div class="col-md-3" style="padding: 10px">
            <select class="form-control room_level">
                <option value="0">All</option>
                <option value="1st floor">1st floor</option>
                <option value="2nd floor">2nd floor</option>
            </select>
        </div>
        <div class="col-md-2" style="padding: 10px">
        </div>
        <div class="col-md-4" style="padding: 10px">
            <div class="input-group">
                <span style="background-color: #fff; cursor: pointer;" class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control search" placeholder="Search by room name" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div class="tab-content codes_container" style="min-height: 300px;">
        <div id="all" class="tab-pane fade in active">
            <div class="form-group order-tags"></div>
            <div class="clearfix">
                <div class="col-md-12">
                    <div class="table-responsive load-table-here">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </div>
</div>
@endsection
@section('scripts')
<script type="text/javascript" src="/assets/member/rooms.js"></script>
@endsection