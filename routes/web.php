<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

//-------------FRONTEND--------------
//index
Route::get('/', 'frontend\HomeController@getIndex');
Route::get('about', 'frontend\HomeController@getAbout');
Route::get('contact', 'frontend\HomeController@getContact');

//cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('', 'frontend\CartController@getCart');
});


//checkout
Route::group(['prefix' => 'checkout'], function () {
    Route::get('', 'frontend\CheckoutController@getCheckout');
    Route::get('complete', 'frontend\CheckoutController@getComplete');
    Route::post('', 'frontend\CheckoutController@postCheckout');
});


//product
Route::group(['prefix' => 'product'], function () {
    Route::get('shop', 'frontend\ProductController@getShop');
    Route::get('detail', 'frontend\ProductController@getDetail');
});



//----------------------BACKEND----------------------

//login
Route::get('login', 'backend\LoginController@getLogin');
Route::post('login', 'backend\LoginController@postLogin');


//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'backend\IndexController@getIndex');

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'backend\CategoryController@getCategory');
        Route::get('edit/{idCate}', 'backend\CategoryController@getEditCategory');
        Route::post('', 'backend\CategoryController@postCategory');
        Route::post('edit/{idCate}', 'backend\CategoryController@postEditCategory');
        Route::get('del/{idCate}', 'backend\CategoryController@delCategory');
    });

    //order
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'backend\OrderController@getOrder');
        Route::get('detail', 'backend\OrderController@getDetail');
        Route::get('processed', 'backend\OrderController@getProcessed');
    });
    

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@getProduct');
        Route::get('add', 'backend\ProductController@getAddProduct');
        Route::get('edit', 'backend\ProductController@getEditProduct');
        Route::post('add', 'backend\ProductController@postAddProduct');
        Route::post('edit', 'backend\ProductController@postEditProduct');
    });
    

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('', 'backend\UserController@getUser');
        Route::get('add', 'backend\UserController@getAddtUser');
        Route::get('edit/{idUser}', 'backend\UserController@getEditUser');
        Route::post('add', 'backend\UserController@postAddtUser');
        Route::post('edit/{idUser}', 'backend\UserController@postEditUser');
        Route::get('delete/{idUser}', 'backend\UserController@deleteUser');
    });
   
});




// //------------------ly thuyet..............-----------

// Route::group(['prefix' => 'schema'], function () {
//     Route::get('create-table', function () {
//         Schema::create('users', function ($table) {
//             $table->bigIncrements('id');//bigint, increment: tu tang, khoa chinh
//                                         //unsigned
//             $table->string('name')->nullable(); //varchar(255 ki tu)(nullable: cho phep null)
//             $table->integer('phone')->unsigned()->nullable();//int, k dau, cho phep null
//             $table->string('address', 100)->nullable()->unique();//varchar, 100 ky tu, cho phep null, khong trung nhau
//             $table->boolean('level')->nullable()->default(1);//boolean, cho phep null, mac dinh la 1
//             $table->timestamps(); //tự tạo 2 trường created_at, updated_at
//         });

//         Schema::create('post', function ($table) {
//             $table->bigIncrements('id');
//             $table->bigInteger('user_id')->unsigned();
//             $table->Foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//             //truong id(khoa phu) bang post tham chieu den id(khoa phu) bang users 
//             $table->timestamps();
//         });
//     });
// });

// //xoa bang
// Route::get('del-table', function () {
//     Schema::dropIfExists('users');
// });

// //sua ten bang
// Route::get('rename-table', function () {
//     Schema::rename('users', 'thanh-vien');
// });

// //tuong tac voi cot
// Route::get('add-col', function () {
//     Schema::table('users', function ($table) {
//         $table->integer('id_number')->unsigned()->nullable()->after('address');
//         //them cot id_number vao sau field address trong bang users
//     });
// });
// //sua va xoa cot
// //su dung thu vien doctrine/dbal
// //composer require doctrine/dbal
// Route::get('edit-col', function () {
//     //sua ten cot
//     Schema::create('users', function ($table) {
//         $table->renameColumn('name', 'full');
//     });

