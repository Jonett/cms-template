<?php

class cms_error
{
    public static function get(int $http_error_code):string{
        return match($http_error_code){
            403 => 'errors/403.html',
            404 => 'errors/404.html',
            default => 'errors/error_code_missing.html'
        };
    }
}