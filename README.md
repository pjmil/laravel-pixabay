# Laravel Pixabay

`composer require pjmil/laravel-pixabay`

Go to pixabay.com, register an account and get your API key

Add `PIXABAY_API_KEY=<your_api_key>` to `.env`

```
$images = Pixabay::image([
  'q' => 'animals+dancing',
  'min_width' => 600,
  'min_height' => 600,
  'type' => 'photo',
]);

$videos = Pixabay::video([
  'q' => 'animals+dancing',
]);
```

Refer to [Pixabay's API docs](https://pixabay.com/api/docs/) for query options.