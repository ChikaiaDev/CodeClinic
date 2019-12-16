@extends('layouts.main')

@section('content')
            <section id="home">
                @include('pages.home')
            </section>
            <section id="about">
                @include('pages.about')
            </section>
            <section id="services">
                @include('pages.services')
            </section>
            <section id="team">
                @include('pages.team')
            </section>
            <section id="developers">
                @include('pages.developers')
            </section>

            <section id="contact">
                @include('pages.contact')
            </section>
        @endsection
