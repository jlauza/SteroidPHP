# Steroid PHP (PHP in Steroids)

<p align="center">
  <img src="https://github.com/jlauza/SteroidPHP/blob/main/app/public/image/logo.png" width="380" alt="PHP Logo">
</p>

A custom PHP MVC architecture resolving the issue of default PHP synchronous to asynchronous.

## MVC Architecture

<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/MVC-Process.svg" width="380" alt="PHP Logo">
</p>
_Steroid PHP follows the Model-View-Controller (MVC) pattern where:_

- **Model** (`app/models/`): Handles data logic and database interactions
- **View** (`app/views/`): Manages the presentation layer and user interface
- **Controller** (`app/controller/`): Controls the flow between Model and View

# Get Started

- Start/Run Docker

```bash
dockerd or sudo dockerd
```

- If newly cloned

```bash
sudo docker compose build

or
# useful when rebuilding with no cache flag
sudo docker compose build --no-cache
```

- Build containers

```bash
sudo docker compose up -d
```

- Install dependencies in the root

```bash
composer install
```

- Run the app locally or outside docker (Optional)

```bash
composer start
```

# Kill Zombie Server (If necesarry)

If the PHP server won't die easy. Below is the process how to kill the server after development

```bash
lsof -i :8080
```

Result

```bash
php    12345 yourusername   3u  IPv4 0x... TCP *:8000 (LISTEN)
```

Then

```bash
kill 12345
```

# Or

```bash
composer stop
```

# Kill Docker Engine (Rare)

If you ran dockerd and accidentally closed the terminla. Likely, the docker engine is still running in the backround.
To kill this, follow this process:

1. Find the pid

```bash
ps aux | grep dockerd
```

2. It may come with more than 1 results with "sudo dockerd", "grep \*\*\*". Select the one with "dockerd" written on it without sudo. Those are wrappers.

```bash
sudo kill -9 <pid>
```
