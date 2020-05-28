<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (isset($request->title)) {
            $title = $request->get('title');
            $video = Video::title($title)->paginate(5);
            if ($video[0] != null) {
                return $video;
            } else {
                return "Error: video not found";
            }
        }
        return Video::all();
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Video  $video
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Video $video)
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Video  $video
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Video $video)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Video  $video
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Video $video)
    // {
    //     //
    // }
}
