<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    
    public function index()
    {
        $slider = slider::all();
        return view('admin.slider.index', compact('slider'));
        // return view('admin.slider.index');
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
       $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
       ]);


        $fileName = null;
        if(request()->hasFile('image')){
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . '_' . time() . '.' .$file->getClientOriginalExtension();
            $file->move('./slider/', $fileName);   
        }

        $slider = new Slider();
        $slider->image = $fileName;
        $slider->status = $request->status;      
        $slider->save();
        return redirect()->back()->with('success', 'Data Inserted Successfuly');
    }

    public function show($slider)
    {
        $slider = Slider::find($slider);
        return view('admin.slider.show', compact('slider'));
    }

    public function edit($id)
    {
        $myslide = Slider::find($id);
        return view('admin.slider.edit', compact('myslide'));
    }

    public function update(Request $request, $id)
    {
        Slider::where('id', $id)->update(['status' => $request->status]);
        $fileName = '';
        if(isset($request->image)){
            $image = Slider::where('id', $id)->first();
                if(isset($image->image) || $image->image != '' || $image->image != NULL){
                    unlink('slider/'.$image->image);
                }
            $file = request()->file('image');
            $fileName = md5($file->getClientOriginalName()) . '_' . time() . '.' .$file->getClientOriginalExtension();
            $file->move('./slider/', $fileName);;
            Slider::where('id', $id)->update(['image' => $fileName]);
      }
      return redirect()->back()->with('success', 'Data Updated Successfuly');
    }

    public function destroy($id)
    {
        // echo "Hello World";
        // Slider::destroy($id);
        Slider::where('id',$id)->delete();
        // Slider::find($id)->delete();
        // Schema::table('slider', function (Blueprint $data) {
        //     $data->softDeletes();
        // });
        return redirect()->back()->with('success', 'Data Deleted Successfuly');
    }
}
