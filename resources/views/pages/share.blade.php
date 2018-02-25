@extends('layout')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @component('card', ['title' => 'Stories'])

                    <p>
                        This section is under construction.

                        <br>

                        Here will be interviews from famous people.

                        <br>

                        <ul>
                            <li>Apply for a talk</li>
                            <li>Apply for an open source project</li>
                            <li>Apply for event organiser</li>
                        </ul>
                    </p>

                @endcomponent
            </div>
        </div>
    </div>

@endsection