@extends('layouts.student-dashboard')
@section('title', 'My Grades')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">My Grades</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Grade Summary
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Subject</th>
                        <th>Code</th>
                        <th>Grade</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($grades as $grade)
                    <tr>
                        <td>{{ $grade->subject->name }}</td>
                        <td>{{ $grade->subject->code }}</td>
                        <td>{{ number_format($grade->grade, 2) }}</td>
                        <td>{{ $grade->remarks }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
