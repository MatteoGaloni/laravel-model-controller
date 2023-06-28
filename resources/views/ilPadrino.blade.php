@extends('layouts.app')
@section('page-title', 'Title Override: Other Page')
@section('content')
    <div class="container my-3">
        <h1>Il Padrino</h1>
        <div class="row g-4">
            <div class="col-12">
                <div class="card bg-success">
                    <div class="card-body">
                        <div class="card-title">
                            <h2>{{ $data[0]->title }}</h2>
                        </div>
                        <div class="card-title">
                            <span>Original Title: </span>
                            <strong>{{ $data[0]->original_title }}</strong>
                        </div>
                        <div class="card-title">
                            <span>Nationality: </span>
                            <strong>{{ $data[0]->nationality }}</strong>
                        </div>
                        <div class="card-title">
                            <span>Date: </span>
                            <strong>{{ $data[0]->date }}</strong>
                        </div>
                        <div class="card-title">
                            <span>Vote: </span>
                            <strong>{{ $data[0]->vote }}</strong>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <a href="/">Torna alla Homepage</a>

    </div>
@endsection
