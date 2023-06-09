@extends('layouts.freelancer_layout')

@section('title', 'Create')

@section('content')

<section class=" bg-gray py-5">
    <div class="container">
        <div class="flex-random">
            <h1>{{ $freelancer->user->name }}</h1>
            <a href="{{ route('user.show', ['id' => $freelancer->user->id]) }}"
                class="btn btn-primary d-block mt-2">Done</a>
        </div>
        <hr>
    </div>

    <div class="container">
        <fieldset class="border border-gary p-4 mb-5">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Current Skills</h4>

                    @foreach ($freelancer->skill as $skill)
                        <p style="margin: 0">{{ $skill->name }}</p>
                        @if ($skill->level === 'Professional')
                            @php
                                $star = 5;
                                $blank = 0;
                            @endphp
                        @elseif ($skill->level === 'Semi-Professional')
                            @php
                                $star = 4;
                                $blank = 1;
                            @endphp
                        @elseif ($skill->level === 'Advance')
                            @php
                                $star = 3;
                                $blank = 2;
                            @endphp
                        @elseif ($skill->level === 'Limited')
                            @php
                                $star = 2;
                                $blank = 3;
                            @endphp
                        @else
                            @php
                                $star = 1;
                                $blank = 4;
                            @endphp
                        @endif
                        <ul class="list-inline">
                            @for ($i = 0; $i < $star; $i++)
                                <li class="list-inline-item">
                                    <i class="fa fa-star"></i>
                                </li>
                            @endfor
                            @for ($i = 0; $i < $blank; $i++)
                                <li class="list-inline-item">
                                    <i class="fa fa-star-o"></i>
                                </li>
                            @endfor

                        </ul>
                    @endforeach
                </div>
            </div>
        </fieldset>
    </div>
    <div class="container">

        <form action="{{ route('skill.store') }}" method="POST">
            @csrf
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Add New</h2>
                    </div>
                    <div class="col-lg-12">
                        <h6 class="font-weight-bold pt-4 pb-1">Skill:</h6>
                        <input type="text" name="name" class="border w-100 p-2 bg-white text-capitalize"
                            placeholder="Enter Skill">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <input type="hidden" name="freelancer_id" class="border w-100 p-2 bg-white text-capitalize"
                            value="{{ $freelancer->id }}">
                        <h6 class="font-weight-bold pt-4 pb-1">Proficiency:</h6>
                        <select name="level" id="inputGroupSelect" class="w-100">
                            <option selected="true" disabled="disabled">Select Proficiency </option>
                            <option value="Beginner">Beginner(1)</option>
                            <option value="Limited">Limited(2)</option>
                            <option value="Advance">Advance(3)</option>
                            <option value="Semi-Professional">Semi-Professional(4)</option>
                            <option value="Professional">Professional(5)</option>
                        </select>
                        @error('level')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary d-block mt-2">Post</button>
        </form>
    </div>

</section>

@endsection
