Just simple project on laravel

configs for gmail
'driver' => env('MAIL_DRIVER', 'smtp'), 'host' => env('MAIL_HOST', 'smtp.gmail.com'), 'port' => env('MAIL_PORT', 587),

'from' => [
    'address' => 'mubeshier.hameed@gmail.com', 
    'name' => 'Welcom to Indus'
    ], 
'encryption' => env('MAIL_ENCRYPTION', 'tls'),
'username' => env('MAIL_USERNAME'), ->remove 'myemail@gmail.com'
'password' => env('MAIL_PASSWORD'), -> remove 'mypassword' 
'sendmail' => '/usr/sbin/sendmail -bs', 
'pretend' => false,