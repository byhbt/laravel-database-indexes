## Setup

This is init data script for preparing data to learn database index.

```
php artisan migrate --seed
```

It might take a little time because we init 300k row for user_video table.

## Review

1. Use ```EXPLAIN``` statement to see what type of MySQL index and how many rows it perform the queries.

2. Remove/Add index to **user_id** in **user_video** table, too se the different in performance.

3. Query the time range in the **user_video** table

- index type = range


## Reference:

- [https://vanseodesign.com/web-design/the-types-of-indexes-you-can-add-to-mysql-tables/](https://vanseodesign.com/web-design/the-types-of-indexes-you-can-add-to-mysql-tables/)
- [https://dev.mysql.com/doc/sakila/en/](https://dev.mysql.com/doc/sakila/en/)



## License

The app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
