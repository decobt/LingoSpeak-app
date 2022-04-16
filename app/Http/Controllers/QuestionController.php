<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Return all listings of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function questions_by_topic_id($id)
    {
        $questions = Question::where('topic_id', '=', $id)->get();
        return response()->json($questions);
    }
}