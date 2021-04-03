<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\User;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::orderBy('created_at', 'desc')->get();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('team', $team)->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'team_name' => 'required',
            'team_description' => 'required'
        ]);

        //add new team
        $team = new Team;
        $team->team_name = $request->input('team_name');
        $team->team_description = $request->input('team_description');
        $team->user_id = auth()->user()->id;
        $team->save();

        $success = array(
            'success' => 'Successfully Added'
        );

        $error = array(
            'error' => 'Fatal error'
        );

        return redirect('dashboard')->with($success, $error);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::find($id);

        return view('dashboard.teams.team')->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();

        $success = array(
            'success' => 'Team Removed'
        );

        return redirect('dashboard')->with($success);
    }
}
