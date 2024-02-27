
@extends('backend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $event->title }}</div>

                    <div class="card-body">
                        <p><strong>Description:</strong> {{ $event->description }}</p>
                        <p><strong>Type:</strong> {{ $event->type }}</p>
                        <p><strong>Start Date:</strong> {{ $event->start_date }}</p>
                        <p><strong>End Date:</strong> {{ $event->end_date }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection