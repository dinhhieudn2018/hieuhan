<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use File;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(10);
        return view('admin.image.index',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.image.add');
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
                    Image::create($data);
                    return redirect()->route('image.index')->with('success','Đã thêm dữ liệu thành công');
                }
            }
            else{
                return redirect()->back()->with('error','Đã có lỗi vui lòng nhập lại');
            }
        }
        else{
            return redirect()->back()->with('error','Đã có lỗi vui lòng nhập lại');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = Image::find($id);
        return view('admin.image.edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = Image::find($id);
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
                    if(File::exists('upload/img'.$image->image)){
                        //Xóa file
                        unlink('upload/img'.$image->image);
                    }
                }
            }
            else{
                return redirect()->back()->with('error','Đã có lỗi vui lòng nhập lại');
            }
        }else{
            $data['image'] = $image->image;
        }
        if($image->update($data)){
            return redirect()->route('image.index')->with('success','Đã cập nhật thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $img = Image::find($id)->delete();
        return redirect()->route('image.index')->with('success','Đã xóa thành công');
    }
}
