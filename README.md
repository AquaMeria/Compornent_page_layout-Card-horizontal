# カード型水平レイアウト

## 検証・対応ブラウザ  
|| **Windows** | **Mac** | **スマートフォン・タブレット** |
|:----- |:-----:|:-----:|:-----:|
|InternetExplorer 11|○|×|×|
|Safari 最新版|×|○|○|
|GoogleChrome 最新版|○|○|○|
|Firefox 最新版|○|○|×|
|iOS 10~|×|×|○|
|AndroidOS 5.0~|×|×|○|  
 
 
## ディレクトリ構造  
 ルート  
　├ [css] … サイトで使用するCSSファイル  
　│　├ bootstrap.min.css … Bootstrapの標準CSS  
　│　├ common.css … 共通CSS  
　│　└ pagename.css … 水平型レイアウトのCSS  
　│    
　├ [js] … サイトで使用するJavaScriptファイル            
　│　└ bootstrap.min.js … Bootstrapの標準JS  
　│    
　├ [wordpress] … Wordpress対応用  
　│　├ [css] … サイトで使用するCSSファイル  
　│　│  ├ bootstrap.min.css … Bootstrapの標準CSS  
　│　│  ├ common.css … 共通CSS  
　│　│  └ pagename.css …  水平型レイアウトのCSS  
　│　│     
　│　├ [js] … サイトで使用するJavaScriptファイル  
　│　│  └ bootstrap.min.js … Bootstrapの標準JS  
　│　│  
　│　├ footer.php … フッター共通パーツ  
　│　├ functions.php … 外部ファイル出し訳  
　│　├ header.php … ヘッダー共通パーツ  
　│　└ index.php … 水平型カードレイアウト 
　│ 
　└ index.html