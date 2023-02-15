<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
        {
            $bookCount = Book::count();
            $categoryCount = Category::count(); 
            $userCount = User::count();
            return view('admin.pageadmin',['book_count'=> $bookCount , 'kategori'=> $categoryCount , 'user_count'=>$userCount] );
        }
        public function pageadmin()
        {
            return view('admin.pageadmin');
        }
        //---------------------------------------------------------------------------------------------------------------------------

        //USERS
        public function user()
        {
            $users = User ::where('roles_id',2)->where('status','active')->get();
            return view('admin.user',['users'=> $users]);

        }
       
        public function usersRegistered()
        {
            $usersRegistered = User ::where('roles_id',2)->where('status','inactive')->get();
            return view('admin.user-registered',['usersRegistered'=>$usersRegistered]);
        }

        public function usersDetail($slug)
        {
            $users = user::where('slug',$slug)->first();
            return view('admin.user-detail',['user'=>$users]);
        }

        public function usersApprove($slug)
        {
            $users = user::where('slug',$slug)->first();
            $users->status ='active';
           $users->save();
           return redirect('users-detail/'.$slug)->with('status','Approve Successfuly');
        }
        public function usersBen($slug)
        {
            $user = User::where('slug',$slug)->first();
            $user->delete();
            return redirect('user')->with('status','Deleted Succesfully');
        }
// untuk menampilkan data user yang di bened, ini ada migration nya
        public function usersBenned()
        {
            $userdel = User::onlyTrashed()->get();
            return view('admin.user-benned',['userBenned'=>$userdel]);
        }

// ini buat restore, atau mengaktifkan ulang akun user yang udh di benned
        public function usersRestore($slug)
        {
            $user = User::withTrashed()->where('slug',$slug)->first();
            $user->restore();
            return redirect('user')->with('status','Users Restore Succesfully');
        }
        //-----------------------------------------------------------------------------------------------------------------------

        //CATEGORY  
        public function categories()
        {
            $categories = Category::all();
            return view('admin.category.categories', ['categories'=> $categories]);
        }
            //tambah category
        public function categoriesAdd()
        {
            return view('admin.category.add-category');
        }
        public function categoryStore(Request $request)
        {
            $validated = $request->validate([
                'name' => 'required|unique:categories',
            ]);
            //memasukan data ke database kita
           $category = Category::create($request->all());
           //with itu untuk memberikan status, jadi return redirect dengan ada status bacaan categori add sukses
           return redirect('categories')->with('status','category Added Successfuly');
        }
        //edit category
        public function categoriesEdit($slug)
        {
            $category = Category::where('slug',$slug)->first();
            return view('admin.category.edit-category', ['category' => $category]);
        }

        public function categoriesUpdate(Request $request,$slug)
        {
            $validated = $request->validate([
                'name' => 'required|unique:categories',
            ]);
            $category = Category::where('slug',$slug)->first();
            $category->slug = null;
            $category->update($request->all());
            return redirect('categories')->with('status','Updated Succesfuly');

        }
        //hapus category
        public function categoryDestroy($slug)
        {
            $category = Category::where('slug',$slug)->first();
            $category->delete();
            return redirect('categories')->with('status','Deleted successfuly');
        }

        //-----------------------------------------------------------------------------------------------------------------------------

        // BOOKS    

        public function booksEdit($slug)
        {
            $books = Book::where('slug',$slug)->first(); 
            $categories = Category::all();
            return view('admin.edit-book',['books'=>$books , 'categories'=> $categories]);
        }
        //update books
        public function booksUpdate(Request $request,$slug)
        {
            if($request->file('image')){
                $extension = $request->file('image')->getClientOriginalExtension();
                $newName = $request->tittle.'-'.now()->timestamp.'.'.$extension;

                $request->file('image')->storeAs('cover',$newName);
                $request['cover']=$newName;
            }
            $books = Book::where('slug',$slug)->first();
            $books -> update($request->all());
            if($request->categories){
                $books->categories()->sync($request->categories);
            }
            return redirect('book')->with ('status','Updated Books Succesfuly');
        }


      //delete Books
        public function booksDestroy($slug)
        {
            $books = Book::where('slug',$slug)->first();
            $books->delete();
            return redirect('book')->with('status','Deleted successfuly');
        }

        public function book()
        {
            $book = Book::all();
            return view('admin.book',['book' =>$book]);
        }

        //menambah books
        public function booksAdd()
        {
            //ini buat nampilin semua data categori yang ada di database ke option add book 
            $categories = Category::all();
            return view('admin.add-book',['categories' => $categories]);
            
        }

        
        public function booksStore(Request $request)
        {
            //ini hatrus sama kaya yang ada id model, kaya tittle gitu2, jadi kita haruss bikin model
            $validated = $request->validate([
                'book_code' => 'required|unique:books',
                'tittle' => 'required',

            ]);
//ini buat masukin image di add books bagian cover
            $newName = '';  
            if($request->file('image')){
                $extension = $request->file('image')->getClientOriginalExtension();
                $newName = $request->tittle.'-'.now()->timestamp.'.'.$extension;

                $request->file('image')->storeAs('cover',$newName);
            }

            $request['cover'] = $newName;
            $book = Book ::create($request->all());
            $book->categories()->sync($request->categories);
            return redirect('book')->with('status','Added Succesfuly');
        }
}
