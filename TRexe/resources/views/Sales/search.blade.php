@extends('layouts.app')

@section('content')
<div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Select Listing</h4>
        <form action="{{route('request',1)}}" method="post">
          <div class="medium-3  columns">
            <label><b>Listing Type</b></label>
            <select name="listtype" >
            @foreach($listingst as $listtype)
                          <option value="{{$listtype}}" >{{$listtype}}</option>
            @endforeach
            <option selected="selected" disabled="disabled">Select a type</option>
                        </select>
            <label><small class="error">{{$errors->first('listtype')}}</small></label>
          </div>
          <div class="medium-3  columns">
            <label><b>Price Low</b></label>
            <input name="pricelow" value="{{old('pricelow')}}" type="text">
            <label><small class="error">{{$errors->first('pricelow')}}</small></label>
          </div>
          <div class="medium-3  columns">
            <label><b>Price High</b></label>
            <input name="pricehigh" value="{{old('pricehigh')}}" type="text">
            <label><small class="error">{{$errors->first('pricehigh')}}</small></label>
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
              <th width="500">Listings Available  based on selection  </th>
            </tr>
          </thead>
          <tbody>
          
         @foreach($listings as $listings)
            <tr>
              <td>{{$listings->year}} {{$listings->make}}  {{$listings->model}} </td>
             <td> <img class="thumbnail" width="75" height="75" src= "{{ URL::to('/images/'. $listings->imagepath) }}">
              </td>
              <td>Price $ {{$listings->price}} </td>
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