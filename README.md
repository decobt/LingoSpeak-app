
# Lingo Speak App

This application is a modern language course powered by Laravel and Vue.js. Users are able to learn new language topics via specially crafted quizes and track their progress.

## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

`DB_HOST`,
`DB_PORT`,
`DB_DATABASE`,
`DB_USERNAME`,
`DB_PASSWORD`

## Deployment

To deploy this project run to start the development server

```bash
  php artisan serve
```

After that  run the following command to watch over updates to the vue or js files.

```bash
  npm run watch
```

Next you need to create the database tables, run

```bash
  php artisan migrate
```

To fill the database tables with dummy data, run 

```bash
  php artisan db:seed
```

## Authors

- [@decobt](https://www.github.com/decobt)
  
## Screenshots

![App Screenshot](https://raw.githubusercontent.com/decobt/LingoSpeak-app/master/screenshots/image1.png)

![App Screenshot](https://raw.githubusercontent.com/decobt/LingoSpeak-app/master/screenshots/image2.png)

## License

[MIT](https://choosealicense.com/licenses/mit/)
