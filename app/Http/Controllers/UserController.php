<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** Validação dos dados */
        $validated = $this->validateSignUp($request);

        /** Armazena dados */
        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();
        //var_dump($validated);

        //var_dump(Hash::check($request->password, $user->password ));
        /** retorna resposta */
        $response = new Response('salvo com sucesso', 200);
        return $response;
    }

    /**
     * Validação dos dados do form sign up
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function validateSignUp(Request $request)
    {
        return  $request->validate([
            'name' => 'required|unique:App\Models\User,name',
            'email' => 'required|regex:/^.+@.+\..+$/i|unique:App\Models\User,email',
            'password' => ['required', Password::min(8)],
        ]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('users')
            ->where('email', $credentials['email'])
            ->limit(1)
            ->get()[0];
        //die(var_dump($user));

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            $request->session()->put('id', $user->id);
            $request->session()->put('name', $user->name);
            $request->session()->put('email', $user->email);
            return new Response('ok', 200);
        }

        return new Response([
            'errors' => [
                'emailAlert' => ['As credenciais fornecidas não correspondem aos nossos registros.']
            ]
        ], 422);

    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return new Response('ok', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
