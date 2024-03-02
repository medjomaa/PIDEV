@extends('dashboard')
@section('title', 'Gym Performance Dashboard: Insights and Trends')

@section('content')
<title>Admin Dashboard</title>
<style>

       
    body {
        background-image: linear-gradient(to bottom right, #ff0000 0%, #000000 60%);
        color: #fff;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    header, .dashboard-title, .graph-description {
        text-shadow: 2px 2px 4px #000;
    }
    .date-picker-container input[type="date"], .date-picker-container button {
        transition: all 0.3s;
        outline: none;
    }
    .date-picker-container input[type="date"]:focus, .date-picker-container button:focus {
        box-shadow: 0 0 0 2px #fff;
    }
    .graph-box {
        transition: transform 0.3s ease-in-out;
    }
    .graph-box:hover {
        transform: translateY(-5px);
    }
    .modal-content {
        border-radius: 15px;
    }
    .close {
        font-size: 24px;
        color: #000;
        transition: color 0.3s;
    }
    .close:hover {
        color: #dc3545;
    }
    header {
        text-align: center;
        padding: 20px 0;
        font-size: 24px;
        font-weight: bold;
        color: #333; /* Ensuring header text is consistent */
    }
    .date-picker-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
    font-family: 'Arial', sans-serif; /* Updated font for a modern look */
}

.date-picker-container label {
    margin-right: 10px;
    font-size: 16px;
    color: #fff; /* Updated to white for better contrast with the dark background */
}

.date-picker-container input[type="date"] {
    border: 2px solid #ff4747; /* Bright red border */
    border-radius: 5px;
    padding: 8px;
    font-size: 14px;
    background-color: #1c1c1c; /* Dark background */
    color: #fff; /* Text color updated to white for visibility */
    box-shadow: 0 2px 4px rgba(255, 71, 71, 0.4); /* Adding a subtle shadow */
}

.date-picker-container button {
    margin-left: 10px;
    background-color: #ff4747; /* Bright red background */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    box-shadow: 0 4px 8px rgba(255, 71, 71, 0.4); /* More pronounced shadow for depth */
    transition: background-color 0.3s ease; /* Smooth transition for hover effect */
}

.date-picker-container button:hover {
    background-color: #e04040; /* Slightly darker red for hover effect */
}

    .dashboard {
        background: rgba(27, 27, 50, 0.85);/* Slightly transparent white for visibility */
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #000; /* Text color for dashboard elements, adjusted as needed */
    }
    .dashboard-title {
        font-size: 20px;
        font-weight: bold;
        color: #fefefe;
    }
    .user-info {
        display: flex;
        align-items: center;
    }
    .user-name {
        margin-right: 10px;
        color: #fefefe; /* Ensuring user name is visible */
    }
    .user-image {
        width: 40px;
        height: 40px;
        color: #fefefe;
        border-radius: 50%;
        object-fit: cover;
    }
    .graph-description{
        color: #fefefe;
    }
    .graph-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .graph-item {
        width: 30%;
        padding: 10px;
        box-sizing: border-box;
    }
    .graph-item.large {
        width: 60%;
        flex: 100%;
    }
    .graph-box {
        background: rgba(27, 27, 50, 0.85);
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        border-radius: 15px;
        padding: 20px;
        margin-bottom: 20px;
        cursor: pointer;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background: rgba(27, 27, 50, 0.85);
    }
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }
    .info-section {
        background: rgba(27, 27, 50, 0.85);/* White background for clarity */
        padding: 20px;
        margin: 20px 0; /* Added margin for spacing */
        border-radius: 15px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }
    .current-date, .additional-info {
        margin-bottom: 20px;
    }
</style>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<div class="dashboard">
    <div class="dashboard-title">Gym Performance Dashboard</div>
    <div class="user-info">
    <div class="user-name">{{ $userName }}</div>
    <i class="fas fa-user" style="font-size: 40px; color: #333;"></i>
</div>


    <div class="date-picker-container">
        <form action="{{ route('dashboard') }}" method="get">
            <label for="datePicker">Select Date:</label>
            <input type="date" id="datePicker" name="date" value="{{ $selectedDate ?? '' }}">
            <button type="submit">Load Data</button>
        </form>

</div>
</div>

<header>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">    
</header>

<!-- Added info-section here -->
<!-- <div class="info-section">
    <div class="date-picker-container">
        <form action="{{ route('dashboard') }}" method="get">
            <label for="datePicker">Select Date:</label>
            <input type="date" id="datePicker" name="date" value="{{ $selectedDate ?? '' }}">
            <button type="submit">Load Data</button>
        </form>
    </div>
</div> -->
<!-- End of info-section -->

<div class="graph-container">
    @foreach($graphJSON as $index => $graph)
    <div class="graph-item">
        <div class="graph-box" onclick="openModal('modal-{{ $index }}')">
            <div class="graph-content">
                <div id="graph-{{ $index }}"></div>
            </div>
            
            <div class="graph-description">{{ $graph['description'] }}</div>
        </div>
    </div>
    <!-- Modal for each graph -->
    <div id="modal-{{ $index }}" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('modal-{{ $index }}')">&times;</span>
            <div id="modal-graph-{{ $index }}"></div>
        </div>
    </div>
    @endforeach
</div>

<script>
    var graphs = @json($graphJSON);
    
    graphs.forEach(function(graph, index) {
        var data = graph.data;
        var layout = Object.assign({}, graph.layout, {autosize: true});
        Plotly.newPlot('graph-' + index, data, layout);

        // Duplicate the graph in the modal with the same layout adjustments
        Plotly.newPlot('modal-graph-' + index, data, layout);
    });

    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
    }

    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = 'none';
        }
    }
    function loadDataForSelectedDate() {
    var selectedDate = document.getElementById('datePicker').value;
    
    // Fetch data for the selected date
    fetch(`/api/visualizations?date=${selectedDate}`)
    .then(response => response.json())
    .then(data => {
        // Assuming 'data' is an array of graphs JSON as per your backend logic
        const graphsContainer = document.getElementById('graphsContainer');
        graphsContainer.innerHTML = ''; // Clear existing graphs

        // Dynamically create and append graphs based on the data received
        data.forEach((graphData, index) => {
            var graphDiv = document.createElement('div');
            graphDiv.id = 'graph-' + index;
            graphsContainer.appendChild(graphDiv);

            Plotly.newPlot('graph-' + index, graphData.data, graphData.layout);
        });
    })
    .catch(error => console.error('Error loading data:', error));
}
</script>
@endsection
