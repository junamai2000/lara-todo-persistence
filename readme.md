## LaravelとEloquentの永続化パターンのサンプル

[laravel.osaka #12のスライド](https://speakerdeck.com/n1215/laraveltodomeinmoderutoyong-sok-hua-moderu-at-laravel-dot-osaka-number-12)用のサンプルコード。

簡単なTodo管理Webアプリの要件としてTodoItemInterfaceとTodoItemRepositoryInterfaceを6パターンで実装した例。
サービスプロバイダ [AppServiceProvider](app/Providers/AppServiceProvider.php) でTodoItemRepositoryInterfaceの実装を切り替えることが可能。

### 実装したインターフェース
- [\N1215\LaraTodo\Common\TodoItemInterfeace](app/Common/TodoItemInterface.php)
- [\N1215\LaraTodo\Common\TodoItemRepositoryInterface](app/Common/TodoItemRepositoryInterface.php)

## 実装6パターン
- [1 Eloquent ModelをEntityとする](app/Impls/EloquentAsEntity)
- [2 EntityがEloquent Modelを中に持つ](app/Impls/EntityContainsEloquent)
- [3 POPOのEntityとEloquent Model](app/Impls/POPOAndEloquent)
- [4 POPOのEntityとQuery Builder](app/Impls/POPOAndQueryBuilder)
- [5 POPOのEntityとPDO](app/Impls/POPOAndPDO)
- [6 POPOのEntityとAtlas](app/Impls/POPOAndAtlas) ※ Atlas → [http://atlasphp.io/](http://atlasphp.io/)