//     //xoa cot
//     Schema::table('users', function ($table) {
//         $table->dropColumn('id_number');
//     });
// });



//QUERY BUIDER

Route::group(['prefix'=>'query'], function () {

    //them ban ghi moi
    Route::get('insert', function () {
        //them 1 ban ghi
        // DB::table('users')->insert([
        //     'email'=>'ha@gmai.com',
        //     'password'=>'123456',
        //     'full'=>'Nguyen Viet Ha',
        //     'address'=>'ha noi',
        //     'phone'=>'123456789',
        //     'level'=>1
        // ]);

        //them nhieu ban ghi
        DB::table('users')->insert([
            ['email'=>'thao@gmai.com', 'password'=>'123456', 'full'=>'Nguyen thao','address'=>'bac giang', 'phone'=>'123456789', 'level'=>1],
            ['email'=>'huy@gmai.com', 'password'=>'1234567', 'full'=>'Nguyen huy','address'=>'hai phong ', 'phone'=>'123456789', 'level'=>0],
            ['email'=>'mit@gmai.com', 'password'=>'1234568', 'full'=>'Nguyen mit','address'=>'thai binh', 'phone'=>'123456789', 'level'=>1],
        ]); 
    });
});

//sua ban ghi
Route::get('update', function () {
    //tim ban ghi theo dieu kien: where(), update() 'key':ten truong, 'value':gia tri sua
    //DB::table('users')->where('address', 'ha noi')->update(['password'=>'987654321']);
    //DB::table('users')->where('address', 'bac giang')->where('level', 1)->update(['password'=>'12345', 'address'=>'bac ninh']);

    //sua hoac them ban ghi moi: update or insert
    //updateOrInsert([dieu kien], [thay doi]);
    //neu ton tai ban ghi dung voi dieu kien thi se update, con khong thi insert ban ghi moi
    DB::table('users')->updateOrInsert(['address'=>'ha noi'], ['phone'=>'987654321', 'address'=>'bac giang']);
});

//xoa ban ghi
Route::get('delete', function () {
    //xoa 1 ban ghi
    //DB::table('users')->where('id', 5)->delete();

    //xoa tat ca ban ghi
    DB::table('users')->delete();

    // Nâng cao
    // Lấy dữ liệu trong database
    //Sử dụng các phương thức: get(): lấy tất cả các dữ liệu,first(): lấy dữ liệu đầu,find(): tìm dữ liệu
    Route::get('get', function () {
        // lấy tất cả dữ liệu theo điều kiện trả về dạng mảng
        // $user= DB::table('users')->where('level',0)->get();
        // dd($user->all());
        // lấy bản ghi dầu tiên theo điều kiện
        // $user= DB::table('users')->where('level',0)->first();
        // dd($user);
        // lấy 1 bản ghi theo id mặc định tìm theo ID
    $user=DB::table('users')->find(27);
    dd($user);
    });
    // Điều kiện where
    Route::get('where', function () {
        // WHERE: gồm 3 tham số  trường cần tìm, toán tử so sánh, giá trị cần tìm
        //  $user= DB::table('users')->where('level','<>',0)->get();
        //  dd($user)->all();
         // where and : điều kiện và
        //  $user= DB::table('users')->where('level','<>',0)->where('full','vietpro')->get();
        //  dd($user)->all();
         //where or
        //  $user= DB::table('users')->where('id','<',28)->orwhere('id','>',29)->get();
        //  dd($user);
         // whereBetween
        //  $user =DB::table('users')->whereBetween('id',[27,29])->get();
        //  dd($user);
         // lấy 1 số lượng bản ghi nhất định
    });
    Route::get('take', function () {
        // $user=DB::table('users')->take(3)->get();
        // dd($user);
        //orderBy()
        // $user=DB::table('users')->orderBy('id','desc')->take(3)->get();
        // dd($user);
        //Skip
        $user=DB::table('users')->skip(1)->take(2)->get();
        dd($user);
     });
});





