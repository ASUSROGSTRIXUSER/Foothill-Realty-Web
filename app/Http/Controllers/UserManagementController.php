<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class UserManagementController extends Controller
{
    public function index()
    {


        if(Auth::check()){
            if(auth()->user()->UserManageMod == 1 && auth()->user()->isAdmin == 0){

                $Member=DB::select('select * from users where isAllowed = ? and isDisabled = ?',['0','0']);
                $Registered=DB::select('select * from users where isAllowed = ? and isDisabled = ?',['1','0']);
                $Admin=DB::select('select * from users where isAdmin = ? and isAllowed = ? and isDisabled = ?',['1','0','0']);
                $Deactivated=DB::select('select * from users where  isAllowed = ? and isDisabled = ?',['0','1']);
                 return view('/UserManagement',compact('Member','Registered','Admin','Deactivated'));
            }else if(auth()->user()->isAdmin == 1){
                $Member=DB::select('select * from users where isAllowed = ? and isDisabled = ?',['0','0']);
                $Registered=DB::select('select * from users where isAllowed = ? and isDisabled = ?',['1','0']);
                $Admin=DB::select('select * from users where isAdmin = ? and isAllowed = ? and isDisabled = ?',['1','0','0']);
                $Deactivated=DB::select('select * from users where  isAllowed = ? and isDisabled = ?',['0','1']);
                 return view('/UserManagement',compact('Member','Registered','Admin','Deactivated'));
              
            }else{
                return redirect('home');
            }
          
        }
        else{
            return redirect('login');
        }



     
    }
    public function ModuleRestrictionShow($id){

        if(Auth::check()){
            if(auth()->user()->UserManageMod == 1 && auth()->user()->isAdmin == 0){
                $user = User::find($id);
                return view ('/ModuleRestriction',compact('user')); 
            }else if(auth()->user()->isAdmin == 1){
                $user = User::find($id);
        return view ('/ModuleRestriction',compact('user')); 
              
            }else{
                return redirect('home');
            }       
        }
        else{
            return redirect('login');
        }

      
    }
    public function ModuleRestrictionSave($id, Request $request){

        if(Auth::check()){
              if(auth()->user()->UserManageMod == 1 && auth()->user()->isAdmin == 0){
                $user = User::find($id);
                $user->isAllowed=1;
                $user->RequestoAdminMod=1;
                $user->ProjectsMod= $request->ProjectMod;
                $user->MaterialMod=$request->MaterialMod;
                $user->UserManageMod=$request->UserManageMod;
                $user->ReportsMod=$request->ReportsMod;
                $user->HouseStatMOd=$request->HouseStatMod;
                $user->save();
                return redirect()->route('UserManagement');  
            }else if(auth()->user()->isAdmin == 1){
                $user = User::find($id);
                $user->isAllowed=1;
                $user->RequestoAdminMod=1;
                $user->ProjectsMod= $request->ProjectMod;
                $user->MaterialMod=$request->MaterialMod;
                $user->UserManageMod=$request->UserManageMod;
                $user->ReportsMod=$request->ReportsMod;
                $user->HouseStatMOd=$request->HouseStatMod;
                $user->save();
                return redirect()->route('UserManagement');  
              
            }else{
                return redirect('home');
            }       
         
        }
        else{
            return redirect('login');
        }

       
    }
  public function Deactivate($id){
    if(Auth::check()){
         if(auth()->user()->UserManageMod == 1 && auth()->user()->isAdmin == 0){
            $user = User::find($id);
            $user->isAllowed=0;
            $user->isDisabled=1;
            $user->save();
            return redirect()->route('UserManagement');  
            }else if(auth()->user()->isAdmin == 1){
                $user = User::find($id);
                $user->isAllowed=0;
                $user->isDisabled=1;
                $user->save();
                return redirect()->route('UserManagement'); 
              
            }else{
                return redirect('home');
            }       
     
    }
    else{
        return redirect('login');
    }  
  }
  public function Reactivate($id){
  
    if(Auth::check()){
        if(auth()->user()->UserManageMod == 1 && auth()->user()->isAdmin == 0){
            $user = User::find($id);
      $user->isAllowed=1;
      $user->isDisabled=0;
      $user->save();
      return redirect()->route('UserManagement'); 
        }else if(auth()->user()->isAdmin == 1){
            $user = User::find($id);
      $user->isAllowed=1;
      $user->isDisabled=0;
      $user->save();
      return redirect()->route('UserManagement'); 
          
        }else{
            return redirect('home');
        }         
    }
    else{
        return redirect('login');
    }

  
  }

  public function AdminAccept($id, Request $request){
  
    if(Auth::check()){
        if(auth()->user()->UserManageMod == 1 && auth()->user()->isAdmin == 0){
            $user = User::find($id);
     $user->isAllowed=1;  
     $user->save();
     return redirect()->route('UserManagement');  
        }else if(auth()->user()->isAdmin == 1){
            $user = User::find($id);
            $user->isAllowed=1;  
            $user->save();
            return redirect()->route('UserManagement');  
          
        }else{
            return redirect('home');
        }       

   
    }
    else{
        return redirect('login');
    }

   
}
}
