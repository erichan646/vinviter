@extends('layouts.master')

@section('title', 'Upcoming events - Dashboard')

@section('content')
<nav>
    <div class="middle-gray-panel">
        @include('layouts.feedback_modal')
        <div class="row">
            <div class="small-8 small-centered columns">
                <div class="option-box">
                    <div class="row small-up-3 dib100">
                        <div class="column"><a class="button dashboard-nav-button dashboard-page-active" href="{{ route('dashboard.upcomingEvents') }}">My Events</a></div>
                        <div class="column"><a class="button dashboard-nav-button" href="{{ route('dashboard.publishedPages') }}">My Pages</a></div>
                        <div class="column"><a class="button dashboard-nav-button" href="{{ route('dashboard.inviteLists.show') }}">Invite Lists</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<section class="content dashboard">
  <div class="row">
    <div class="small-12 columns events my-events">
        <div class="row">
            <div class="small-6 columns">
                <ul class="menu event-mode-menu">
                    <li class="active"><a href="{{ route('dashboard.upcomingEvents') }}">Upcoming</a></li>
                    <li><a href="{{ route('dashboard.historyEvents') }}">History</a></li>
                    <li {{ (Auth::user()->events()->saved()->count() > 0) ? '' : 'class=list-disabled' }}><a href="{{ route('dashboard.savedEvents') }}">Saved</a></li>
                </ul>
            </div>
            <div class="small-6 columns">
                <ul class="menu event-type-mode-menu float-right">
                    <li class="active"><a href="{{ route('dashboard.upcomingEvents') }}">Creator</a></li>
                    <li {{ (Auth::user()->adminOfEvents()->upcoming()->count() > 0) ? '' : 'class=list-disabled' }}><a href="{{ route('dashboard.upcomingEvents.typeAdmin') }}">Admin</a></li>
                </ul>
            </div>
        </div>

        @forelse($events as $event)
        @include('dashboard.creatorUpcomingEvent_row')
        @empty
        <h5 class="no-events-found">No events found. Click on (Create) to make a new one.</h5>
        @endforelse
    </div>
</div>
@if($events->hasMorePages())
<div class="row">
<div class="small-12 columns">
        <button class="dashboard-events-load-more load-more" data-request-url="{{ route('dashboard.upcomingEvents') }}" data-next-page="{{ $events->currentPage()+1 }}" data-last-page="{{ $events->lastPage() }}" data-left-off="{{ $events->last()->id }}"><span class="fa fa-refresh"></span>Load more</button>
        <script type="text/javascript">
            var loadMoreParameters = "{!! '?'.http_build_query(Request::query()) !!}";
        </script>
    </div>
</div>
@endif
</section>

@endsection