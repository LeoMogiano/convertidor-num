# デザインパターンを使用した数値変換計算機ウェブアプリケーション

これは10進数を2進数、8進数、16進数に変換するウェブアプリケーションです。

これは、テンプレートメソッド、プロキシ制御アクセス、ストラテジーのデザインパターンを使用して作成されました。

[English](./README.md) | [Español](./README.es.md) | [Français](./README.fr.md) | [日本語](./README.jp.md)

## 特徴

- **10進数を2進数、8進数、16進数に変換します。**

## プロジェクト構造

プロジェクトはMVCパターンに従って構造化されています。

- **モデル:** データベースのやり取り、ビジネスロジック、およびデータモデルを含みます。

- **ビュー:** HTMLのレンダリングとユーザーインターフェースの担当するプレゼンテーション層を含みます。

- **コントローラ:** アプリケーションの中核ロジックを管理し、リクエストの処理とデータフローの組織化を担当します。

- **Public:** CSS、JavaScript、および画像などの公開アセットを保存します。

## インストール

1. このリポジトリをウェブサーバーのディレクトリにクローンします：

    ```bash
    https://github.com/LeoMogiano/convertidor-num.git
    ```

2. サーバーを実行し、ブラウザでアプリケーションを開きます。

    ```bash
    php -S localhost:8080 -t public
    ```

## スクリーンショット

*ダッシュボード*

<p align="center">
  <img loading="lazy" width="90%" src="./screenshots/s1.png" alt="ダッシュボード" />
</p>

*ダイナミックダイアグラム*

<p align="center">
    <img loading="lazy" width="90%" src="./screenshots/s2.png" alt="ダイアグラム" />
</p>

## 貢献

貢献は歓迎されます！このプロジェクトに貢献したい場合は、リポジトリをフォークして変更を加え、プルリクエストを提出してください。

## ライセンス

このプロジェクトはオープンソースで、[MITライセンス](LICENSE)の下で利用および変更が可能です。教会の管理ニーズに応じて自由に使用および修正できます。

## 連絡先

質問やサポートが必要な場合は、お気軽にお問い合わせください。

アプリケーションのご利用をお楽しみください！
