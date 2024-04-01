<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH .'libraries/RestController';
use chriskacerguis\RestServer\RestController;

class ApiController extends RestController {

    public function index_get() {
        echo "I love PHP";
    }
}
