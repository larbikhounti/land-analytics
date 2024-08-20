<?php

namespace App\Http\Middleware;

use App\Contracts\UserDtoInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    protected $user;
    public function __construct(UserDtoInterface $user) {
        $this->user = $user;
    }
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    public function share(Request $request)
    {
       $user =  $this->user->getUser();
        return array_merge(parent::share($request), [
                'auth' => Auth::user() ? ['user' => $user] : ['user' => null]
        ]);
    }
}
