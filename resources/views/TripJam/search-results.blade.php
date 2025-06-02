@extends('layouts.main')

@section('container')
    <div class="recent-listing">
        <div class="container-list">
            <div class="section-heading">
                <h2>Search Results</h2>
                <h6>Here are the buses matching your search</h6>
            </div>

            @if(count($buses) > 0)
                @foreach ($buses as $bus)
                    <div class="bus-list"> 
                        <div class="listing-item">                    
                            <div class="left-image">
                                <img src="{{ asset('uploads/' . $bus->image) }}" alt="{{ $bus->busName }}">
                            </div>
                            <div class="right-content">
                                <h4>Bus Name: {{ $bus->busName }}</h4>
                                <h6>Bus Number: {{ $bus->bus_no }}</h6>
                                <h6>Type: {{ $bus->type }}</h6>
                                <h4>Capacity: {{ $bus->capacity }}</h4>
                                <h6>Description: {{ $bus->description }}</h6>
                                 @if($bus->routes->count())
                            @foreach($bus->routes as $route)
                                <h6>Route: {{ $route->route_name }}</h6>
                            @endforeach
                        @else
                            <h6>Route: Not Assigned</h6>
                        @endif
                                <h6>Fare: NPR {{ $bus->fare }}</h6>


                                <a href="/book" class="book-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach 
            @else
                <p>No buses found matching your search criteria.</p>
            @endif
        </div>
    </div>
@endsection
