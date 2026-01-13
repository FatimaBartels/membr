@extends('layouts.app')


@section('title', 'My Membr')

@section('hero')
<x-hero/>
@endsection

@section('content')
<div class="container">
    <h2 class="subtext">Why Subscribe?</h2>
   
       <div class="row">
            <!--first card-->
            <x-feature-card
                title="Why Subscribe?"
                image="images/subscribe.svg">
            
                <p class="card-text">Stay in the loop with all my latest projects and tutorials.</p>
            </x-feature-card>

            <!--second card-->
              <x-feature-card
                title="Project & Updates"
                image="images/organizing.svg">
            
                <p class="card-text">Be the first to see new projects and improvements.</p>
            </x-feature-card>

            <!--third card-->
              <x-feature-card
                title="Tips & Tutorial"
                image="images/video.svg">
            
                <p class="card-text">Get exclusive tips and mini tutorials to improve your coding and design skills.</p>
            </x-feature-card>
    </div>
</div>
 
@endsection