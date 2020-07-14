@extends('app')
@section('title','Home')
@section('header')
@endsection
@section('content')
<div class="container">
    <h1>date : <?= date("h:i:sa")?></h1>
    <select name="jabatan" id="">
        <option value="1">ob</option>
        <option value="2">kacung</option>
        <option value="3">bos</option>
    </select>
</div>
@endsection
