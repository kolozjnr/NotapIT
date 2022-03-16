<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FaultCatr;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Models\RequestLog;

class UnivController extends Controller
{
    //Universal Functions
   /* public function dashboard(){
        if(Auth::user()->hasRole('user')){
            
            return view('manage.index');
        }
        elseif(Auth::user()->hasRole('IT')){
            return view('manage.index');
        }
        elseif(Auth::user()->hasRole('administrator')){
            return view('manage.index');
        }
    }**/
    
    public function fault(){
        $faults = DB::table('fault_catrs')->get();
        return view('dashboard',['faults' => $faults]);
    }

    public function index(){
        return view('app.index');
    }

    public function printer(){
        return view('app.printer');
    }

    public function pc(){
        return view('app.pc');
    }

    public function addProb(){
        return view('main.add-problem');
    }


    //Request Help Logic
    public function requestHelp(Request $req){
        $users = DB::table('users')
        ->where([
            ["status", "=", "INActive"],
            ["dept", "=", "IT"],
        ])->get();
        if($users->isEmpty()){
            $admin = DB::table('users')
            ->where([
                ["status", "=", "admin"],
            ])->get();
            foreach($admin as $adm){
                //dd($adm->name);
                $client = new \GuzzleHttp\Client();
                $dept = Auth::user()->dept;
                $email = $adm->email;
                $name = $adm->name;
                $IT_attndnt_tel = $adm->tel;
                $response = $client->post(
                    'http://bulksmsnigeria.com/api/v1/sms/create',
                    [
                        'headers' => [
                            'Accept' => 'application/json',
                        ],
                        'query' => [
                            'api_token'=> '2BVWH5wjn3c9ABqSIvRB7gCQen2GjHrhvIXpySn2K6XxbN2NpMdk2f8Y9XVa',
                            'to'=> $IT_attndnt_tel,
                            'from'=> 'NOTAP IT',
                            'body'=> 'Please' ." " . $name . " ". 'kindly check'. " " .$dept. " " .'for a Troubleshoot',
                            'gateway'=> '0',
                            'append_sender'=> '0',
                        ],
                    ]
                );
                $body = $response->getBody();
                print_r(json_decode((string) $body));
    
                $id = $adm->id;
                $update = User::find($id);
    
                $updatepost = new RequestLog;
                DB::table('request_logs')->where([
                    ['dept', '=', $req->dept]
                ])->Orderby('id', 'DESC')->limit(1)
                ->update(
                    ['IT_attdnt_tel' => $IT_attndnt_tel],
                );
    
            return redirect('/dashboard')->with('success','IT Unit have successfully Recieved your request someone will attend to you in a moment. Thanks');
            }
            
        
        }
        else{
            $reqHelp = new RequestLog;

            $dept = Auth::user()->dept;
            $fault = $req->fault;

            $reqHelp->save();
        }
        foreach($users as $user){
            //SEND SMS NOTIFICATION TO IT Department
            /*dd($users);

            $client = new \GuzzleHttp\Client();
            $email = $user->email;
            $name = $user->name;
            $IT_attndnt_tel = $user->tel;
            $response = $client->post(
                'http://bulksmsnigeria.com/api/v1/sms/create',
                [
                    'headers' => [
                        'Accept' => 'application/json',
                    ],
                    'query' => [
                        'api_token'=> '2BVWH5wjn3c9ABqSIvRB7gCQen2GjHrhvIXpySn2K6XxbN2NpMdk2f8Y9XVa',
                        'to'=> $IT_attndnt_tel,
                        'from'=> 'NOTAP IT',
                        'body'=> 'Please' ." " . $name . 'kindly check'." " .$dept. 'for a Troubleshoot',
                        'gateway'=> '0',
                        'append_sender'=> '0',
                    ],
                ]
            );
            $body = $response->getBody();
            print_r(json_decode((string) $body));*/
            $id = $user->id;
            $update = User::find($id)->update(['status' => 'Active']);
            dd($users);
            $updatepost = new PostRequest;
            DB::table('request_logs')->where([
                ['dept', '=', $req->dept]
            ])->Orderby('id', 'DESC')->limit(1)
            ->update(
                ['IT_attdnt_tel' => $IT_attndnt_tel],
            );

        return redirect('/dashboard')->with('success','IT Unit have successfully Recieved your request someone will attend to you in a moment. Thanks');
        

        }
    }

}
