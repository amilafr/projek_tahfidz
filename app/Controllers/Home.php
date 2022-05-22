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
	public function surat()
	{
		$data = [
			'title' => "Surat Al-Qur'an"
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
	public function profil()
	{
		$data = [
			'title' => 'Profil'
		];
		return view('user/profil', $data);
	}
	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard'
		];
		return view('user/dashboard', $data);
	}
	public function hafalan()
	{
		$data = [
			'title' => 'Hafalan'
		];
		return view('user/hafalan', $data);
	}
	public function murojaah()
	{
		$data = [
			'title' => "Muroja'ah"
		];
		return view('user/murojaah', $data);
	}
	public function detailsurat($number)
	{
		$data = [
			'title' => "Surat Al-Qur'an",
			'no_surat' => $number
		];
		return view('user/detail-surat', $data);
	}
}
