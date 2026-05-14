# LAMP Stack for Docker

## Setup

1. Clone: `git clone https://github.com/smtack/docker-lamp.git && cd docker-lamp`

2. Copy .env.example to .env and edit credentials: `cp .env.example .env`

3. Build the stack `docker compose up -d --build`

4. Open in browser: `http://localhost:8080` phpMyAdmin:`http://localhost:8081` (login with root username and password in .env)