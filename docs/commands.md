There are many commands available to help you build and test sites. Here are a few highlights to get started with.

## BROWSING
Launches PHP server so you can access the website.

```sh
$ grunt serve
```

## DEVELOPMENT MODE
Watch For Changes + auto compilation Sass files from ./resources/scss to CSS ones (copies to public/css). JS files are being automatically copied from ./resources/js to public/js when developing so you can access them even in build version

```sh
$ grunt
```

## PRODUCTION MODE
Build and Optimize all the files (css, js).

```sh
$ grunt prod
```

## STATIC CODE ANALYSIS
SCSS linting + JSHinting

```sh
$ grunt test
```

Build and optimize the current project, ready for deployment.

## Performance Insights
Run the deployed (public) version of your site against the [PageSpeed Insights](https://developers.google.com/speed/pagespeed/insights/) API to help you stay on top of where you can improve.
