STAGE 1:
 -Introduction
  AOS libaries
  Apline.js
  Blade UI kits/icons

STAGE 2:
 -Libaries Explained
  npm install AOS from Github
  Composer require Blade-UI-Kits & Icon

STAGE 3:
 -Common Questions
  hosting
  Future development

STAGE 4:
 -Clone Repositories
  Composer install dependency
  Set environment variables
  Create database
  Migrate database
  set app key

STAGE 5: 
  -Create Application Models
   User model
   Post Model
    -Belongs to user relationship
   Tag model
    -Polymorphic relationship with Post(MorphTo Many)
   Comment model:
    -Polymorphic relationship with Post(MorphTo Many)
   Setting Model
   Plan Model

STAGE 6: 
  -User Model And Migration
   Roles user model setup

STAGE 7:
  -Profile Model And Migration
  Set profile model
  Set one to many relation & user_id foreign key migration

STAGE 8:
  -Create User Policy And Register policy

STAGE 9:
  -Post Model And Migration
  Set post model 
  Set Casts property and implements CastsAttributes
  Set Mutator and Accessor method 

STAGE 10:
  -Create HasAuthor Trait
   Post belongs to a User Relation (one-to-many)
   User hasmany Post
   Author trait belongs to A User
   Post uses Author Trait

STAGE 11:
   -Post Policy And Registration
    Post Controller to use Post policy

STAGE 12:
   -Tag Model And Migration
    Foreign id to tags
    Polymophic column

STAGE 13:
   -HasTag Trait and (Many to Many Polymorphic Relation)
   Note: find out how Tag::class is related to taggables table

STAGE 14:
   -Comment Model Setup, Migrations And Comment Interface 
    Note: fing out how commentAbleRelation is Related to comments table

STAGE 15:
   -HasComments Traits And Relationship

STAGE 16:
   -Create Comment Policy And Registration

STAGE 17:
   -Set Up Stripe Account   
   -Install Laravel Chashier Stripe (Not complete)

STAGE 18:
   -Create Stripe Products And Plan Model (Not complete)
   -Log On To Stripe And Add Products
   -Monthly Plan 
   -Yearly Plan 
   -Free Plan

STAGE 19:
   -Create PlanTableSeeder

STAGE 20:
   -Create UsertableSeeder 
   -Create Profile Factory

STAGE 21:
   -Create Post Seeder
   -Create Post Factory

STAGE 22:
   -Create Tag Seeder
   -Create Tag Factory

STAGE 23:
   -Create Comment seeder
   -Create Comment Factory

STAGE 24:
   -Create The Controller, Route And View
   -Working On Membership view(If person is subscribe, check if he/she can go to premuim or)

STAGE 25:
   -Create Stripe Customer on Registration (Not complete)

STAGE 26:
   -Create Setup Intent to charge customer

STAGE 27:
   -Create User Billing address and Checkout view
   -Uncomment createSetupIntent() in Payment Controller (not complete)
  
STAGE 28:
  -Stripe Elements And Process The Form (not complete)
  -Bring in the stripe javascript libary from Stripe Api documentation https://js.stripe.com/v3
  -Submit Form with Javascript

STAGE 29:
  -Create A new subscription in stripe (not complete)
  -Submit to Paymentcontroller store method

STAGE 30:
  -Syncing Customer Data with Stripe (not complete)
  -Update the stripe customer billing details if changes occur in future

STAGE 31:
  -Update User Model method and Fixes (Adding ?string)

STAGE 32:
  -Check Subscription Status and Updates to disable button sign up button
  -Update the Plan fillables
  -Create a Blade service provider BladeServiceProvider::class and Register
  -Check if auth user is subscribed to plan



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
