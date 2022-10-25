<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Category::latest()->paginate(30);
		return response()->json([
		   'allData' => $allData
		]); 
    }

    public function index_all()
    {
        $allData = Category::latest()->get();
		return response()->json([
		   'allData' => $allData
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
        $data = new Category();
        $data->category_name = $request->category_name;
        $data->category_slug = Str::slug($request->category_name, '-');
        $data->category_code = random_int(10000000000, 99999999999);
        if($request->category_image != null)
        {
            $data->category_image = time(). $_FILES["category_image"]["name"];
        }
        $data->category_status = $request->category_status;
        $save = $data->save();
        
        if($request->category_image != null)
        {
           $source= $_FILES['category_image']['tmp_name'];
           @mkdir("Category");
           $destination="Category/".$data->category_image;
           $saveimage = move_uploaded_file($source,$destination);  
        }
        if($save)
        {
            $message="Data created successfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]);  
        }
        else
        {
            $message="Unable to create data,please try again.";
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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singledata = Category::find($id);
        return response()->json([
            'singledata' => $singledata
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singledata = Category::find($id);
        return response()->json([
            'singledata' => $singledata
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $data = Category::find($request->id);
        $data->category_name = $request->category_name;
        $data->category_slug = Str::slug($request->category_name, '-');
        //$data->category_code = random_int(10000000000, 99999999999);
        if($request->category_image != null)
        {
            $data->category_image = time(). $_FILES["category_image"]["name"];
        }
        $data->category_status = $request->category_status;
        $save = $data->update();
        
        if($request->category_image != null)
        {
           $source= $_FILES['category_image']['tmp_name'];
           @mkdir("Category");
           $destination="Category/".$data->category_image;
           $saveimage = move_uploaded_file($source,$destination);  
        }
        if($save)
        {
            $message="Data updated successfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]);  
        }
        else
        {
            $message="Unable to update data,please try again.";
            $status = 0;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]); 
        }
    }

    public function destroy($id)
    {
        $data = Category::find($id);
        $delete = $data->delete();
        
        if($delete)
        {   
            $allData = Category::latest()->paginate(30);
            $message="Data deleted sccuessfully.";
            $status = 1;
            return response()->json([
                'message' => $message,
                'status' => $status,
                'allData' => $allData
            ]); 
        }
        else
        {
            $message="Unable to delete data,please try again.";
            $status = 0;
            return response()->json([
                'message' => $message,
                'status' => $status
            ]); 
        }
        
    }

	public function search(Request $request)
	{
        $query = $request->get('query');
		if($request->get('query') == null)
		{
            $allData=Category::latest()->paginate(30);
		}
		else
		{
            $allData=Category::where('category_name', 'LIKE', "%{$query}%")->latest()->paginate(30);		
		}
		return response()->json([
            'allData' => $allData,
        ]); 	
	}
}
