@extends('layouts.main')

@section('title', 'Welcome')
@section('meta_description', 'A gentle introduction to the topics and projects that stitch together the mind of Jake Oliger')
@section('meta_title', 'Jake Oliger\'s Portfolio Website')

@section('content')
    <h2>Hi, nice to meet ya</h2>
    <div class="page-banner lake-monroe"><p>Photo I took on Monroe &mdash; a lake near Bloomington, IN</p></div>
    <p><img class="profile-picture" width="150" height="150" src="{{ url('images/profile-picture-2.jpg') }}" alt="Jake in a suit!" title="Jake in a suit!">I'm a software developer graduating with a B.S. in Computer Science from Indiana University in December 2021. My interests, while rooted in Computer Science, are broad and range from cognitive science and linguistics to political theory and philosophy. I have industry experience in programming and web development and am now looking to broaden my horizons and figure out where best I can apply my motivation to positively impact my community using cutting-edge technology and algorithms. You can find examples of my work on my <a href="/projects">projects page</a>.</p>
    <p>Thanks for checking me out! Please don't hesitate to reach out if you'd like to chat &mdash; you can find my info on the <a href="/contact">contact page</a>. I hope you have a <span id="time-display">wonderful day</span>.</p>
    <p class="sign-off">- Jake</p>
@endsection

@section('scripts')
    <script>
        var h = new Date().getHours();
        var timeDisplay = document.getElementById("time-display");
        var newLabel = "wonderful day";
        if (h < 4 || h > 22) {
            newLabel = "peaceful night";
        } else if (h < 11) {
            newLabel = "bright morning";
        } else if (h < 17) {
            newLabel = "phenomenal afternoon";
        } else {
            newLabel = "relaxing evening";
        }
        timeDisplay.innerHTML = newLabel;
    </script>
@endsection