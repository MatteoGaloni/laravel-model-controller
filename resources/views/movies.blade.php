@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <h1>MOVIES PAGE</h1>
        <div class="row g-4">
            @foreach ($data as $item)
                @if ($loop->first)
                    <div class="col-6">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="card-title">
                                    <a href="ilPadrino">
                                        <h2>{{ $item->title }}</h2>
                                    </a>
                                </div>
                                <div class="card-title">
                                    <span>Original Title: </span>
                                    <strong>{{ $item->original_title }}</strong>
                                </div>
                                <div class="card-title">
                                    <span>Nationality: </span>
                                    <strong>{{ $item->nationality }}</strong>
                                </div>
                                <div class="card-title">
                                    <span>Date: </span>
                                    <strong>{{ $item->date }}</strong>
                                </div>
                                <div class="card-title">
                                    <span>Vote: </span>
                                    <strong>{{ $item->vote }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-6">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="card-title">
                                    <h2>{{ $item->title }}</h2>
                                </div>
                                <div class="card-title">
                                    <span>Original Title: </span>
                                    <strong>{{ $item->original_title }}</strong>
                                </div>
                                <div class="card-title">
                                    <span>Nationality: </span>
                                    <strong>{{ $item->nationality }}</strong>
                                </div>
                                <div class="card-title">
                                    <span>Date: </span>
                                    <strong>{{ $item->date }}</strong>
                                </div>
                                <div class="card-title">
                                    <span>Vote: </span>
                                    <strong>{{ $item->vote }}</strong>
                                </div>

                            </div>

                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
