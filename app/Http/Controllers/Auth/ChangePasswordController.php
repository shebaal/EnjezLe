<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class ChangePasswordController extends Controller
{

/**----------------------
 *  load updatePassword page
 *------------------------**/
public function load()
{
   return view('auth.passwords.changePassword');
}

   /**----------------------
 *    updatePassword
 *------------------------**/
public function updatePassword(Request $request)
{
        # Validation
        $request->validate([
            'old_password' => 'required',
            // 'new_password' => 'required|confirmed',
            'new_password' => array(
                'required',
                'min:9', 
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/u', 
                'confirmed')
        ],[
            'old_password.required'=>' يجب ادخال كلمة السر القديمة *', 
            'new_password.required'=>'يجب ادخال كلمة السر الجديدة *', 
            'new_password.min'=>'يجب أن لا تقل كلمة السر عن 9 أحرف *', 
            'new_password.regex'=>'يجب أن تحتوي كلمة السر على حروف ورموز وأرقام *', 
            'new_password.confirmed'=>'كلمة السر لا تتطابق ', 
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "كلمة السر القديمة خاطئة");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "تم تغيير كلمة السر بنجاح");
    }


    

}
