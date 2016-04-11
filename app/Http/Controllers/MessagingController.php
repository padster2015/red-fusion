<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use DateTime;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MessagingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "hello";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request_Message)
    {
        $now = new DateTime();
            $mesagein = $request_Message->input('message');
                $PlatformIn = $request_Message->input('NetworkIn');
                    $HashtagsIn = $request_Message->input('Hashtag');
                        $AccRequest = $request_Message->input('userID');

                $Insertmessage = DB::table('MessageQ')->insert(
                    ['message' => $mesagein,
                        'Acc_id' => $AccRequest,
                              'platform' => $PlatformIn,
                                    'Hashtag' => $HashtagsIn,
                                        'Createdat' => $now]
    );

       
echo json_encode($Insertmessage,JSON_NUMERIC_CHECK);

    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//HashTag
    public function Hashtags( Request $showbyid)
    {
       $userRequest = Input::get('user');

        $showmessage = DB::table('MessageQ')->select('HashTag')->where(
            'Acc_id', '=', $userRequest)
                    ->count('HashTag')
                            ->groupBy('Hashtag')
                ->orderBy('Createdat', 'desc')->get();
echo json_encode($showmessage,JSON_NUMERIC_CHECK);
    }
//

    public function show( Request $showbyid)
    {
       $userIDS = Input::get('user');
       $limits = Input::get('show');


        $showmessage = DB::table('MessageQ')->where('Acc_id', '=', $userIDS)->orderBy('Createdat', 'desc')->get();
echo json_encode($showmessage,JSON_NUMERIC_CHECK);
    }

    //



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
