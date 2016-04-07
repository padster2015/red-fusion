<?php

namespace App\Http\Controllers;
use DB;
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
            $HashtagsIn = $request_Message->input('HashtagIn');

$Insertmessage = DB::table('MessageQ')->insert(
         ['message' => $mesagein,
         'platform' => $PlatformIn,
         'Hashtag' => $HashtagsIn,
             'Createdat' => $now]);

       
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
    public function show()
    {
        $showmesaage = DB::table('messageQ')->get();

echo json_encode($showmessage,JSON_NUMERIC_CHECK);


    }

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
