<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\ProjectModel;
use App\User;
class ProjectController extends Controller
{
    public function index()
    {
        if(Auth::check()){
          
            if(auth()->user()->ProjectsMod == 1 && auth()->user()->isAdmin == 0){
                $projects = DB::table('project_models')->get();
                return view('/Projects',compact('projects'));

            }else if(auth()->user()->isAdmin == 1){
                $projects = DB::table('project_models')->get();
                 return view('/Projects',compact('projects'));             
            }else{
                return redirect('home');
            }   
        }
        else{
            return redirect('login');
        }
   
    }
    public function CreateProject(Request $request)
    {
        if(Auth::check()){
            $project = new ProjectModel;
            if(auth()->user()->ProjectsMod == 1 && auth()->user()->isAdmin == 0){
              
               $project->ProjectName = $request->ProjectName;
               $project->save();
                return redirect()->route('ProjectMenu');
            }else if(auth()->user()->isAdmin == 1){
               
                $project->ProjectName = $request->ProjectName;
                $project->save();
                return redirect()->route('ProjectMenu');
                      
            }else{
                return redirect('home');
            }   
        }else{
            return redirect('login');
        }
   
    }
}
