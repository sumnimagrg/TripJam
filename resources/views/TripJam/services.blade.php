@extends('layouts.main')
@section('container')
    <div class="recent-listing">
        <div class="container-list">
            <div class="section-heading">
                <h2>Recent Bus Listings</h2>
                <h6>Check Them Out</h6>
            </div>

            @foreach ($buses as $bus)
            <div class="bus-list"> 
             
                <div class="listing-item">                    
                    <div class="left-image">
                        <img src="{{asset('uploads/'. $bus->image)}}" alt="Express Line Bus">
                    </div>
                    <div class="right-content">
                      
                        <h4>Bus Name: {{$bus->busName}}</h4>
                        <h6>Bus Number: {{$bus->bus_no}}</h6>
                        <h6>Type : {{$bus->type}}</h6>
                        <h4>Capacity: {{$bus->capacity}}</h4>
                        <h6>Description: {{$bus->description}}</h6>
                                             
                      
                        <a href="/book" class="book-btn">Book Now</a>
                    </div>
             
                </div>
              
            </div>
            @endforeach 
        </div>
    </div>
@endsection
