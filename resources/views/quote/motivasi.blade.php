@extends('master')
@section('title', 'Kalimat Motivasi')
@section('body')
<h1>Yang Asli</h1>
<p>
<?php echo $kalimat; ?> - <?php echo $penulis; ?>
@include('partials._footer')
@stop