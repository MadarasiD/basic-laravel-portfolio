@extends('frontend.layouts.layout')

@section('content')
		<!-- Header-Area-Start -->
        @include('frontend.sections.hero')
		<!-- Header-Area-End -->

		<!-- Service-Area-Start -->
        @include('frontend.sections.service')
		<!-- Service-Area-End -->

		<!-- About-Area-Start -->
        @include('frontend.sections.about')
		<!-- About-Area-End -->

		<!-- Portfolio-Area-Start -->
        @include('frontend.sections.portfolio')
		<!-- Portfolio-Area-End -->

		<!-- Skills-Area-Start -->
        @include('frontend.sections.skills')
		<!-- Skills-Area-End -->

		<!-- Experience-Area-Start -->
        @include('frontend.sections.experience')
		<!-- Experience-Area-End -->

        <!-- Contact-Area-Start -->
        @include('frontend.sections.contact')
		<!-- Contact-Area-End -->
@endsection