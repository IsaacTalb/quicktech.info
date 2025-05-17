@extends('website.layout.main')
@section('title', 'About Us')
@section('meta-description', 'About Us - Learn more about Quick Tech, our mission, our values, and the anonymous global team behind our tech journalism.')

@section('content')

<style>
    .about-wrapper {
        background-color: #111827;
        color: #e5e7eb;
        padding: 4rem 1.5rem;
        border-radius: 0.5rem;
    }

    .about-wrapper h1,
    .about-wrapper h4 {
        color: #60a5fa;
    }

    .about-wrapper p {
        line-height: 1.8;
        font-size: 1rem;
        color: #d1d5db;
    }

    .team-card {
        background-color: #1f2937;
        color: #f9fafb;
        border-radius: 0.75rem;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-5px);
    }

    .team-card h5 {
        font-size: 1.2rem;
        color: #93c5fd;
    }

    .team-card p {
        font-size: 0.95rem;
        margin-bottom: 0.5rem;
    }

    .contact-section {
        background-color: #1e40af;
        color: #f9fafb;
        padding: 3rem 1.5rem;
        border-radius: 0.5rem;
    }

    .contact-section a {
        color: #facc15;
        text-decoration: underline;
    }

    .btn-primary {
        background-color: #3b82f6;
        border: none;
    }

    .btn-primary:hover {
        background-color: #2563eb;
    }

    @media (max-width: 768px) {
        .about-wrapper {
            padding: 2rem 1rem;
        }

        .team-card {
            margin-bottom: 1.5rem;
        }
    }
</style>

<div class="about-wrapper">
    <div class="container">
        <h1 class="mb-4 font-weight-bold text-center">About Us</h1>

        <p class="mb-4">
            <strong>Quick Tech</strong> is a modern digital platform focused on delivering reliable, up-to-date news in the fields of Technology, Artificial Intelligence, Cybersecurity, and Digital Innovation. Our mission is to keep our readers informed and aware in a rapidly evolving tech landscape.
        </p>

        <h4 class="mb-3 font-weight-semibold">What We Cover</h4>
        <p class="mb-4">
            We cover a wide range of topics including breakthroughs in AI, cybersecurity alerts, software and hardware innovations, privacy updates, digital policy, and tech trends shaping the future.
        </p>

        <h4 class="mb-3 font-weight-semibold">Our Editorial Team</h4>
        <p class="mb-4">
            Our content is brought to you by a team of anonymous yet dedicated global contributors and editors. Each team member is committed to accuracy, depth, and clarity.
        </p>

        <!-- Team Members Section -->
        <div class="my-5">
            <h4 class="mb-4 font-weight-semibold text-center">Meet Our Team</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="team-card text-center">
                        <h5>A. Harper</h5>
                        <p class="text-muted small">Tech News Editor</p>
                        <p>Covers AI, software updates, and industry trends from a global perspective.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card text-center">
                        <h5>J. Lin</h5>
                        <p class="text-muted small">Cybersecurity Analyst</p>
                        <p>Focuses on cybersecurity threats, online safety, and ethical hacking news.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="team-card text-center">
                        <h5>M. Singh</h5>
                        <p class="text-muted small">AI & Data Correspondent</p>
                        <p>Explores the impact of artificial intelligence and big data on society and innovation.</p>
                    </div>
                </div>
            </div>
        </div>

        <h4 class="mb-3 font-weight-semibold">Our Commitment</h4>
        <p class="mb-4">
            Quick Tech is committed to transparency, accuracy, and integrity. We are not influenced by corporate sponsors or political affiliations.
        </p>

        <h4 class="mb-3 font-weight-semibold">Join the Conversation</h4>
        <p>
            We welcome tech enthusiasts, professionals, and readers from all backgrounds to contribute ideas, provide feedback, and engage in meaningful discussions that shape the digital future.
        </p>
    </div>
</div>

<!-- Contact Section -->
<div class="contact-section text-center mt-5">
    <h5 class="mb-3 font-weight-bold">Have Questions or Feedback?</h5>
    <p class="mb-3">Feel free to reach out to us at <a href="{{ route('contact-us') }}">contact@quicktech.com</a></p>
    <a href="{{ route('contact-us') }}" class="btn btn-primary">Contact Us</a>
</div>

@endsection

@section('extra-js')
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<script src="assets/vendors/aos/dist/aos.js/aos.js"></script>
<script src="./assets/js/demo.js"></script>
@endsection
