@extends('layouts.main')

@section('content')
<section class="mt-6 md:mt-8 md:max-w-4xl mx-auto px-4 md:px-8 lg:px-0">

  <h2 class="before:content-[''] before:border-[10px] md:before:border-[16px] before:border-transparent before:border-l-gray-800 before:rounded before:mb-[2px] md:before:mb-[4px] before:mr-1
          flex items-center text-xl md:text-3xl text-gray-800 font-bold uppercase mb-6 mt-8 md:mt-10">
    Cloud Native Contributions</h2>

  <div class="grid md:grid-cols-2 gap-6 md:gap-8">
    @if($projects->count())
        <h3 class="flex items-center text-l md:text-2xl text-gray-800 font-bold uppercase mt-8 md:mt-10">
            Projects</h3>
        <br>
        @foreach($projects as $project)
            <x-contributions.card :contribution="$project" />
        @endforeach
    @endif

    @if($prs->count())
        <h3 class="flex items-center text-l md:text-2xl text-gray-800 font-bold uppercase mt-8 md:mt-10">
            Pull/Merge Requests</h3>
        <br>
        @foreach($prs as $pr)
            <x-contributions.card :contribution="$pr" />
        @endforeach
    @endif

    @if($issues->count())
        <h3 class="flex items-center text-l md:text-2xl text-gray-800 font-bold uppercase mt-8 md:mt-10">
            Issues</h3>
        <br>
        @foreach($issues as $issue)
            <x-contributions.card :contribution="$issue" />
        @endforeach
    @endif

  </div>
</section>
@endsection

@section('head')
<title>Contributions | Cloud Native Chapter of Mauritius</title>
@endsection
