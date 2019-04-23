# Social Authentication Usign Laravel Socialite

Several social authentication system through Laravel Socialite 4.1, Features included:

- Facebook authentication
- Twitter authentication
- Instagram authentication
- Linkedin authentication
- Github authentication
- Bitbucket authentication
- Validation

## Required

* composer  
* php(version>=7.2)  
* mysql  

### Install Laravel
```
$ composer create-project laravel/laravel rest_api
```

### Install socialite
```
$ composer require laravel/socialite
```

### Run the Artisan migrate command:
```bash
Add "provider" and "provider_id" column in users table

$ php artisan migrate
```

#### Make all settings according to socialite documentation from here
```bash
https://laravel.com/docs/5.8/socialite
```

#### For instagram run this command
```bash
$ composer require socialiteproviders/instagram 
```

#### Add this line in "config/app.php" file in service providers array
```bash
\SocialiteProviders\Manager\ServiceProvider::class
```

#### Add this line in "app/Providers/EventServiceProvider" file in listen array
```bash
      \SocialiteProviders\Manager\SocialiteWasCalled::class => [
            // add your listeners (aka providers) here
            'SocialiteProviders\\Instagram\\InstagramExtendSocialite@handle',
        ],
```
