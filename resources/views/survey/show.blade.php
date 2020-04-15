@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $questionnaire->title }}</h1>

            <form action="/surveys/{{$questionnaire->id}}-{{ Str::slug($questionnaire->title) }}" method="POST">
                @csrf

                @foreach($questionnaire->questions as $key => $question)
                    @error('responses.'. $key .'.answer_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror

                    <div class="card mt-4">
                        <div class="card-header"><strong>{{$key + 1}}.</strong> {{ $question->question }}</div>

                        <div class="card-body">
                            <ul class="list-group">
                                @foreach($question->answers as $answer)
                                   <label for="answer{{ $answer->id }}">
                                       <li class="list-group-item">
                                           <input type="radio" name="responses[{{ $key }}][answer_id]" id="answer{{ $answer->id }}"
                                                  {{ (old('responses.'. $key .'.answer_id') == $answer->id) ? 'checked': '' }}
                                                  class="mr-2" value="{{ $answer->id }}">
                                           {{ $answer->answer }}
                                           <input type="hidden" name="responses[{{ $key }}][question_id]" value="{{ $question->id}}">
                                       </li>
                                   </label>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach

                <div class="card mt-4">
                    <div class="card-header">Your Information</div>

                    <div class="card-body">
                       <div class="form-group">
                            <label for="name">Your Name</label>
                            <input name="survey[name]" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Your Name">
                            <small id="nameHelp" class="form-text text-muted">Thank You for filling out this survey! Kindly leave us with your name.</small>
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                      </div>

                      <div class="form-group">
                            <label for="email">Your E-mail Address</label>
                            <input name="survey[email]" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <small id="emailHelp" class="form-text text-muted">Kindly leave us with your E-mail Address.</small>
                            @error('email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                      </div>
                    </div>
                </div>

                <div>
                    <button class="btn btn-dark mt-3 mb-3" type="submit">Complete Survey</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
