<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use File;
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedback = Feedback::all();
        return view('admin.feedback.index',compact('feedback'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feedback.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            $file = $request->image;
            // Lấy tên file
            $file_name = $file->getClientOriginalName();
            // Lấy loại file
            $file_type = $file->getMimeType();
            // Kích thước file với đơn vị byte
            
            if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'gif'){
                $file_name = date('D_m_yyyy').'-'.str_slug($file_name);
                if($file->move('upload/img',$file_name)){
                    $data = $request->all();
                    $data['image'] = $file_name;
                    //dd($data);
                    Feedback::create($data);
                    return redirect()->route('feedback.index');
                }
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('admin.feedback.edit',compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $feedback = Feedback::find($id);
        $data = $request->all();
        if($request->hasFile('image')){
            $file = $request->image;
            // Lấy tên file
            $file_name = $file->getClientOriginalName();
            // Lấy loại file
            $file_type = $file->getMimeType();
            // Kích thước file với đơn vị byte
            //$file_size = $file->getSize();
            if($file_type == 'image/png' || $file_type == 'image/jpg' || $file_type == 'image/jpeg' || $file_type == 'gif'){
                $file_name = date('D_m_yyyy').'-'.str_slug($file_name);
                if($file->move('upload/img',$file_name)){                  
                    $data['image'] = $file_name;
                    if(File::exists('upload/img'.$feedback->image)){
                        //Xóa file
                        unlink('upload/img'.$feedback->image);
                    }
                }
            }
            else{
                return redirect()->back();
            }
        }else{
            $data['image'] = $feedback->image;
        }
        if($feedback->update($data)){
            return redirect()->route('feedback.index');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feedback  $feedback
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = Feedback::find($id)->delete();
        return redirect()->route('feedback.index');
    }
}
