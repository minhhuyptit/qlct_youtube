<?php

use App\Member;
use App\Team;
use App\TeamMember;
use App\Candidate;
use App\CandidateSkill;
use App\CandidateContact;
use App\Interview;
use App\Interviewer;
use App\InterviewerComment;
use App\Configuration;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function () {
    $elm = Configuration::find(25);
    return $elm->candidate_use_skills;
});
