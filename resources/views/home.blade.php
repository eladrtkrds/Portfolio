@extends('app')

@section('content')
<main class="hero-section">
    <div class="hero-text">
        <h1>Hey there, I'm Elif.</h1>
        <p>Thanks for checking out my portfolio.</p>
        <p>While you're here, check out my work.</p>
        <p>Here's some stuff about me.</p>
        <div class="cta-buttons">
            <a href="{{ asset('Documents/resume.pdf') }}" target="_blank">View my resume</a>

        </div>
    </div>
</main>
@endsection
