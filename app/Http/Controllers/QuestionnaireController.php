<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    // Prevents someone who is not logged in from accessing the controllers functionality
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('questionnaire.create');
    }

    public function store()
    {
        $data =  request()->validate([
            'title' => 'required',
            'purpose' => 'required',
        ]);

        // One way of creating a relationship between tables
        // $data['user_id'] = \auth()->user()->id;
        // $questionnaire = \App\Questionnaire::create($data);

        $questionnaire = \auth()->user()->questionnaires()->create($data);

        return \redirect('/questionnaires/'.$questionnaire->id);
    }

    public function show(Questionnaire $questionnaire)
    {
        $questionnaire->load('questions.answers.responses');

//        dd($questionnaire);

        return view('questionnaire.show',\compact('questionnaire'));
    }
}
