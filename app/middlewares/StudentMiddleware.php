<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        $_SESSION['student_access'] = true;

        return $next();
    }
}