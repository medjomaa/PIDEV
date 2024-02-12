
@extends('dashboard')
@section('title', 'Gym Performance Dashboard: Insights and Trends')

@section('content')
<style>
    body {
        background-image: url(https://t4.ftcdn.net/jpg/04/23/87/53/360_F_423875308_S4w1IW5aReFvYzMGt4bj98GgvEmVKHnd.jpg);
        color: #fff;
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }
    header {
        text-align: center;
        padding: 20px 0;
        font-size: 24px;
        font-weight: bold;
    }
    .graph-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .graph-item {
        width: 50%;
        padding: 10px;
        box-sizing: border-box;
    }
    .modal {
        display: none; /* Add this to initially hide modals */
        /* Other modal styles omitted for brevity */
    }
</style>

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<header>Gym Performance Dashboard: Insights and Trends</header>
<div class="graph-container">
    @foreach($graphJSON as $index => $graph)
    <div class="graph-item">
        <div class="graph-box">
            <div class="graph-content">
                <div id="graph-{{ $index }}"></div>
            </div>
            <div class="graph-description">{{ $graph['description'] }}</div>
        </div>
    </div>
    @endforeach
</div>

@foreach($graphJSON as $index => $graph)
<!-- Modal HTML structure omitted for brevity -->
@endforeach

<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<script>
    var graphs = @json($graphJSON);
    
    graphs.forEach(function(graph, index) {
        // Assuming graph.data and graph.layout are already proper JavaScript objects
        // If not, you might need to parse them
        var data = graph.data;
        var layout = graph.layout;
        Plotly.newPlot('graph-' + index, data, layout);
    });

function openModal(modalId) {
    document.getElementById(modalId).style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
}

document.addEventListener('click', function(event) {
    graphs.forEach(function(_, index) {
        var modalId = 'modal-' + index;
        var modal = document.getElementById(modalId);
        var modalContent = modal.querySelector('.modal-content');
        if (event.target === modal && modalContent && !modalContent.contains(event.target)) {
            closeModal(modalId);
        }
    });
});
</script>
@endsection