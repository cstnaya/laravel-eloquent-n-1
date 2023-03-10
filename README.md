<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

`Laravel`, `Lazy Loading`, `Eager Loading`, `N+1 problem`

## 關於此專案

此專案用實際例子比較 Laravel 當中的 Lazy Loading 與 Eager Loading 的差異。在這篇文章中，你會學到以下內容：
1. 何為 Lazy Loading
2. 何為 Eager Loading
4. 什麼是 N+1 問題
3. 為何要有 Eager Loading

## 何為 Lazy Loading
假設一個情境：我們需要提取所有電影紀錄，並列舉電影的導演。
```php
$movies = Movie::all();
$directors = [];

foreach($movies as $movie) {
   $directors[] = $movie->director->name;
}
```

在第一行的部分，我們查詢了 movie 的資料，這樣計為 1 次查詢。  
但到了第五行時，我們使用了關聯屬性 `$movie->director`，這時候由於在第 1 行查詢時沒有獲取 director 的資訊，

當你使用 Laravel 的 ORM 語法時，系統預設不會將你的關聯資料庫


## 何為 Eager Loading

## 什麼是 N+1 問題

## 為什麼要有 Eager Loading



