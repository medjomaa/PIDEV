@section('content')
    <h1>Recommendations</h1>
    <ul>
        @foreach($recommendations as $recommendation)
            <li>
                {{ $recommendation->title }} - {{ $recommendation->description }}
                {{-- Add more fields as needed --}}
            </li>
        @endforeach
    </ul>
@endsection