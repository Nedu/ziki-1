<?php

Route::set('index.php', function(){
    Index::CreatedView('Index');
});

Route::set('about-us', function(){
     AboutUs::CreatedView('AboutUs');
});

Route::set('contact-us', function(){
    ContactUs::CreatedView(ContactUs);
});

Route::set('timeline', function(){
    Timeline::CreatedView('timeline');
});


?>