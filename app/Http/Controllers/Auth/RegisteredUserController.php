<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'driver_licence' =>['required','image','mimes:jpeg,png,jpg,gif','max:2048'],
            'identification_data_proof' => ['required','image','mimes:jpeg,png,jpg,gif','max:2048'],
            'address' => ['required', 'string', 'max:255'],
        ]);
        // Driver licence image
        $driver_licenceName = 'driver_license'.time().'.'.$request->driver_licence->extension();
        $request->driver_licence->move(public_path('driver-licence-docs'), $driver_licenceName);
        // Log::info($driver_licence);

        // ID proof image
        $identification_data_proofName = 'proof'.time().'.'.$request->identification_data_proof->extension();
        $request->identification_data_proof->move(public_path('identification-id-docs'), $identification_data_proofName);
        // Log::info($identification_data_proof);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'driver_licence' => 'driver-licence-docs/'.$driver_licenceName,
            'identification_data_proof'=>'identification-id-docs/'.$identification_data_proofName,
            'address' => $request->address,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
