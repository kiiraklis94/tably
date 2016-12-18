@extends('layouts.master')

@section('title', 'Dashboard')



@section('header-title', 'Customer Database')

@section('header-other')

    @include('templates.crm.crm_edit_customer_modal')
    @include('templates.crm.crm_add_new_modal')

    <button data-toggle="modal" data-target="#crm_add_new_modal" class="btn btn-primary pull-right"><i class="fa fa-plus" aria-hidden="true"></i> Add New Customer</button>
    <button onclick="getCustomers()" style="margin-right: 5px;" class="btn btn-default pull-right"><i class="fa fa-refresh" aria-hidden="true"></i> </button>

@endsection

@section('content')

    @include('templates.crm.customer_list')


@endsection
