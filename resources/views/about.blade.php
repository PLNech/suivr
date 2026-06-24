@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
@endsection

@section('content')
<div class="suivr-hero">
    <span class="suivr-trail" aria-hidden="true">
        <svg viewBox="0 0 120 104"><g fill="currentColor">
            <g transform="translate(20 86) rotate(-26)" opacity="0.22"><ellipse cx="0" cy="0" rx="6" ry="9.5"/><ellipse cx="0.4" cy="13.5" rx="4.3" ry="5.2"/></g>
            <g transform="translate(43 66) rotate(-26)" opacity="0.42"><ellipse cx="-5" cy="0" rx="6" ry="9.5"/><ellipse cx="-4.6" cy="13.5" rx="4.3" ry="5.2"/></g>
            <g transform="translate(68 45) rotate(-26)" opacity="0.68"><ellipse cx="0" cy="0" rx="6" ry="9.5"/><ellipse cx="0.4" cy="13.5" rx="4.3" ry="5.2"/></g>
            <g transform="translate(94 23) rotate(-26)" opacity="1"><ellipse cx="-5" cy="0" rx="6" ry="9.5"/><ellipse cx="-4.6" cy="13.5" rx="4.3" ry="5.2"/></g>
        </g></svg>
    </span>
    <div class="name">{{env('APP_NAME')}}<span class="dot">.</span></div>
    <p class="kicker">Follow the link. Track the trail.</p>
</div>

<div class="lineage">
    @if ($role == "admin")
    <dl>
        <p>Build information</p>
        <dt>Version: {{env('POLR_VERSION')}}</dt>
        <dt>Release date: {{env('POLR_RELDATE')}}</dt>
        <dt>App install: {{env('APP_NAME')}} on {{env('APP_ADDRESS')}} on {{env('POLR_GENERATED_AT')}}</dt>
    </dl>
    <p>You see the build information above because you are signed in as an administrator. Edit this page at <code>resources/views/about.blade.php</code>.</p>
    @endif

    <h3>Lineage</h3>
    <p>{{env('APP_NAME')}} runs on <strong>suivr</strong>, a friendly fork of
        <a href="https://github.com/cydrobolt/polr">Polr</a>, the open-source link shortener by Chaoyi Zha.
        suivr keeps Polr's core intact and adds the link-management API the original lacks: list, rename,
        update, toggle, and delete, each with ownership checks.
        Learn more at <a href="https://github.com/PLNech/suivr">github.com/PLNech/suivr</a>.</p>
    <p>The name is French for <em>to follow</em>, the same root as the footprints above.
        Both Polr and suivr are licensed under the GNU GPL.</p>
</div>
@endsection
