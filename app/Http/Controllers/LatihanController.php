<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\User;
use App\UserDetail;
use App\Address;
use App\Education;
use App\University;
use App\UserNewIndustry;
use App\RalaliIndustry;

class LatihanController extends Controller
{
    public function index()
    {
        return view('trial');
    }

    public function show1()
    {
        // tabel1 --belum
        // $hasil = User::whereHas('addresses',  function ($q) use (user_id)) 
        // $q->where('user_id', $user_id);
        // })->get();

        // Example
        // $posts = Post::whereHas('likes', function ($q) use ($userId) {
            // $q->where('user_id', $user_id);
        // })->get();
        // DD($hasil);

        $L1= DB::table('users')
        ->join('education', 'users.id', '=', 'education.user_id')
        ->join('addresses', 'users.id', '=', 'addresses.user_id')
        ->selectRaw('count(*) as total, education.year_of_graduation')
        ->where('addresses.regency_id', 'like', '3%')
        ->whereIn('education.year_of_graduation',[2020,2021])
        ->groupByRaw('education.year_of_graduation')
        ->get();        

        return view('latihan1', compact('L1'));

    }

    public function show2()
    {
        $no=1;
        $L2= DB::table('users')
        ->join('user_details', 'users.id', '=', 'user_details.user_id')
        ->join('education', 'users.id', '=', 'education.user_id')
        ->join('universities', 'universities.id', '=', 'education.university_id')
        ->selectRaw("users.name, users.email, user_details.phone_number, universities.university_name, user_details.internship_status, user_details.job_status, users.created_at")
        ->whereRaw("users.created_at >= '2020-06-01 00:00:00' AND (user_details.internship_status=1 OR user_details.job_status=1)")
        ->orderBy('users.created_at')
        ->get();

        // DD($L2);
        return view('Latihan2', compact('L2','no'));
    }

    public function show3()
    {
        $no=1;
        $L3= DB::table('user_new_industries')
        ->join('ralali_industries','user_new_industries.industry_id','=','ralali_industries.id')
        ->selectRaw(" ralali_industries.name, COUNT(user_new_industries.id) AS 'total'")
        ->groupByRaw('ralali_industries.name')
        ->orderByDesc('total')
        ->limit(10)
        ->get();

        // DD($L3);
        return view('Latihan3', compact('L3','no'));

    }

    public function show4()
    {
        $no=1;
        $L4= DB::table('education')
        ->join('universities','education.university_id','=','universities.id')
        ->selectRaw(" universities.university_name, COUNT(education.id) AS 'total'")
        ->groupByRaw('universities.university_name')
        ->orderByDesc('total')
        ->limit(10)
        ->get();

        // DD($L4);
        return view('Latihan4', compact('L4','no'));

    }

    public function show5()
    {
        $no=1;
        $L5=DB::table('users')
        ->join('user_details', 'users.id', '=', 'user_details.user_id')
        ->join('education', 'users.id', '=', 'education.user_id')
        ->join('universities', 'universities.id', '=', 'education.university_id')
        ->join('addresses', 'addresses.user_id', '=', 'users.id')
        ->join('regencies', 'addresses.regency_id', '=', 'regencies.id')
        ->selectRaw("users.name, users.email, user_details.phone_number, regencies.name as kota, universities.university_name")
        ->whereRaw("education.university_id=500 AND education.faculty_id=5")
        ->orderBy('kota')
        ->get();

        return view('Latihan5', compact('L5','no'));

    }
}
