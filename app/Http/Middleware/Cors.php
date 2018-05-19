<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

//        header('Access-Control-Allow-Origin', '*');

        if ($request->method('OPTIONS')) {

            return $next($request)->header('Access-Control-Allow-Origin', '*')
                ->header('Access-Control-Allow-Methods', 'GET, POST');
        }


        return $next($request)
//            ->header('Access-Control-Allow-Origin', 'http://localhost:3000')
//            ->header('Access-Control-Allow-Credentials', true)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Headers', 'accept, content-type, Origin, Content-Type, Autorization')
            ->header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, DELETE, PUT, PATCH')
            ->header('Access-Control-Allow-Methods', 'OPTIONS')
            ->header('Access-Control-Allow-Methods', 'GET')
            ->header('Access-Control-Allow-Methods', 'POST');




//            ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');


//            if ($request->isMethod('options')) {
//            return response('', 200)
//                ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
//                ->header('Access-Control-Allow-Headers', 'accept, content-type,
//                x-xsrf-token, x-csrf-token'); // Add any required headers here
//        }
//        return $next($request);


//        $domains = [ 'http://localhost:3000' ];
//
//        if(isset($request->server()['HTTP_ORIGIN'])) {
//            $origin = $request->server()['HTTP_ORIGIN'];
//            if (in_array($origin, $domains)){
//                header('Access-Control-Allow-Origin: ' . $origin);
//                header('Access-Control-Allow-Headers: Origin, Content-Type, Autorization');
//                header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, DELETE, PUT, PATCH');
//                header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT, PATCH');
//
//            }
//        }
//        return $next($request);

    }
}
