@extends('layouts.main')

@section('content')
            <section id="home" >
                @include('pages.home')
            </section>
            <section id="about" class="nsection">
                @include('pages.about')
            </section>
            <section id="services" class="nsection">
                @include('pages.services')
            </section>

            <section id="team" class="nsection">
                @include('pages.team')
            </section>

            <section id="developers" class="nsection">
                @include('pages.developers')
            </section>

            <section  id="clients" class="nsection"><!--page_section-->
                @include('pages.clients')
              </section>

            <section id="contact" class="nsection">
                @include('pages.contact')
            </section>
        @endsection
