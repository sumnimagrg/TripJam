<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bus Seat Selection</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: linear-gradient(to bottom, #ffefba, #ffffff);
      }

      h1 {
        margin-bottom: 20px;
        color: #180c71;
      }

      .seat-map {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px; /* Adjust spacing between rows */
        max-width: 300px; /* Limit max width */
        width: 100%;
      }

      .row {
        display: flex;
        justify-content: space-between;
        width: 100%;
      }

      .seat {
        width: 50px;
        height: 50px;
        border: 1px solid #ccc;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: transform 0.2s ease, background-color 0.2s ease;
      }

      .seat.available {
        background-color: #e0f7fa;
      }

      .seat.booked {
        background-color: #ffcdd2;
        cursor: not-allowed;
      }

      .seat:hover:not(.booked) {
        transform: scale(1.1);
        background-color: #b2ebf2;
      }

      .seat.selected {
        background-color: #80deea;
      }

      .legend {
        margin-top: 20px;
        display: flex;
        gap: 15px;
      }

      .legend div {
        display: flex;
        align-items: center;
        gap: 5px;
      }

      .legend div span {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 5px;
      }

      .available-legend span {
        background-color: #e0f7fa;
      }

      .booked-legend span {
        background-color: #ffcdd2;
      }

      .selected-legend span {
        background-color: #80deea;
      }

      .book-button {
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 16px;
        background-color: #80deea;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .book-button:hover {
        background-color: #ffcdd2;
      }
    </style>
  </head>
  <body>
    <h1>Select Your Seats</h1>
    <div class="seat-map">
      <div class="row">
        <div class="seat available">1</div>
        <div class="seat booked">2</div>
        <div class="row gap"></div>
        <div class="seat available">3</div>
        <div class="seat available">4</div>
      </div>
      <div class="row">
        <div class="seat available">5</div>
        <div class="seat available">6</div>
        <div class="row gap"></div>
        <div class="seat available">7</div>
        <div class="seat available">8</div>
      </div>
      <div class="row">
        <div class="seat booked">9</div>
        <div class="seat available">10</div>
        <div class="row gap"></div>
        <div class="seat available">11</div>
        <div class="seat booked">12</div>
      </div>
      <div class="row">
        <div class="seat available">13</div>
        <div class="seat available">14</div>
        <div class="row gap"></div>
        <div class="seat booked">15</div>
        <div class="seat available">16</div>
      </div>
      <div class="row">
        <div class="seat available">17</div>
        <div class="seat booked">18</div>
        <div class="row gap"></div>
        <div class="seat available">19</div>
        <div class="seat available">20</div>
      </div>
      <div class="row">
        <div class="seat available">21</div>
        <div class="seat available">22</div>
        <div class="row gap"></div>
        <div class="seat booked">23</div>
        <div class="seat available">24</div>
      </div>
      <div class="row">
        <div class="seat available">25</div>
        <div class="seat booked">26</div>
        <div class="row gap"></div>
        <div class="seat available">27</div>
        <div class="seat available">28</div>
      </div>
      <div class="row">
        <div class="seat available">29</div>
        <div class="seat available">30</div>
        <div class="row gap"></div>
        <div class="seat available">31</div>
        <div class="seat booked">32</div>
      </div>
      <div class="row">
        <div class="seat available">33</div>
        <div class="seat available">34</div>
        <div class="seat available">35</div>
        <div class="seat selected">36</div>
        <div class="seat available">37</div>
      </div>
    </div>
    <a href="booking.html">
      <button class="book-button">Now Book</button>
    </a>
    <a href="index.html">
      <button class="book-button">Home</button>
    </a>
    
    <div class="legend">
      <div class="available-legend"><span></span> Available</div>
      <div class="booked-legend"><span></span> Booked</div>
      <div class="selected-legend"><span></span> Selected</div>
    </div>

    <script>
      const seats = document.querySelectorAll(".seat.available");
      seats.forEach((seat) => {
        seat.addEventListener("click", () => {
          seat.classList.toggle("selected");
        });
      });

      // Book button logic (example, just logs selected seats)
      document.querySelector(".book-button").addEventListener("click", () => {
        const selectedSeats = document.querySelectorAll(".seat.selected");
        const selectedSeatNumbers = Array.from(selectedSeats).map(seat => seat.textContent);
        alert(`You have booked seats: ${selectedSeatNumbers.join(", ")}`);
      });
    </script>
  </body>
</html>
