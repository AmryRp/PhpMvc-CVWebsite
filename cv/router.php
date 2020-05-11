<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/cv/" ||$url == "/cv"||$url == "/")
        {
            $request->controller = "views";
            $request->action = "index";
            $request->params = [];
        }
        elseif ($url == "/admin/" ||$url == "/admin")
        {
            $request->controller = "admin";
            $request->action = "index";
            $request->params = [];
        }
         elseif ($url == "/login/" ||$url == "/login")
        {
            $request->controller = "login";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            $request->controller = "views";
            $request->action = "index";
            $request->params = [];
            // $explode_url = explode('/', $url);
            // $explode_url = array_slice($explode_url, 2);
            // $request->controller = $explode_url[0];
            // $request->action = $explode_url[1];
            // $request->params = array_slice($explode_url, 2);
        }

    }
}
?>