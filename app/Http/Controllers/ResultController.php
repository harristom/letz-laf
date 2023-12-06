<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Event;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $results = Result::with(['user' => function ($query) {
            $query->select('id', 'first_name', 'last_name');
        }, 'event' => function ($query) {
            $query->select('id', 'name');
        }])
            ->select('user_id', 'finish_time', 'event_id')
            ->orderBy('finish_time')
            ->get();

        return view('results.index', ['results' => $results]);
    }
}
