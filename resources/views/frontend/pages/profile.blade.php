@extends('frontend.layouts.master')

@section('title','پروفایل کاربر')

@php
    $findMember = \App\Models\Member::where('user_id',auth()->user()->id)->first();
@endphp

@section('middle')
    @include('frontend.layouts.includes.gadgets.profile-middle')
@endsection

