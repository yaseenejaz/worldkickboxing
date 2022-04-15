@extends('frontend.app')
@section('title')
    <title>About Us</title>
@endsection
@section('content')
    <section class="inner-header">
        <h1>ABOUT US</h1>
    </section>

    <section class="about-page">
        <div class="container">
            <div class="row">
                <div class="ab-us">
                    <div class="col-xl-6">
                        <div class="half">
                            <img src="{{ asset('frontend/images/ab1.png') }}">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="half">
                            <h2 class="hd-blk">ABOUT US</h2>
                            <p class="para">Kihapp is a tournament management service specially designed for martial artists. Kihapp gives a hand in every part of the process of a tournament, from online registration to making brackets, printing certificates and publishing results.</p>
                            <p class="para">Kihapp runs entirely on the web, meaning you can use it on anything that has a web browser: Windows, Mac, Linux, Android, iPhone, iPad, anything you like. It also means there is nothing to install.</p>
                            <p class="para">Kihapp is easily customizable to any form of martial arts. Currently, the following are supported:</p>
                            <ul>
                                <li>ITF Taekwon-Do</li>
                                <li>Kickboxing</li>
                                <li>Karate</li>
                                <li>Sport Karate</li>
                                <li>Sport Martial Arts</li>
                                <li>Taido</li>
                                <li>Brazilian Jiu-jitsu</li>
                                <li>Filipino Martial Arts</li>
                                <li>Tang Soo Do</li>
                                <li>Hapkido</li>
                                <li>Ju-Jitsu</li>
                                <li>WT Taekwondo (beta)</li>
                                <li>Judo (beta)</li>
                            </ul>
                            <p class="para">If your form of martial arts isn't on the list, get in touch and we'll sort it out!</p>
                        </div>
                    </div>
                </div>
                <div class="mec">
                    <div class="col-xl-6">
                        <div class="half">
                            <h2 class="hd-blk">MAIN EVENT<br><span>CHAMPIONSHIPS</span></h2>
                            <p class="para">In 2009, I was put in charge of a local tournament by my taekwondo school. As I was unable to find software that would help me take in registrations, make brackets, and publish results, I decided to write the first version of what would eventually become Kihapp.</p>
                            <p class="para">My name is Ville Sundberg. I'm a Finnish martial artist and software developer with more than a decade of experience in creating reliable, easy-to-use software. I hold a 4th degree black belt in ITF Taekwon-Do, and You can reach me at <a href="mailto:ville@kihapp.com">ville@kihapp.com.</a></p>
                            <p class="para">Today, Kihapp has been in active use and development for more than 10 years, is in use in 60 countries, and has handled more than 83 thousand registrations.</p>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="half">
                            <img src="{{ asset('frontend/images/ab2.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
