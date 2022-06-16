# graphQL-express-MySQL-example
 
 It is using graphQL + node.js + express, and MySQL as datasource.

## How to use?

1. Download this repo.
2. Create a database, and import the SQL from /database/db.sql file.(inventory)
3. Modify config/db.config.js file, change the db password and db name.
3. Open repo, and execute `npm i`
4. Ok, done, run it `node index.js`
5. Visit `http://localhost:4000` in your browser
6. Try to run below query, get all posts records and its user infos.

```
{
  posts {
    id
    title
    content
    user {
      id
      email
      name
    }
  }
}
```

## Folder description

config: your database configuration

database:
  - index.js : used to init the database connection and db query method.

resolvers:
  - Query: used to store all of your queries.
  - Mutation: used to store all of your mutations.

types: used to store all data type definitions.

schema: entry of graphQL 
