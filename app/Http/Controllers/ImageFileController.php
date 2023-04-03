<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Image;
use App\Models\Contact;
 
 
class ImageFileController extends Controller
{
 
    public function index()
    {

        $contacts = Contact::get();
        
        return view('pdf.index', compact('contacts'));
    }
  
    public function imageFileUpload(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:4096',
        ]);
        $contacts = Contact::get();

        $image = $request->file('file');
       
 
 
        $imgFile=[];
        foreach ($contacts as $contact){
        $lname= ucfirst($contact->last_name);
        $fname=ucfirst($contact->first_name);
        $fullname = "$fname $lname";
        $filename = $fullname.'.'.$image->getClientOriginalExtension();
        $imgFile = Image::make($image->getRealPath());

// dd($input['file']);
        $imgFile->text("$fullname", 2190, 1150, function($font) { 
            $font->file(public_path('Arial.ttf'));
            $font->size(55);
            $font->color('#202124');
            $font->align('center');
            $font->valign('bottom'); 
            // $font->angle(180);  
        })->save(public_path('/uploads').'/'.$filename);
        echo($filename);
    
    }       
 
        return back()
            ->with('success','certificates successfully generated.')
            ->with('fileName',$filename);         
    }
}