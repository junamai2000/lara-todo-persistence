<?php
declare(strict_types=1);

namespace N1215\LaraTodo\Impls\POPOAndQueryBuilder;

use Carbon\Carbon;
use N1215\LaraTodo\Common\CompletedAt;
use N1215\LaraTodo\Common\Title;
use N1215\LaraTodo\Common\TodoItemId;

/**
 * POPOのエンティティ実装のファクトリ
 * Class TodoItemFactory
 * @package N1215\LaraTodo\Impls\POPOAndQueryBuilder
 */
class TodoItemFactory
{
    /**
     * 配列から作成
     * @param array $record
     * @return TodoItem
     */
    public function fromArray(array $record): TodoItem
    {
        return new TodoItem(
            TodoItemId::of(isset($record['id']) ? intval($record['id']) : null),
            Title::of($record['title']),
            CompletedAt::of(isset($record['completed_at']) ? new Carbon($record['completed_at']) : null)
        );
    }
}
