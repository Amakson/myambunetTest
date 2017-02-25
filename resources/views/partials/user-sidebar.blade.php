@if ($user->about)
    <div>
        <h2>About</h2>
        <hr>
        <p>{{ $user->about }}</p>
    </div>
@endif

<div>
    <h2>URL</h2>
    <hr>
    <a href="{{ $user->username }}">myambunet/{{ $user->username }}</a>
</div>
<ul class="list-unstyled">
    @if ($user->location)
                <li> <span style="color: #74ccef" class="glyphicon glyphicon-map-marker"></span> {{ $user->location }}</li>
            @endif
            @if ($user->tel)
                <li> <span style="color: #74ccef" class="glyphicon glyphicon-envelope"></span>
                 {{ $user->tel }}</li>
            @endif
            @if ($user->cert_Level)
                <li> <span style="color: #74ccef" class="glyphicon glyphicon-phone"></span>
                {{ $user->cert_Level }}</li>
            @endif
             @if ($user->licence_number)
                <li> <span style="color: #74ccef" class="glyphicon glyphicon-list"></span>
                {{ $user->licence_number }}</li>
            @endif
            @if ($user->availability)
                <li> <span style="color: #74ccef" class="glyphicon glyphicon-map-marker"></span> {{ $user->availability }}</li>
            @endif
</ul>
@if ($user->website)
    <div>
        <h2>Website</h2>
        <hr>
        <a href="{{ $user->website }}">{{ $user->website }}</a>
    </div>
@endif

@if ($user->facebook || $user->twitter || $user->github)
    <div>
        <h2>Get Social</h2>
        <hr>
        <ol class="list-unstyled">
            @if ($user->facebook)
                <li><a href="{{ $user->facebook }}">{{ $user->facebook }}</a></li>
            @endif
            @if ($user->twitter)
                <li><a href="{{ $user->twitter }}">{{ $user->twitter }}</a></li>
            @endif
            @if ($user->github)
                <li><a href="{{ $user->github }}">{{ $user->github }}</a></li>
            @endif
            <br>
        </ol>
    </div>
@endif