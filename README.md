# Markdown-to-HTML
Markdownのプレビュー、HTMLへの変換・ダウンロードができるWEBアプリケーションになります。

## URL 
https://mdtohtml.nakatani.blog


## 概要
エディターに入力したMarkdownをHTMLに変換できるWebアプリケーションです。
エディターにMarkdownを入力すると、表示エリアにリアルタイムに表示させることができます。

## 作成経緯
Markdownは、シンプルかつ直感的な記法で文書を作成できるマークアップ言語で、多くの場面でその便利さが活かされています。<br>
コードスニペットや技術的なメモを簡単に記述できると言ったことから、Markdownで文章を作成したいと言ったときに使用でき、このサービスで実際にプレビューまで行うことができます。また、ダウンロード機能も備っているため、作成したMarkdownをhtmlとして保存することができます。

## 使用技術
- フロントエンド
  - 使用言語： HTML, CSS, Javascript
  - HTTPリクエスト: Fetch API
  - コードエディタ: Monaco Editor

- バックエンド
  - 使用言語： PHP, python
  - マークダウン変換: markdown
  - パッケージ管理: Composer
  - Webサーバー: NGINX
  - サーバー: Amazon EC2
  - SSL/TLS証明書更新: Certbot

## 機能一覧
| 機能 | できること|
| ------- | ------- |
| エディタ | Markdownを記述します。 |
| プレビューエリア | エディタにMarkdownを記述すると、リアルタイムで変換、表示します。 |
| Preview | テキストボックスにレンダリングされたHTMLを表示します。 |
| HTML | テキストボックスにHTMLを表示します。 |
| Hightlight | コードブロックのHightlightをON/OFFで切り替えます。 |
| Download | エディタに入力されている文字列を「converted.html」としてダウンロードできます。 |
