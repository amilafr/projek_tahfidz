<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Landing Page'
		];
		return view('user/landing-page', $data);
	}
	public function register()
	{
		$data = [
			'title' => 'Register'
		];
		return view('user/register', $data);
	}
	public function baca()
	{
		$data = [
			'title' => 'Baca Al-Quran'
		];
		return view('user/baca-quran', $data);
	}
	
	public function surat()
	{
		$data = [
			'title' => 'List Surat'
		];
		return view('user/list-surat', $data);
	}
	public function login()
	{
		$data = [
			'title' => 'Login'
		];
		return view('user/login', $data);
	}
	public function usermenu()
	{
		$data = [
			'title' => 'Usermenu'
		];
		return view('user/user-menu', $data);
	}
	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard'
		];
		return view('user/dashboard', $data);
	}
}
