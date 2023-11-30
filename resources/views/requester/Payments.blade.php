@extends('requester.layout')

@section('pagename', 'Your Payments History')

@section('content')
      <div data-label="Example" class="df-example demo-table">
            <table id="example2" class="table">
            <thead class="thead-primary">
              <tr>
                <th class="wd-20p">Name</th>
                <th class="wd-25p">Position</th>
                <th class="wd-20p">Office</th>
                <th class="wd-15p">Age</th>
                <th class="wd-20p">Salary</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>$320,800</td>
               <td><div class="dropdown">
                   <a href="" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-horizontal"></i></a>
  
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">View</a>
  </div>
</div></td>
              </tr>
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>$170,750</td>
                 <td><div class="dropdown">
                   <a href="" class="nav-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="more-horizontal"></i></a>
  
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">View</a>
  </div>
</div></td>
              </tr>
             
            </tbody>
          </table>
        </div>
@endsection
