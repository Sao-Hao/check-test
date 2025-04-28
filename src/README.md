# アプリケーション名

- check-test

## 環境構築

- Docker を起動する
  docker-compose up -d --build

- コンテナに入る
  docker-compose exec app bash

- Laravel の初期設定
  composer install
  cp .env.example .env
  php artisan key:generate

## 使用技術(実行環境)

- PHP 7.4.9-fpm
- Laravel 8.75
- MySQL 8.0.26
- Docker
- Nginx 1.21.1

## ER 図

< - - - 作成した ER 図の画像 - - - >

## URL

- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/
