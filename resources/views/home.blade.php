@extends('layouts.master')

@section('css')
<link href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css" rel="stylesheet">
<link rel="stylesheet" href="/css/accueil.css">
@endsection

@section('content')

@include('accueil')

@section('js')
<script>
$('#myCarousel').carousel({
interval: 3000,
})
</script>
@endsection
@endsection