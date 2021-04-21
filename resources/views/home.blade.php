@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                                <h1 class="text-gray-200">Examen Final ISW811 - Anthony Keylor Cardona Mairena</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
