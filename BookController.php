<?php 

  namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

 class BookController extends Controller {
 	public function index() {
    $buku = DB::table('book')->get();
 		return view('books.index' , [
       'title'=>'Book',
       'Books'=>$buku
    ]);
 	}

   public function addPage() {
    return view('books.add', [
        'title'=>'Add'
    ]);
   }

   public function editPage($id) {
    $detail = DB::table('book')->where('no' , $id)->get();
    return view('books.edit' , [
        'title'=>"Update",
        'item'=>$detail
    ]);
   }

   public function PostHandler(Request $request) {
       DB::table('book')->insert([
         'title'=>$request->title, 
         'author'=>$request->author,
         'publication'=>$request->publication,
         'year'=>$request->year
       ]);

       return redirect('/book');
   }

   public function putHandler(Request $request) {
       DB::table('book')->where('no',$request->no)->update([
          'title'=>$request->title, 
          'author'=>$request->author, 
          'publication'=>$request->publication, 
          'year'=>$request->year 
       ]);

       return redirect('/book');
   }

   public function deleteHandler($id) {
     DB::table('book')->where('no',$id)->delete();
     return redirect('/book');
   }
 }


?>