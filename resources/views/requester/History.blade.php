@extends('requester.layout')

@section('pagename', 'Your Requests History')

@section('content')
      <div data-label="Example" class="df-example demo-table ">
          <table id="example2" class="table">
    <thead class="thead-primary">
        <tr>
            <th class="wd-20p">Expected Date</th>
            <th class="wd-25p">Status</th>
            <th class="wd-20p">Property Number</th>
            <th class="wd-15p">Description</th>
            <th class="wd-20p">Created Date</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($specificData as $item)
        <tr>
            <td>{{ $item->request_date }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->property_number }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->created_at }}</td>
            <td>
                <div class="dropdown">
                    <a href="" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-horizontal"></i></a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="requester-view-request/{{ $item->id }}">View</a>

                        <!-- requester-view-request/{{ $item->id }} -->


                        
                        @if($item->status === "Pending")
    <a href="#modal6Request{{ $item->id }}" class="dropdown-item btn-deleteRequest" data-id="{{ $item->id }}" data-toggle="modal" data-animation="effect-sign">Delete</a>
@endif



                    </div>
                </div>
            </td>

            <div class="modal fade" id="modal6Request{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">

        <form id="deleteRequest" class="deleteRequest">
        <div class="modal-content tx-14">
          <div class="modal-header">
            <h6 class="modal-title" id="exampleModalLabel6">Delete Request</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="mg-b-0">Are You Sure You want to Delete Property With Number {{ $item->property_number }}?</p>
            <input type="hidden" value="{{ $item->id }}" id="the_id" name="the_id">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary tx-13">Yes</button>
          </div>
        </div>
      </form>
        </div>
      </div>



        </tr>
        @endforeach
    </tbody>
</table>

        </div>
@endsection
