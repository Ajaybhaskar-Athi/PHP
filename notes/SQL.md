In PHP with MySQL, persistent and non-persistent (unpersistent) connections refer to the way a database connection is managed and reused.

### 1. Non-Persistent (Standard) Connections
A **non-persistent connection** (default in PHP) is created each time a script needs access to the database and is closed when the script finishes executing. This connection setup involves establishing a new database connection with each request.

#### Characteristics:
- **Created per request**: Every time the script runs, a new connection is created.
- **Closed automatically**: The connection is closed as soon as the script ends.
- **Less efficient for high traffic**: Repeatedly opening and closing connections can be costly in terms of resources and time, especially under high load.

#### Example:
When you use `mysqli_connect()` or `new PDO()`, you are creating a non-persistent connection.
```php
<?php
$conn = new mysqli("localhost", "username", "password", "database");
```

### 2. Persistent Connections
A **persistent connection** allows a single connection to remain open and be reused by future requests, reducing the overhead of establishing new connections for each request. In PHP, you enable persistent connections by specifying certain parameters, such as using the `p:` prefix with `mysqli` or setting `PDO::ATTR_PERSISTENT` to `true` in `PDO`.

#### Characteristics:
- **Reused across requests**: Once created, the connection remains open and is reused across multiple requests.
- **More efficient**: Reduces the overhead of connecting to the database repeatedly, which is beneficial for applications with high traffic.
- **May hold resources longer**: Since the connection stays open, it may hold resources longer than a non-persistent connection, which could be an issue with too many open connections in some cases.

#### Example with `mysqli`:
```php
<?php
// Note the `p:` prefix for persistent connections
$conn = new mysqli("p:localhost", "username", "password", "database");
```

#### Example with `PDO`:
```php
<?php
$dsn = "mysql:host=localhost;dbname=database";
$options = [
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$pdo = new PDO($dsn, "username", "password", $options);
```

### Pros and Cons

| Type               | Pros                                                | Cons                                                   |
|--------------------|-----------------------------------------------------|--------------------------------------------------------|
| Non-Persistent     | Simple and straightforward                          | Increased overhead from frequent opening/closing       |
| Persistent         | Reduces connection overhead, ideal for high traffic | May lead to "too many connections" if not managed well |

In general, persistent connections can enhance performance for applications with heavy database usage, but they should be monitored to avoid too many open connections.