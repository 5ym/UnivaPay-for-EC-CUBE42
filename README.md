# UnivaPay-for-EC-CUBE42

[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)  
EC-CUBE用のUnivaPay導入プラグイン  
UnivaPayの申し込み方法  
<https://www.univapay.com/service/credit/#12>  
最新のリリースは下記から  
<https://github.com/univapay/UnivaPay-for-EC-CUBE42/releases>

## 開発環境

vscode devcontainerを利用しています。

```sh
git clone https://github.com/univapay/UnivaPay-for-EC-CUBE42.git
cd UnivaPay-for-EC-CUBE42
cp compose.sample.yml compose.yml
docker compose up -d
code . # devcontainerで開かなかったらdevcontainerで開きなおしてください
bin/console eccube:install
bin/console eccube:composer:require univapay/php-sdk
bin/console eccube:plugin:install --code=UnivaPay && bin/console eccube:plugin:enable --code=UnivaPay && bin/console cache:clear
cd app/Plugin/UnivaPay # プラグインのディレクトリ
```

<http://localhost:1080>

### DB初期化

```sh
bin/console eccube:install -n && bin/console eccube:plugin:install --code=UnivaPay && bin/console eccube:plugin:enable --code=UnivaPay
```

### 管理者向けアップデート手順

1. composer.json内のversionを上げる
2. masterにコミット後github内でバージョンタグの作成
