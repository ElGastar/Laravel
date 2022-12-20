Урок 25
создает однометодный контроллер в указанной папке , в нашем случай это папка Post
```sh
php artisan make:controller <directory_name>/<name>Controller --invokable
```

добавляет namespace Post к контроллерам, так как они находятся а папке Post
```sh
Route::group(['namespace'=>'Post'],function(){
    Route::get('/posts','IndexController')->name('posts.index');
    Route::get('/posts/create','CreateController')->name('posts.create');
    Route::post('/posts','StoreController')->name('posts.store');
    Route::get('/posts/{post}','ShowController')->name('posts.show');
    Route::get('/posts/{post}/edit','EditController')->name('posts.edit');
    Route::patch('/posts/{post}','UpdateController')->name('posts.update');
    Route::delete('/posts/{post}','DestroyController')->name('posts.destroy');
});
```
