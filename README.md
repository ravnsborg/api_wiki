

## About
This REST API can be used to access the data layer of my demo Wiki personal organization tool. It enables seamless management of articles and categories currently with more functionality to follow. It provides a structured, reliable interface for creating, retrieving, updating, and deleting these data layers.

---

## Setup
1. In the terminal, run the following command to install the framework and other composer packages that are needed.

   ``` composer install```

2. Once packages are installed, copy the `.env.example` to `.env` and add your DB configuration
    ```
    APP_URL=http://127.0.0.1:1234 // Add your own port number
    APP_PORT=1234
   ```

3. Run DB migrations to setup your table schema

   ```php artisan migrate```

4. Setup the node package manager then start it up.
    ```
    npm install
    npm run dev
    ```
---

## Code Style with Pint "manual"

This is using Laravel's code style preset called Pint. To ensure that your code is formatted correctly, run:

    ./vendor/bin/pint

This will reformat all files to match the coding style. Not just the files you've changed.

## Code Style with Pint "automatic"
Another option is to have Pint run automatically on code commits.

Run the following commands.

    mkdir -p .git/hooks
    touch .git/hooks/pre-commit
    chmod +x .git/hooks/pre-commit    

Then edit this file: `.git/hooks/pre-commit`


    #!/bin/sh
    
    echo "Running Laravel Pint via Sail..."
    
    ./vendor/bin/pint
    
    if [ $? -ne 0 ]; then
    echo "Pint failed. Please fix formatting before committing."
    exit 1
    fi

---

### Test "Seeder" Content
There are DB seeders in this applicaiton for populating your database with sample content if you so choose.

    ./vendor/bin/sail artisan db::seed

