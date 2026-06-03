# test-app-practice

## 概要

COACHTECH 教材 Tutorial 10-5「テスト ハンズオン演習」で作成した成果物です。
Laravelのテスト機能を使い、ユーザー作成とメールアドレス重複チェックのテストを実装しました。

## 使用技術

- PHP 8.x
- Laravel 10.x
- PHPUnit（テスト）
- Eloquent / Factory

## 学んだこと

- Factory を使ったテストデータ作成
- assertDatabaseHas を使いDBの検証
- expectExceptionによる例外のテスト
- RefreshDatabaseによるテスト環境の初期化

## 動作確認

sail artisan test --filter UserTest を実行し2件のテストが成功することを確認
