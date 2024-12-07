<h1>Instructions</h1>

// Before anything else 
<ul style="margin-top: 2rem">
  <li><code>composer install</code></li>
  <li><code>npm install</code></li>
  <li><code>php artisan db:seed</code></li>
  <li><code>php artisan storage:link</code></li>
  <li><code>php artisan filament:assets</code></li>
</ul>


// keeps the page from being slow
<p><code>php artisan icons:cache</code></p>

// Create an administrator account for your admin panel by running:
<p><code>php artisan make:filament-user</code></p>
// answer the input prompts after that



// Generate a unique key for the project and add it to APP_KEY in .env
<p><code>php artisan key:generate</code></p>
// Create an .env file based on the .env.example I provide (in root)
// You need to add the APP_KEY you generated earlier

// To run it
<ul>
  <li><code>php artisan serve</code></li>
  <li><code>npm run dev</code></li>
</ul>


