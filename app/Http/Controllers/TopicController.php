<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Topic;
use App\Models\Progress;
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
        $userId = Auth::id();
        $response = array();

        foreach($topics as $topic){
            $progress = Progress::where('topic_id', '=', $topic->id)->where('user_id','=', $userId)->value('score');
            $response[] = array(
                'id' => $topic->id,
                'name' => $topic->name,
                'description' => $topic->description,
                'icon' => $topic->icon,
                'progress' => $progress ? $progress * 25 : 0
            );
        }
        return response()->json($response);
    }

    /**
     * Return a single listing of the resource.
     */
    public function get_topic_by_id($id)
    {
        $topic = Topic::findOrFail($id);
        return response()->json($topic);
    }

    /**
     * Set a score for a specific topic
     */
    public function set_score(Request $request)
    {
        $progress = new Progress();
        $progress->topic_id = $request->topic_id;
        $progress->user_id = $request->user_id;
        $progress->score = $request->score;
        $progress->save();

        return response()->json('Score was succesfully saved.', 200);
    }
}