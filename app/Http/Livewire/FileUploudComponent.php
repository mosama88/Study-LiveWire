<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class FileUploudComponent extends Component
{
use WithFileUploads;



    public $photo;


    public function rules(){
        return[
        'photo'=> 'required|image|mimes:jpg,png,jpeg,webp',
        ];

    }


    public function messages(){
        return[
            'photo.required'=> 'حقل رفع الملفات مطلوب',
            'photo.image'=> 'يجب رفع الملفات يكون من نوع ملف ',
            'photo.mimes'=> 'يجب رفع الملفات يكون من نوع (jpg,png,jpeg,webp) ',
            ];

    }

//    public function updatedPhoto(){
//
//        $this->validate();
//
//    }


    public function export()
    {
        return Storage::disk('local')->download('livewire-tmp/01TO0kNUorfGUN4kr6sufrs5JlHhuQ-metaMjg5MDI1MjUxXzc2NTUzMTk3ODIyMDExMF8xNDQ3MzY2OTY1MjAzNTg4Njk4X24ucG5n-.png');
    }

    public function submit(){

        $this->validate($this->rules(),$this->messages());
        $this->photo->storeAs('public', 'avatar.jpg');

    }

    public function render()
    {
        return view('livewire.file-uploud-component');
    }












//    public $photos = [];
//
//
//    public function rules(){
//        return[
//            'photos.*'=> 'required|image|mimes:jpg,png,jpeg,webp',
//        ];
//
//    }
//
//
//    public function messages(){
//        return[
//            'photos.*.required'=> 'حقل رفع الملفات مطلوب',
//            'photos.*.image'=> 'يجب رفع الملفات يكون من نوع ملف ',
//            'photos.*.mimes'=> 'يجب رفع الملفات يكون من نوع (jpg,png,jpeg,webp) ',
//        ];
//
//    }
//
//
//    public function submit(){
//
//        $this->validate($this->rules(),$this->messages());
//
//        foreach ($this->photos as $photo){
//        $this->photo->storeAs('public', 'avatar.jpg');
//        }
//    }
//
//    public function render()
//    {
//        return view('livewire.file-uploud-component');
//    }


//    public $photo;
//
//
//    public function rules(){
//        return[
//        'photo'=> 'required|image|mimes:jpg,png,jpeg,webp',
//        ];
//
//    }
//
//
//    public function messages(){
//        return[
//            'photo.required'=> 'حقل رفع الملفات مطلوب',
//            'photo.image'=> 'يجب رفع الملفات يكون من نوع ملف ',
//            'photo.mimes'=> 'يجب رفع الملفات يكون من نوع (jpg,png,jpeg,webp) ',
//            ];
//
//    }
//
//
//    public function submit(){
//
//        $this->validate($this->rules(),$this->messages());
//        $this->photo->storeAs('public', 'avatar.jpg');
//
//    }
//
//    public function render()
//    {
//        return view('livewire.file-uploud-component');
//    }
}
