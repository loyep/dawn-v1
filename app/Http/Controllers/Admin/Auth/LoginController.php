<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

/**
 * Class LoginController.
 */
class LoginController extends AuthController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Log the user out of the application.
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        $this->auth->logout($request);

        return response()->json([
            'result'  => true,
            'message' => '',
        ]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param Request $request
     *
     * @throws ValidationException
     *
     * @return Response|void
     */
    public function login(Request $request)
    {
        $this->validator($request->all())->validate();
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            $this->username() => 'required|string',
            'password'        => 'required|string',
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param Request $request
     *
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        return $this->auth->attempt(
            $this->credentials($request), $request->filled('remember')
        );
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param Request $request
     *
     * @return array
     */
    protected function credentials(Request $request)
    {
        $username = $request->input($this->username());
        $type = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        return [
            $type      => $username,
            'password' => $request->input('password'),
        ];
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param Request $request
     *
     * @return Response
     */
    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);
        $token = $this->auth->getToken();
        $user = $this->auth->user();
        $welcome = $this->generateWelcome($user);

        return response()
            ->json([
                'data' => [
                    'token'      => 'Bearer '.$token,
                    'welcome'    => $welcome,
                ],
            ])
            ->header('authorization', 'Bearer '.$token);
    }

    /**
     * @param User $user
     *
     * @return string
     */
    protected function generateWelcome(User $user)
    {
        $welcome = Str::ucfirst($user->display_name).', '.self::getPeriodOfTime().'好!';

        return $welcome;
    }

    /**
     * @param null $hour
     *
     * @return string
     */
    public static function getPeriodOfTime($hour = null)
    {
        $hour = $hour ? $hour : (int) date('G', time());
        $period = '';
        if (0 <= $hour && 6 > $hour) {
            $period = '凌晨';
        } elseif (6 <= $hour && 8 > $hour) {
            $period = '早上';
        } elseif (8 <= $hour && 11 > $hour) {
            $period = '上午';
        } elseif (11 <= $hour && 13 > $hour) {
            $period = '中午';
        } elseif (13 <= $hour && 15 > $hour) {
            $period = '响午';
        } elseif (15 <= $hour && 18 > $hour) {
            $period = '下午';
        } elseif (18 <= $hour && 20 > $hour) {
            $period = '傍晚';
        } elseif (20 <= $hour && 22 > $hour) {
            $period = '晚上';
        } elseif (22 <= $hour && 23 >= $hour) {
            $period = '深夜';
        }

        return $period;
    }

    /**
     * Validate the user login request.
     *
     * @param Request $request
     */
    protected function validateLogin(Request $request)
    {
        $this->validator($request->all())->validate();
    }
}
