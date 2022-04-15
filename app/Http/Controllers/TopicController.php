<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Return all listings of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_topics()
    {
        $topics = Topic::all();
        return response()->json($topics);
    }

    /**
     * Return a single listing of the resource.
     */
    public function get_topic_by_id($id)
    {
        $topic = Topic::findOrFail($id);
        return response()->json($topic);
    }
}