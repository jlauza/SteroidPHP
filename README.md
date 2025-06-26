# PHP Playground

For PHP practice.

# Get Started

- Start/Run Docker
  `bash
dockerd or sudo dockerd
`

- Build containers
  `bash
sudo docker compose up -d
`

- Install dependencies in the root
  `bash
composer install
`

- Run the app
  `bash
composer start
`

#Kill Zombie Server
This PHP server won't die easy. So I have to document it. Below is the process how to kill the server after development

`bash
lsof -i :8000
`
Result
`bash
php    12345 yourusername   3u  IPv4 0x... TCP *:8000 (LISTEN)
`
Then
`bash
kill 12345
`

# Or

`bash
composer stop
`
