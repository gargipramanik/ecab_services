<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class FinalController extends Controller
{
    public function home():View
    {
        return view('home');   //home.blade.php
    }
    public function navbar():View
    {
        return view('navbar');  //navbar.blade.php
    }
    public function footer():View
    {
        return view('footer');  //footer.blade.php
    }
    public function stickey():View
    {
        return view('stickey');  //stickey.blade.php
    }
    public function about1():View
    {
        return view('about1');  //about1.blade.php
    }
    public function about2():View
    {
        return view('about2');  //about2.blade.php
    }
    public function about3():View
    {
        return view('about3');  //about3.blade.php
    }
    public function about4():View
    {
        return view('about4');  //about4.blade.php
    }
    public function about5():View
    {
        return view('about5');  //about5.blade.php
    }
    public function about6():View
    {
        return view('about6');  //about6.blade.php
    }
    public function gallery():View
    {
        return view('gallery');  //gallery.blade.php
    }
    public function contact():View
    {
        return view('contact');  //contact.blade.php
    }
    public function supportsubmitnu(Request $request){
        // $id=$request->input('id');
        $name=$request->input('name');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $query=$request->input('query');

        $data=[
            'user_id'=>'0',
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'query'=>$query,
            'reply'=>'null',
            'given'=>'null'
        ];
        DB::table('query')->insert($data);
        return redirect()->back()->with('message','Support query Posted');
    }
    public function login():View
    {
        return view('login');  //login.blade.php
    }
    public function register():View
    {
        return view('register');  //register.blade.php
    }
    public function submit_data(Request $request){

        $request->validate(
         [
             'fname'     =>"required",
             'lname'     =>"required",
             'email'     =>"required|regex:/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/|unique:user,email",
             'phone'     =>"required|regex:/^[0-9]{10}$/|unique:user,phone",
             'gender'    =>"required",
             'password'  =>"required|between:4,16",
             'image'     =>"required"
        ]
     );
        $fname=$request->input('fname');
        $lname=$request->input('lname');
         $email=$request->input('email');
         $phone=$request->input('phone');
         $gender=$request->input('gender');
         $password=md5($request->input('password'));
         $current_date=date('Y-m-d');
         $user='CLIENT';
         $auth=0;

         $db=DB::table('user')->get();
 
         if($request->file('image'))
         $file=$request->file('image');
         $fileName= time()."_".$file->getClientOriginalName();
         $uploadLocation="./uploads";
         $file->move($uploadLocation,$fileName);

            $data=[
                'fname'=>$fname,
                'lname'=>$lname,
                'email'=>$email,
                'phone'=>$phone,
                'gender'=>$gender,
                'password'=>$password,
                'joining_date'=>$current_date,
                'image'=>$uploadLocation."/".$fileName,
                'user'=>$user,
                'auth'=>$auth
            ];
            DB::table('user')->insert($data);
            return redirect('login');


     }
     
     public function login_data(Request $request)
        {
            $username= $request->input('username');
            $password= md5($request->input('password'));
            $data= DB::table('user')->where("email","=",$username)->orWhere("phone","=",$username)->get();
            if(empty($data[0]))
            {
                return redirect('login')->with('message','user not found');
            }
            else
            {
                $password_db= $data[0]->password;
                if( $password_db== $password)
                {
                    if($data[0]->auth==1){
                    return redirect('login')->with('message','You are Blocked by Admin');

                    }
                    else{
                        if($data[0]->user=='ADMIN'){
                            $uid=$data[0]->id;
                            $request->session()->put('id',$uid);
                            return redirect('/admin_profile');
                        }
                        else{
                            $uid=$data[0]->id;
                            $request->session()->put('id',$uid);
                            return redirect('/user_profile');
                        }
                    }
                }
                else{
                    return redirect('login')->with('message','Password not Matched');

                }
            }
            
        }

        public function connect(){
            return view('connect');
        }
        //---------------------------Admin Data---------------------------------------------------------------------------------------------------
        public function admin_profile(){
            $uid=session()->get('id');
            if(empty($uid)){
                return redirect('/login')->with('message','You are not able to see this page');
            }
            else{
                $user=DB::table('user')->where('id','=',$uid)->get();
                return view('admin_profile')->with(['adminInfo'=>$user]);
            }
        }
         public function adminHeader():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('adminHeader')->with(['adminInfo'=>$user]);
         }
         public function sidebar():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('sidebar')->with(['adminInfo'=>$user]);
         }

         public function user_data():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $users=DB::table('user')->where('user','=','CLIENT')->get();
            return view('user_data')->with(['adminInfo'=>$user])->with(['userData'=>$users]);
         }
         public function cab_data():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $users=DB::table('driver')->where('user','=','DRIVER')->get();
            return view('cab_data')->with(['adminInfo'=>$user])->with(['userData'=>$users]);
         }
         public function driver_data():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $users=DB::table('driver')->where('user','=','DRIVER')->get();
            return view('driver_data')->with(['adminInfo'=>$user])->with(['userData'=>$users]);
         }
         public function licence($id):View{
            $epID=$id;
            $user_data=DB::table('driver')->where('id','=',$epID)->get();
            return view('licence')->with(['userData'=>$user_data[0]]);
         }
         public function admin_data():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $users=DB::table('user')->where('user','=','ADMIN')->get();
            return view('admin_data')->with(['adminInfo'=>$user])->with(['adminData'=>$users]);
         }
         public function add_admin(Request $request){
            $fname=$request->input('fname');
            $lname=$request->input('lname');
            $email=$request->input('email');
            $phone=$request->input('phone');
            $gender=$request->input('gender');
            $password=md5($request->input('password'));
            $current_date=date('Y-m-d');
            $image='images/logo.png';
            $user='ADMIN';
            $auth=0;
            $data=[
                'fname'=>$fname,
                'lname'=>$lname,
                'email'=>$email,
                'phone'=>$phone,
                'gender'=>$gender,
                'password'=>$password,
                'joining_date'=>$current_date,
                'image'=>$image,
                'user'=>$user,
                'auth'=>$auth
            ];
            DB::table('user')->insert($data);
            return redirect('/admin_data');

         }
         public function editadmin($ep):View{
            $epID=$ep;
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $user_data=DB::table('user')->where('id','=',$epID)->get();
            return view('editadmin')->with(['adminInfo'=>$user])->with(['passInfo'=>$user_data[0]]);
         }
         public function delete_data($del) {
            $delID=$del;
            DB::table('query')->where('id','=',$delID)->delete();
            return redirect('/support_data');

        }
        
        public function total_drive(){
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $users=DB::table('drive')->orderBy('date','DESC')->get();
            return view('drive_data')->with(['adminInfo'=>$user])->with(['driveData'=>$users]);
        }
        public function details($id):View{
            $ids=$id;
            $drive=DB::table('drive')->where('id','=',$ids)->get();
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('details')->with(['adminInfo'=>$user])->with(['driveInfo'=>$drive]);
        }
        public function reply($id):View{
            $ids=$id;
            $query=DB::table('query')->where('id','=',$ids)->get();
            $querys=DB::table('query')->get();
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('reply')->with(['adminInfo'=>$user])->with(['queryInfo'=>$query])->with(['queries'=>$querys]);
        }
        public function reply_send(Request $request){
            $uid=$request->input('id');
            $reply=$request->input('reply');
            $update_data=[
                'reply'=>$reply,
                'given'=>'Admin'
            ];
            DB::table('query')->where('id','=',$uid)->update($update_data);
            return redirect()->back();
        }
         public function support_data():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $support=DB::table('query')->get();
            return view('support_data')->with(['adminInfo'=>$user])->with(['support'=>$support]);
         }

         public function de_data($dele) {
            $delID=$dele;
            DB::table('user')->where('id','=',$delID)->delete();
            return redirect('/admin_data');

        }
        public function apply():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $users=DB::table('driver')->where('user','=','PENDING')->get();
            return view('apply')->with(['adminInfo'=>$user])->with(['userData'=>$users]);
        }
        public function apply_driver($id){
            $ids=$id;
            $driver=['user'=>'DRIVER'];
            DB::table('driver')->where('id','=',$ids)->update($driver);
            return redirect()->back();
        }
        public function d_driver($id){
            $ids=$id;
            $driver=['user'=>'DECLINE'];
            DB::table('driver')->where('id','=',$ids)->update($driver);
            return redirect()->back();
        }
        public function block($blk){
        $userid=$blk;
        DB::table('driver')->where('id','=',$userid)->update(['auth'=>1]);
        return redirect('/driver_data')->with('message','Driver has been blocked');
    }
    public function unblock($ublk){
        $userid=$ublk;
        DB::table('driver')->where('id','=',$userid)->update(['auth'=>0]);
        return redirect('/driver_data')->with('message','Driver has been unblocked');
    }
    public function b_user($blk){
        $userid=$blk;
        DB::table('user')->where('id','=',$userid)->update(['auth'=>1]);
        return redirect('/user_data')->with('message','User has been blocked');
    }
    public function u_user($ublk){
        $userid=$ublk;
        DB::table('user')->where('id','=',$userid)->update(['auth'=>0]);
        return redirect('/user_data')->with('message','User has been unblocked');
    }
    public function declined_driver():View{
        $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $users=DB::table('driver')->where('user','=','DECLINE')->get();
            return view('declined_driver')->with(['adminInfo'=>$user])->with(['userData'=>$users]);
    }
    public function del_driver($delid){
        $delID=$delid;
        DB::table('driver')->where('id','=',$delID)->delete();
        return redirect()->back();
    }
        // --------------------------------User Data----------------------------------------------------------------------------------------------------

        public function user_profile(){
            $uid=session()->get('id');
            if(empty($uid)){
                return redirect('/login')->with('message','You are not able to see this page. Please Login first');
            }
            else{
                $user=DB::table('user')->where('id','=',$uid)->get();
                $drive=DB::table('drive')->where('user_id','=',$uid)->orderBy('time', 'DESC')->get();
                return view('user_profile')->with(['userInfo'=>$user])->with(['driveInfo'=>$drive]);
            }
            
        }
        public function navbar_profile():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('navbar_profile')->with(['userInfo'=>$user]);
        }
        public function sidebar_profile():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('sidebar_profile')->with(['userInfo'=>$user]);
        }

        public function messages():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $query=DB::table('query')->where('user_id','=',$uid)->get();
            return view('message')->with(['userInfo'=>$user])->with(['queryInfo'=>$query]);
        }
        
        public function bookacab():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('bookacab')->with(['userInfo'=>$user]);
        }
        
        public function bookcab(Request $request){
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $id=$user[0]->id;
            $fname=$user[0]->fname;
            $lname=$user[0]->lname;
            $phone=$user[0]->phone;
            $email=$user[0]->email;
            $pick=$request->input('pick');
            $drop=$request->input('drop');
            $current_date=date('Y-m-d');
            $current_time=Carbon::now();
            $action='Pending';
                $data=[
                    'user_id'=>$id,
                    'fname'=>$fname,
                    'lname'=>$lname,  
                    'phone'=>$phone,
                    'email'=>$email,
                    'pick'=>$pick,
                    'drop_loc'=>$drop,
                    'date'=>$current_date,
                    'time'=>$current_time,
                    'action'=>$action,
                    'driver_id'=>'0',
                    'driver_fname'=>'null',
                    'driver_lname'=>'null',
                    'driver_email'=>'null',
                    'driver_phone'=>'0',
                    'driver_gender'=>'null',
                    'car_number'=>'null',
                    'capacity'=>'0',
                    'payment'=>'PENDING'
                ];
                DB::table('drive')->insert($data);
                return redirect('bookacab')->with('message','Drive Pending');
        }
        public function edit_user($ep):View{
            $epID=$ep;
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $user_data=DB::table('user')->where('id','=',$epID)->get();
            return view('edituserprofile')->with(['userInfo'=>$user])->with(['editInfo'=>$user_data[0]]);
        }
        public function update_data(Request $request){
            $userID=$request->input('uid');
            $fname=$request->input('efname');
            $lname=$request->input('elname');
            $email=$request->input('eemail');
            $phone=$request->input('ephone');
            $gender=$request->input('egender');

            if($request->file('image')){
                $file=$request->file('image');
                $fileName= time()."_".$file->getClientOriginalName();
                $uploadLocation="./uploads";
                $file->move($uploadLocation,$fileName);

                $update_data=[
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email,
                    'phone'=>$phone,
                    'gender'=>$gender,
                    'image'=>$uploadLocation."/".$fileName
                ];

                DB::table('user')->where('id','=',$userID)->update($update_data);
            }
            else{
                $update_datas=[
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email,
                    'phone'=>$phone,
                    'gender'=>$gender
                ];
                    DB::table('user')->where('id','=',$userID)->update($update_datas);
            }
            return redirect('user_profile');
        }
        public function changepassword($cp):View{
            $cpID=$cp;
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            $user_data=DB::table('user')->where('id','=',$cpID)->get();
            return view('changepassword')->with(['userInfo'=>$user])->with(['passInfo'=>$user_data[0]]);
        }
        public function update_password(Request $request){
            $uid=$request->input('uid');
            $opass=md5($request->input('opass'));
            $npass=md5($request->input('npass'));
            $cpass=md5($request->input('cpass'));

            $user=DB::table('user')->where('id','=',$uid)->get();
            $dbpass=$user[0]->password;

            //dd($user[0]);

            if($npass==$cpass){
                if($opass==$npass){
                    return redirect()->back()->with('message','Old password and New password cannot be same');
                }
                else{
                    if($opass==$dbpass){
                        $update_pass=[
                            'password'=>$npass
                        ];
                        DB::table('user')->where('id','=',$uid)->update($update_pass);
                        return redirect()->back()->with('message','Password Updated!')->with($uid);
                    }
                    else{
                        return redirect()->back()->with('message','Old password does not match!')->with($uid);
                    }
                }
            }
            else{
                return redirect()->back()->with('message','New password and confirm password must be same')->with($uid);
            }
        }

        public function support():View{
            $uid=session()->get('id');
            $user=DB::table('user')->where('id','=',$uid)->get();
            return view('support')->with(['userInfo'=>$user]);
        }
        public function supportsubmit(Request $request){
            $id=$request->input('id');
            $name=$request->input('name');
            $phone=$request->input('phone');
            $email=$request->input('email');
            $query=$request->input('query');

            $data=[
                'user_id'=>$id,
                'name'=>$name,
                'email'=>$email,
                'phone'=>$phone,
                'query'=>$query,
                'reply'=>'null',
                'given'=>'null'
            ];
            DB::table('query')->insert($data);
            return redirect()->back()->with('message','Support query Posted');
        }


    //-----------------------------------------------Driver Data-------------------------------------------------------------------------------
     public function driverregister():View {
        return view('driverRegister');
     }
     public function register_driverdata(Request $request){

        $request->validate(
            [
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required|regex:/^[a-z0-9.%+_-]+@[a-z0-9.-]+\.[a-z]{2,3}$/|unique:driver,email',
                'phone'=>'required|regex:/^[0-9]{10}$/|unique:driver,phone',
                'gender'=>'required',
                'password'=>'required|between:4,16',
                'image'=>'required',
                'licence'=>'required',
                'carNumber'=>'required',
                'model'=>'required',
                'capacity'=>'required'
            ]
        );

        $fname=$request->input('fname');
        $lname=$request->input('lname');
        $email=$request->input('email');
        $phone=$request->input('phone');
        $gender=$request->input('gender');
        $password=md5($request->input('password'));
        $carnumber=$request->input('carNumber');
        $model=$request->input('model');
        $capacity=$request->input('capacity');
        $user='PENDING';
        $auth=0;

        if($request->file('image'))
         $file=$request->file('image');
         $fileName= time()."_".$file->getClientOriginalName();
         $uploadLocation="./profile_driver";
         $file->move($uploadLocation,$fileName);

         if($request->file('licence'))
         $files=$request->file('licence');
         $fileNames= time()."_".$files->getClientOriginalName();
         $uploadLocations="./licence_driver";
         $files->move($uploadLocations,$fileNames);

         $data=[
            'fname'=>$fname,
            'lname'=>$lname,
            'email'=>$email,
            'phone'=>$phone,
            'gender'=>$gender,
            'password'=>$password,
            'profile'=>$uploadLocation.'/'.$fileName,
            'licence'=>$uploadLocations.'/'.$fileNames,
            'car_number'=>$carnumber,
            'car_model'=>$model,
            'capacity'=>$capacity,
            'user'=>$user,
            'auth'=>$auth
         ];
         DB::table('driver')->insert($data);
         return redirect('logindriver');
        
     }
     public function driverLogin():View{
        return view('driverLogin');
     }
     public function login_driver(Request $request){
            $username= $request->input('username');
            $password= md5($request->input('password'));
            $data= DB::table('driver')->where("email","=",$username)->orWhere("phone","=",$username)->get();
            if(empty($data[0]))
            {
                return redirect('/logindriver')->with('message','User not found');
            }
            else
            {
                $password_db= $data[0]->password;
                if( $password_db== $password)
                if($data[0]->auth==1){
                    return redirect('login')->with('message','You are Blocked by Admin');

                    }
                    else{
                        if($data[0]->user=='DRIVER'){
                            $uid=$data[0]->id;
                            $request->session()->put('id',$uid);
                            return redirect('/driver_profile');
                        }
                        else{
                            return redirect('/logindriver')->with('message','Please wait sometime. Admin will verify your details.');
                        }
                    }
                else{
                    return redirect('/logindriver')->with('message','Password not Matched');

                }
            }
     }

     public function driverHeader():View{
        $uid=session()->get('id');
            $user=DB::table('driver')->where('id','=',$uid)->get();
            return view('driverHeader')->with(['userInfo'=>$user]);
     }
     public function sidebar_driver():View{
        $uid=session()->get('id');
            $user=DB::table('driver')->where('id','=',$uid)->get();
            return view('sidebar_driver')->with(['userInfo'=>$user]);
     }
     public function driver_profile(){
        $uid=session()->get('id');
        if(empty($uid)){
            return redirect('/logindriver')->with('message','You are not able to see this page. Please Login first');
        }
        else{
            $date=date('Y-m-d');
            $user=DB::table('driver')->where('id','=',$uid)->get();
            $db=DB::table('drive')->where('date','=',$date)->orderBy('time','DESC')->get();
            return view('driver_profile')->with(['userInfo'=>$user])->with(['drivebook'=>$db]);
        }
     }
     public function search(Request $request):View{
        $uid=session()->get('id');
        $date=date('Y-m-d');
        $user=DB::table('driver')->where('id','=',$uid)->get();
        $search=$request->input('search');
        $users=DB::table('drive')->where('pick','LIKE','%'.$search.'%')->where('date','=',$date)->get();
        //$db=DB::table('drive')->where('date','=',$date)->orderBy('time','DESC')->get();
        //dd($users);
        return view('/driver_profile')->with(['userInfo'=>$user])->with(['drivebook'=>$users]);        
     }
     
     public function payment_confirm($id){
        $ids=$id;
        $book=['payment'=>'Paid'];
        DB::table('drive')->where('id','=',$ids)->update($book);
        return redirect()->back();
     }
     public function confirm($id){
        $ids=$id;
        $database=DB::table('drive')->where('id','=',$ids)->get();
        if($database[0]->action=='Confirmed'){
            return redirect()->back()->with('message', 'Already Booked');
        }
        else{
            $book=['action'=>'Confirmed'];
            DB::table('drive')->where('id','=',$ids)->update($book);  
            $uid=session()->get('id');
            $user=DB::table('driver')->where('id','=',$uid)->get();
            $details=[
                'driver_id'=>$user[0]->id,
                'driver_fname'=>$user[0]->fname,
                'driver_lname'=>$user[0]->lname,
                'driver_email'=>$user[0]->email,
                'driver_phone'=>$user[0]->phone,
                'driver_gender'=>$user[0]->gender,
                'car_number'=>$user[0]->car_number,
                'capacity'=>$user[0]->capacity
            ];
            DB::table('drive')->where('id','=',$ids)->update($details);  
            return redirect('driver_profile')->with(['userInfo'=>$user]);

        }
         
     }
    public function driver_details():View{
        $uid=session()->get('id');
            $user=DB::table('driver')->where('id','=',$uid)->get();
            return view('driver_details')->with(['userInfo'=>$user]);
     }
     public function bookingdetails_driver():View{
        $uid=session()->get('id');
        $user=DB::table('driver')->where('id','=',$uid)->get();
        $drive=DB::table('drive')->where('driver_id','=',$uid)->orderBy('time', 'DESC')->get();
        return view('bookingdetails_driver')->with(['userInfo'=>$user])->with(['driveInfo'=>$drive]);
     }
     public function editdriver($id):View{
            $userId=$id;
            $uid=session()->get('id');
            $user=DB::table('driver')->where('id','=',$uid)->get();
            $users=DB::table('driver')->where('id','=',$userId)->get();
            return view('editdriver')->with(['userInfo'=>$user])->with(['editInfo'=>$users]);
     }
     public function support_driver():View{
        $uid=session()->get('id');
        $driver=DB::table('driver')->where('id','=',$uid)->get();
        return view('support_driver')->with(['userInfo'=>$driver]);
    }

    public function update_driver(Request $request){
        $userID=$request->input('uid');
            $fname=$request->input('fname');
            $lname=$request->input('lname');
            $email=$request->input('email');
            $phone=$request->input('phone');
            $gender=$request->input('gender');
            $carnumber=$request->input('carnumber');
            $model=$request->input('model');
            $capacity=$request->input('capacity');


            if($request->file('image')){
                if($request->file('licence')){
                    $file=$request->file('image');
                    $fileName= time()."_".$file->getClientOriginalName();
                    $uploadLocation="./profile_driver";
                    $file->move($uploadLocation,$fileName);

                    $file1=$request->file('licence');
                    $fileName1= time()."_".$file1->getClientOriginalName();
                    $uploadLocation1="./licence_driver";
                    $file1->move($uploadLocation1,$fileName1);

                    $update_data=[
                        'fname'=>$fname,
                        'lname'=>$lname,
                        'email'=>$email,
                        'phone'=>$phone,
                        'gender'=>$gender,
                        'profile'=>$uploadLocation."/".$fileName,
                        'licence'=>$uploadLocation1."/".$fileName1,
                        'car_number'=>$carnumber,
                        'car_model'=>$model,
                        'capacity'=>$capacity
                    ];

                    DB::table('driver')->where('id','=',$userID)->update($update_data);
                }
            }
            elseif ($request->file('licence')){
                $file1=$request->file('licence');
                $fileName1= time()."_".$file1->getClientOriginalName();
                $uploadLocation1="./licence_driver";
                $file1->move($uploadLocation1,$fileName1);
                
                $update_data=[
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email,
                    'phone'=>$phone,
                    'gender'=>$gender,
                    'licence'=>$uploadLocation1."/".$fileName1,
                    'car_number'=>$carnumber,
                    'car_model'=>$model,
                    'capacity'=>$capacity
                ];

                DB::table('driver')->where('id','=',$userID)->update($update_data);
                
            }
            else{
                $update_datas=[
                    'fname'=>$fname,
                    'lname'=>$lname,
                    'email'=>$email,
                    'phone'=>$phone,
                    'gender'=>$gender,
                    'car_number'=>$carnumber,
                    'car_model'=>$model,
                    'capacity'=>$capacity
                ];
                    DB::table('driver')->where('id','=',$userID)->update($update_datas);
            }
            return redirect('driver_details');
    }

    public function change_driver($cp):View{
        $cpID=$cp;
        $uid=session()->get('id');
        $user=DB::table('driver')->where('id','=',$uid)->get();
        $user_data=DB::table('driver')->where('id','=',$cpID)->get();
        return view('changepassword_driver')->with(['userInfo'=>$user])->with(['passInfo'=>$user_data[0]]);
    }
    public function update_driverpassword(Request $request){
        $uid=$request->input('uid');
        $opass=md5($request->input('opass'));
        $npass=md5($request->input('npass'));
        $cpass=md5($request->input('cpass'));

        $user=DB::table('driver')->where('id','=',$uid)->get();
        $dbpass=$user[0]->password;

        //dd($user[0]);

        if($npass==$cpass){
            if($opass==$npass){
                return redirect()->back()->with('message','Old password and New password cannot be same');
            }
            else{
                if($opass==$dbpass){
                    $update_pass=[
                        'password'=>$npass
                    ];
                    DB::table('user')->where('id','=',$uid)->update($update_pass);
                    return redirect()->back()->with('message','Password Updated!')->with($uid);
                }
                else{
                    return redirect()->back()->with('message','Old password does not match!')->with($uid);
                }
            }
        }
        else{
            return redirect()->back()->with('message','New password and confirm password must be same')->with($uid);
        }
    }


     public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login')->with('message','Logout Successful');
    }


    public function logout_driver(Request $request)
    {
        $request->session()->flush();
        return redirect('/logindriver')->with('message','Logout Successful');
    }
    public function messages_driver():View{
        $uid=session()->get('id');
        $user=DB::table('driver')->where('id','=',$uid)->get();
        $query=DB::table('query')->where('user_id','=',$uid)->get();
        return view('message_driver')->with(['userInfo'=>$user])->with(['queryInfo'=>$query]);
    }
}

