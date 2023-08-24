<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <button  class="abc"><i class="fas fa-signup"></i><a href="./signup.php">SignUp</a></button>
    <div class="movie-container">
        <h1><i class="fas fa-ticket">&nbsp;</i> Online Movie seat Booking in Nepal !!! </h1>
         
        <div class="container">
            
            <label for="Pick a movie">Pick a movie</label>
            <select id="movie">
                <option value="500">Avengers (Rs.500) </option>
                <option value="300">Cartoon (Rs.300)</option>
                <option value="500">JackPort (Rs.500)</option>
                <option value="800">Titanic (Rs.800)</option>
                <option value="500">Sooryavanshm (Rs.500)</option>
                <option value="500">Nepali: movie (Rs.500)</option>
            </select>
            <div class="container-1">
                <label for="Pick your time">Pick your Time</label>
                <select id="Time">
                    <option value="9:00 am- 12:00 pm">Time : 9:00 am - 12:00 pm </option>
                    <option value=" 9:00 am - 12:00 pm">Time : 12:00 pm - 2:00 pm</option>
                    <option value="2:00 pm - 5:00 pm">Time : 2:00 pm - 5:00 pm</option>
                    <option value=" 5:00 pm - 9:00 pm">Time : 5:00 pm - 9:00 pm</option>
                </select>
                <div class="showcase">
                    <ul class=" showcase">
                        <li>
                            <div class="seat"></div>
                            <small>N/A</small>
                        </li>
                        <li>
                            <div class="seat selected"></div>
                            <small>selected</small>
                        </li>
                        <li>
                            <div class="seat occupied"></div>
                            <small>Occupied</small>
                        </li>
                    </ul>
                </div>
                <div class="content">
                    <div class="screen"></div>
                    <div class="row">
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                    </div>
                    <div class="row">
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                    </div>
                    <div class="row">
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                    </div>
                    <div class="row">
                        <div class="seat"></div>
                        <div class="seat Occupied"></div>
                        <div class="seat  occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                    </div>
                    <div class="row">
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                    </div>
                    <div class="row">
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                    </div>
                    <div class="row">
                        <div class="seat occupied"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                        <div class="seat"></div>
                        <div class="seat occupied"></div>
                    </div>
                </div>
                <p class="text">You have selected <span id="count">0</span> seats for price Rs. <span
                        id="total">0</span></p>
            </div>
        </div>
        <button id="btn" class="btn" type="button" disabled="">submit
        </button>

        <button id="bton">Cancel</button>
    </div>
    <!-- <div class="popup" id="popup" style="display:none">
        <p>This is a popup </p>
        <p>Website will be visible after closing</p>
        <button class="close">close</button>
    </div> -->
    <script src="./script.js"></script>

</body>

</html>