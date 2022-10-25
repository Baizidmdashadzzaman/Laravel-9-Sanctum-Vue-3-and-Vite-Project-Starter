<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sms_useage = 0;
        $allData=Setting::first();
        if($allData == null)
        {
            $allData= new Setting();
            $allData->save();
        }
        else
        {
        
        }
        return response()->json([
            'allData' => $allData,
            'sms_useage' => $sms_useage
        ]); 
    }

    public function getsmsbalace()
    {
        $sms_useage = 0;
        $allData=Setting::first();
        if($allData == null)
        {
            $allData= new Setting();
            $allData->save();
        }
        else
        {
            if($allData->sms_api_key != null)
            {
                $objApiResponse = new APIResponse();
                $balanceCheckField = array(
                    'token' 		=> $allData->sms_api_key,
                    'balance' 		=> ""
                );
        
                $greenWebUrl = "http://api.greenweb.com.bd/g_api.php";
                $balanceInfo =  $objApiResponse->cURL_Request_http($balanceCheckField,$greenWebUrl);
        
                //$sms_useage = (int) $balanceInfo/0.20;
                $sms_useage =(int) $balanceInfo;
        
            }
            else
            {
                $sms_useage = 0;
            }
        }
        return response()->json([
            'allData' => $allData,
            'sms_useage' => $sms_useage
        ]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Setting::first();
        $data->site_name = $request->site_name;
        $data->site_phone = $request->site_phone;
        $data->site_email = $request->site_email;
        if($request->hasFile('site_logo'))
        {
            $data->site_logo = time(). $_FILES["site_logo"]["name"];
        }
        if($request->hasFile('site_favicon'))
        {
            $data->site_favicon = time(). $_FILES["site_favicon"]["name"];
        }
        $data->site_description = $request->site_description;
        $data->site_sms_api = $request->site_sms_api;

        $save = $data->update();
        if($request->hasFile('site_logo'))
        {
            $source= $_FILES['site_logo']['tmp_name'];
            @mkdir("settingimages");
            $destination="settingimages/".$data->site_logo;
            $saveimage = move_uploaded_file($source,$destination);  
        }
        if($request->hasFile('site_favicon'))
        {
            $source= $_FILES['site_favicon']['tmp_name'];
            @mkdir("settingimages");
            $destination="settingimages/".$data->site_favicon;
            $saveimage = move_uploaded_file($source,$destination);  
        }
        if($save)
        {   
            $allData =$data;
            $message="Setting updated successfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status,
                'allData' => $allData
            ]);  
        }
        else
        {
            $message="Unable to update setting,please try again.";
            $status = 0;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
