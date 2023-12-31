@extends('requester.layout')

@section('pagename', 'Your Registered Properties')

@section('content')
    <div data-label="Example" class="df-example demo-table">
        <!-- <button type="submit" class="btn btn-primary">Add New</button> -->

        <a href="/requester-add-property/{{$userId}}" class="btn btn-xs btn-primary ">Add Property</a><br><br>
        <table id="example2" class="table">

            <thead>
            <tr>
                <th class="wd-20p">property number</th>
                <th class="wd-25p">type</th>
                <th class="wd-20p">street</th>
                <th class="wd-15p">district</th>
                <th class="wd-20p">region</th>
                <th class="wd-20p">landmark</th>
                <th class="wd-20p"></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($specificData as $item)
                <tr>
                    <td>
                        <img src="{{ asset($item->property_image) }}" class="img wd-60 ht-60 rounded-circle"
                             alt="Property Image">
                        {{ $item->property_number }}
                    </td>

                    <td>{{ $item->property_type }}</td>
                    <td>{{ $item->street_name }}</td>
                    <td>{{ $item->district }}</td>
                    <td>{{ $item->region }}</td>
                    <td>{{ $item->nearest_landmark }}</td>
                    <td>
                        <div class="dropdown">
                            <a href="" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false"><i data-feather="more-horizontal"></i></a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="requester-edit-property/{{ $item->id }}">Edit</a>
                            <!-- <a href="#modal6Property{{ $item->id }}" class="dropdown-item" data-toggle="modal" data-animation="effect-sign">Delete</a> -->

                                <a href="#modal6Property{{ $item->id }}" class="dropdown-item btn-delete"
                                   data-id="{{ $item->id }}" data-toggle="modal" data-animation="effect-sign">Delete</a>


                            </div>
                        </div>
                    </td>

                    <div class="modal fade" id="modal6Property{{ $item->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel6" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">

                            <form id="deletePropery" class="deletePropery">
                                <div class="modal-content tx-14">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="exampleModalLabel6">Delete Property</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="mg-b-0">Are You Sure You want to Delete Property With
                                            Number {{ $item->property_number }}?</p>
                                        <input type="hidden" value="{{ $item->id }}" id="the_id" name="the_id">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary tx-13" data-dismiss="modal">
                                            Close
                                        </button>
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




    </div>
@endsection
