@extends('layouts.main')

@section('title','Contact App | Register')

@section('content')

<div class="col-md-4 m-auto mt-5">
    <div class="shadow-sm">
        <h1 class="border-bottom p-4">Register</h1>
        <div class="px-4 pt-4">
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <div class="col">
                        <input type="text" name="name"  value="{{old('name')}}" id="first_name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')

                    <div class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label @error('name') is-invalid @enderror" value="{{old('email')}}">Email</label>
                    <div class="col">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                        @error('email')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="col">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" name="password">
                        @error('password')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                    </div>


                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password Confirmation</label>
                    <div class="col">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password_confirmation')}}" name="password_confirmation">
                        @error('password')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="mt-4 d-grid">
                    <button type="submit" class="btn btn-block btn-primary">Register</button>
                    <div class="text-conter py-4 text-muted">
                        Already have Account?
                        <a href="{{route('login')}}" class="text-muted font-weight-bold text-decoration-none">Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
