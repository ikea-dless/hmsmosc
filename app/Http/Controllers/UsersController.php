<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\UserMenu;
use Log;

class UsersController extends Controller
{
    protected $user;

    public function __construct(User $user, UserMenu $usermenu)
    {
        $this->user = $user;
        $this->usermenu = $usermenu;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $userMenus = new UserMenu;
        $today = Carbon::now();
        $user = Auth::user();
        $usermenus = $userMenus::with('menu')
            ->where('user_id', $user->id)
//            ->where('ate_at', $today->toDateString())
            ->get();
        $todaycost = 0;
        $allcost = 0;
        foreach ($usermenus as $usermenu) {
            $allcost += $usermenu->menu["cost"];
            if ($usermenu["ate_at"] == $today->toDateString()) {
                $todaycost += $usermenu->menu["cost"];
            }
        }

        return view('users.index', compact('allcost', 'user', 'todaycost'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
