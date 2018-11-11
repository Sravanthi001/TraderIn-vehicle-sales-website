@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Select Listing</h4>
        <form action="{{route('request',1)}}" method="post">
          <div class="medium-3  columns">
            <label>Listing Type</label>
            <select name="listtype">
            @foreach($listingst as $listtype)
                          <option value="{{$listtype}}" >{{$listtype}}</option>
            @endforeach
                        </select>
          </div>
          <div class="medium-3  columns">
            <label>Price Low</label>
            <input name="pricelow" type="text">
          </div>
          <div class="medium-3  columns">
            <label>Price High</label>
            <input name="pricehigh" type="text">
          </div>
          
          
          <div class="medium-3  columns">
          <label><br> </label>
            <input value="Search" class="button" type="submit">
          </div>
        </form>
      </div>
    </div>
<br></br>
<div class="row">
      <div class="medium-12 large-12 columns">
        
        <table class="stack">
          <thead>
            <tr>
              <th width="500">Listings Available</th>
            </tr>
          </thead>
          <tbody>
         
         @foreach($listings as $listings)
            <tr>
              <td>{{$listings->year}} {{$listings->make}}  {{$listings->model}} </td>
              <td> <img class="thumbnail" width="75" height="75" src="images/{{$listings->imagepath}}"></td>
              <td>
                <a class="hollow button warning" href="{{route('details',['listing_id'=>$listings->listid])}}">View Details</a>
              </td>
              </tr>
              
          @endforeach
          
                    </tbody>
        </table>
      </div>
    </div>


@endsection