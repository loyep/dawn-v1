<?php

namespace App\Http\Controllers\Api\Traits;

use App\Http\Responses\Factory;
use ErrorException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response as FoundationResponse;

trait ApiResponse
{
    /**
     * Get the authenticated user.
     *
     * @return mixed
     */
    protected function user()
    {
        return Auth::user();
    }

    /**
     * Get the response factory instance.
     *
     * @return \App\Http\Responses\Factory
     */
    protected function response()
    {
        return app(Factory::class);
    }

    /**
     * Magically handle calls to certain methods on the response factory.
     *
     * @param string $method
     * @param array  $parameters
     *
     * @throws \ErrorException
     *
     * @return \App\Http\Responses\Response
     */
    public function __call($method, $parameters)
    {
        if (method_exists($this->response(), $method) || $method == 'array') {
            return call_user_func_array([$this->response(), $method], $parameters);
        }
        throw new ErrorException('Undefined method '.get_class($this).'::'.$method);
    }

    /**
     * @var int
     */
    protected $statusCode = FoundationResponse::HTTP_OK;

    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int      $statusCode
     * @param int|null $httpCode
     *
     * @return $this
     */
    public function setStatusCode(int $statusCode, int $httpCode = null)
    {
        $statusCode = $httpCode ?? $statusCode;
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * @param $data
     * @param array $header
     *
     * @return mixed
     */
    public function respond($data, $header = [])
    {
        return Response::json($data, $this->getStatusCode(), $header);
    }

    /**
     * @param $status
     * @param array $data
     * @param null  $code
     *
     * @return mixed
     */
    public function status($status, array $data, $code = null)
    {
        if ($code) {
            $this->setStatusCode($code);
        }
        $status = [
            'status' => $status,
            'code'   => $this->statusCode,
        ];
        $data = array_merge($status, $data);

        return $this->respond($data);
    }

    /**
     * @param $message
     * @param int    $code
     * @param string $status
     *
     * @return mixed
     */
    /*
     * 格式
     * data:
     *  code:422
     *  message:xxx
     *  status:'error'
     */
    public function error($message, $code = FoundationResponse::HTTP_BAD_REQUEST, $status = 'error')
    {
        return $this->setStatusCode($code)->message($message, $status);
    }

    /**
     * @param $message
     * @param string $status
     *
     * @return mixed
     */
    public function message($message, $status = 'success')
    {
        return $this->status($status, [
            'message' => $message,
        ]);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function internalError($message = 'Internal Error!')
    {
        return $this->error($message, FoundationResponse::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function created($message = 'created')
    {
        return $this->setStatusCode(FoundationResponse::HTTP_CREATED)
            ->message($message);
    }

    /**
     * @param $data
     * @param string $status
     *
     * @return mixed
     */
    public function success($data, $status = 'success')
    {
        return $this->status($status, compact('data'));
    }

    /**
     * @param string $message
     *
     * @return mixed
     */
    public function notFond($message = 'Not Fond!')
    {
        return $this->error($message, Foundationresponse::HTTP_NOT_FOUND);
    }
}
