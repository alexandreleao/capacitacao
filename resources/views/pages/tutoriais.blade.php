@extends('layout.default')

@section('content')
<ul>
@foreach ($tutoriais as $tutorial)
    <li>
        <span>{{ $tutorial['title'] }}</span>
    
        <img src="{{ $tutorial['image'] }}">
    </li>
@endforeach
</ul>

@endsection


@section('scripts')
<script>
console.log('Hola mundo')
</script>
@endsection

@section('css')
<style>
img {
    border:3px solid #000; 
    width:255px;
    margin: 15px;
}
span {
    font-size: 18px;
    font-family: 'Arial';
}


</style>
@endsection




