<?php
// routes/web.php
Route::middleware(['auth:llave_cdmx'])->group(function () {
    Route::get('/manual/{path?}', function ($path = 'index.html') {
        $filePath = storage_path("app/docs/{$path}");
        
        if (!file_exists($filePath)) {
            abort(404);
        }
        
        $mimeType = mime_content_type($filePath);
        if (str_ends_with($path, '.css')) $mimeType = 'text/css';
        if (str_ends_with($path, '.js')) $mimeType = 'application/javascript';
        
        return response()->file($filePath, ['Content-Type' => $mimeType]);
    })->where('path', '.*');
});