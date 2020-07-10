![Cover image](/laravel-medium.png)

## Project URL
<https://dashboard.heroku.com/apps/laravel-medium>

## Github links
<https://github.com/EthanChenYen-Peng/laravel_medium>

## Introduction

Blog app, the quintessential CRUD application, is widely used as a learning project among web developers. Since I'm learning Laravel and have become a subscriber of the Medium blog recently. I thought it might be a good project to build a medium clone.

## Technologies
1. Blade template : View layer engine that generate dynamic HTML (default setup from Laravel).
2. Vue component : Vue components are added to handle parts that required a bit more user interaction. For instance :
    - Load any additional comments on a blog post instantly without having to reload the entire page.
    - Instant update of clap count for a blog post when user click the clap button.
3. Vuex: For state management between Vue components. 
4. TailwindCSS : A utility based css framework that seems to be particular popular among the Laravel and Vue community. 
5. Heroku: PaaS plateform that used to service the web app. 
6. Amazon S3: To store and loads media assets, these include user avatar and cover image for a blog post.

## What I have learned from the project

1. Test driven development:

- Laravel has a set of very comprehensive tools to generate fixtures for testing purposes.
- Writing unit tests for testing :
    1. Relationship between models.
    2. Business logic. For instance, User model is a "Followable" trait that allows users to follow one another.
- Integration test :
    1. Testing each URL endpoints.
    2. Test authentication (protected routes).
        - Pages that only accessible for user who has logged in.
    3. Test authorisation. 
        - User cannot update nor delete others posts

2. Vuex : 

- State management is one of the most important topic in frontend framework like React and Vue.

    Even though implementing Vuex maybe a bit overkill since there aren't that many Vue components in the project, I thought why not give in a try. Interestingly there are a lot of similarities between Vuex and Redux.

    1. Understand the core concept of Vuex including Store,Action, Mutation and Getter.