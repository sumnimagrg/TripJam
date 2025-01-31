@extends('layouts.main')
@section('container')
<div class="w-full max-w-lg bg-white p-8 shadow-md rounded-lg">
      <h1 class="text-center text-2xl font-bold text-gray-800 mb-6">Bus Feedback Form</h1>
      <form action="#" method="POST" class="space-y-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="name" placeholder="Enter your name" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
          <input type="email" name="email" placeholder="Enter your email" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
          <input type="text" name="number" placeholder="Enter your number" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
          <input type="date" name="travel-date" placeholder="Travel Date" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
  
        <div class="grid grid-cols-3 gap-4">
          <select name="hour" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            <option>Hour</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <!-- Add other hour options -->
          </select>
          <select name="minute" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            <option>Minutes</option>
            <option>0</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
            <option>35</option>
            <option>40</option>
            <option>45</option>
            <option>50</option>
            <option>55</option>
            <option>60</option>
          </select>
          <select name="am-pm" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
            <option>Select</option>
            <option>AM</option>
            <option>PM</option>
          </select>
        </div>
  
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="journey-start" placeholder="Journey started at" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
          <input type="text" name="journey-end" placeholder="Journey ended at" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
  
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="route" placeholder="Route" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
          <input type="text" name="bus-no" placeholder="Bus no" class="border border-gray-300 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400">
        </div>
  
        <div class="space-y-2">
          <p class="font-semibold text-gray-700">How long did you wait for your bus?</p>
          <div class="flex items-center space-x-4">
            <label class="flex items-center space-x-1">
              <input type="radio" name="wait-time" value="5-10 minutes" class="text-green-500">
              <span>5-10 minutes</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="wait-time" value="10-15 minutes" class="text-green-500">
              <span>10-15 minutes</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="wait-time" value=">15 minutes" class="text-green-500">
              <span>More than 15 minutes</span>
            </label>
          </div>
        </div>
  
        <div class="space-y-2">
          <p class="font-semibold text-gray-700">Rate the cleanliness of the bus</p>
          <div class="flex items-center space-x-4">
            <label class="flex items-center space-x-1">
              <input type="radio" name="cleanliness" value="Excellent" class="text-green-500">
              <span>Excellent</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="cleanliness" value="Very Good" class="text-green-500">
              <span>Very Good</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="cleanliness" value="Good" class="text-green-500">
              <span>Good</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="cleanliness" value="Average" class="text-green-500">
              <span>Average</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="cleanliness" value="Poor" class="text-green-500">
              <span>Poor</span>
            </label>
          </div>
        </div>
  
        <div class="space-y-2">
          <p class="font-semibold text-gray-700">Rate the behaviour of the conductor</p>
          <div class="flex items-center space-x-4">
            <label class="flex items-center space-x-1">
              <input type="radio" name="conductor-behaviour" value="Excellent" class="text-green-500">
              <span>Excellent</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="conductor-behaviour" value="Very Good" class="text-green-500">
              <span>Very Good</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="conductor-behaviour" value="Good" class="text-green-500">
              <span>Good</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="conductor-behaviour" value="Average" class="text-green-500">
              <span>Average</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="conductor-behaviour" value="Poor" class="text-green-500">
              <span>Poor</span>
            </label>
          </div>
        </div>
  
        <div class="space-y-2">
          <p class="font-semibold text-gray-700">Rate the behaviour of the driver</p>
          <div class="flex items-center space-x-4">
            <label class="flex items-center space-x-1">
              <input type="radio" name="driver-behaviour" value="Excellent" class="text-green-500">
              <span>Excellent</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="driver-behaviour" value="Very Good" class="text-green-500">
              <span>Very Good</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="driver-behaviour" value="Good" class="text-green-500">
              <span>Good</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="driver-behaviour" value="Average" class="text-green-500">
              <span>Average</span>
            </label>
            <label class="flex items-center space-x-1">
              <input type="radio" name="driver-behaviour" value="Poor" class="text-green-500">
              <span>Poor</span>
            </label>
          </div>
        </div>
        <p>We respect and value your comments. Please give feedback about the bus service and suggest how we can improve."</p>
        <textarea name="feedback" rows="4" placeholder=""
          class="border border-gray-300 p-2 w-full rounded-lg focus:outline-none focus:ring-2 focus:ring-green-400"></textarea>
  
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Submit</button>
      </form>
    </div>
    @endsection
  