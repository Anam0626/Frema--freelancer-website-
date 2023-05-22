@extends('dashboard')
@section('title', 'Category')

@section('content')
@foreach ($category2 as $category)
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ $category->name }}
                        </h2>
                        @php
                            $i = 1;
                        @endphp
                        <table class="table">
                            @foreach ($category->sub_category as $sub_category)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $sub_category->name }}</td>
                                    <td>
                                        <form action="{{route('category.delete',['id' => $sub_category->id])}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger ml-3">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
@endsection
