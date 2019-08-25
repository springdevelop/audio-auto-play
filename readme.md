# Laravel Skeleton maker

## Installation

To install this package you will need:

* Laravel 5.8+

Install via **Laravel Skeleton Maker**

```

- Folder structure

```bash
app
├── Console
│   └── Kernel.php
├── Exceptions
│   └── Handler.php
├── Helpers
│   ├── ApiHelper.php
│   └── FormHelper.php
├── Http
│   ├── Controllers
│   │   ├── Admin
│   │   │   ├── BaseController.php
│   │   │   └── HomeController.php
│   │   ├── Api
│   │   │   ├── BaseController.php
│   │   │   └── UsersController.php
│   │   ├── Auth
│   │   │   ├── ForgotPasswordController.php
│   │   │   ├── LoginController.php
│   │   │   ├── RegisterController.php
│   │   │   └── ResetPasswordController.php
│   │   ├── Controller.php
│   │   └── Web
│   │       ├── BaseController.php
│   │       └── HomeController.php
│   ├── Kernel.php
│   ├── Middleware
│   │   ├── AdminAuthenticate.php
│   │   ├── EncryptCookies.php
│   │   ├── RedirectIfAuthenticated.php
│   │   ├── TrimStrings.php
│   │   └── VerifyCsrfToken.php
│   └── Requests
│       ├── Api
│       │   ├── BaseRequest.php
│       │   ├── UserRegisterRequest.php
│       │   └── UserUpdateRequest.php
│       └── Web
│           └── BaseRequest.php
├── Mail
│   ├── BaseMail.php
│   └── User
│       └── WelcomeMail.php
├── Models
│   ├── Traits
│   │   └── ApiScopes.php
│   └── User.php
├── Providers
│   ├── AppServiceProvider.php
│   ├── AuthServiceProvider.php
│   ├── BroadcastServiceProvider.php
│   ├── EventServiceProvider.php
│   ├── RouteServiceProvider.php
│   └── ServicesBindingProvider.php
└── Services
    ├── Api
    │   ├── BaseService.php
    │   ├── Contracts
    │   │   ├── BaseServiceInterface.php
    │   │   ├── CanSortAndFilter.php
    │   │   └── UserServiceInterface.php
    │   ├── Pagination
    │   │   └── ApiPaginator.php
    │   ├── UserService.php
    │   └── Values
    │       └── ApiParam.php
    ├── Helpers
    │   └── EmailService.php
    ├── Traits
    │   └── EloquentFilter.php
    └── Web
        ├── BaseService.php
        ├── Contracts
        │   ├── BaseServiceInterface.php
        │   └── UserServiceInterface.php
        └── UserService.php
 
 resources
 ├── assets
 │   ├── js
 │   │   ├── app.js
 │   │   ├── bootstrap.js
 │   │   └── components
 │   │       └── Example.vue
 │   └── sass
 │       ├── _variables.scss
 │       └── app.scss
 ├── lang
 │   └── en
 │       ├── auth.php
 │       ├── pagination.php
 │       ├── passwords.php
 │       └── validation.php
 └── views
     ├── admin
     │   └── welcome.blade.php
     ├── emails
     │   └── en
     │       └── user
     │           └── welcome.blade.php
     ├── web
     │   └── welcome.blade.php
     └── welcome.blade.php
```
      
## License

The MIT License (MIT)