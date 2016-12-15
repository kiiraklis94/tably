@extends('layouts.master')

@section('title', 'Dashboard')



@section('header-title', 'Customer Database')

@section('header-other')
    <button class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New</button>
    <button onclick="getCustomers()" style="margin-right: 5px;" class="btn btn-default pull-right"><i class="fa fa-refresh" aria-hidden="true"></i> </button>
@endsection

@section('content')

    @include('templates.crm.customer_list')

@endsection