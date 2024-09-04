<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
        }
    public function index() {
        return 'Selamat Datang';
        } 
    public function about() {
        return 'Chikal Nazmi Mahira - 2241760122';
        } 
    public function articles($id) {
        return 'Halaman Artikel dengan ID' .$id;  
        }         
}
