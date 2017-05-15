<nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu" aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand hidden-md-up" href="#">Menu</a>
        <div class="collapse navbar-collapse" id="headerMenu">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home.page') }}">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('report.step1') }}">Report a problem</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('view.problem') }}">View Problems</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.page') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('faq.page') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('council.page') }}">Councils</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.page') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Bootstrap V4 Mobile menu temporary fix -->
<script>
    jQuery(document).ready(function() {
        jQuery('.navbar-toggler').click(function() {
            jQuery('.navbar-collapse').toggleClass('bootstrap--fix');
        })
    });
</script>